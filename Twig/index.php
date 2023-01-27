<?php 
    // Include twig dans notre projet
    include('./include/twig.php');
    $twig = init_twig();

    // Include les données des pages (importe $dataPages, $dataArticles ainsi que $dataTextes)
    // Ce include permet de récupérer les données des pages qui seront utilisées pour afficher les différentes pages du site
    include('./include/data-pages.php');

    // Un routeur simple pour toutes les pages pour ne pas avoir besoin de créer un .php pour chaque fichier
    // Récupère l'URL de la page demandée
    $request = $_SERVER['REQUEST_URI'];
    // Parse l'URL pour récupérer les différents segments de l'URL
    $parsed = parse_url($request);
    // Explose l'URL en segments pour pouvoir traiter chacun des segments individuellement
    $endpoints = explode('/', $parsed['path']);

    // S'occupe du langage dans l'URL (Exemple: .../fr/accueil OU .../dk/ressources)
    // Langue par défaut du site
    $defaultLanguage = 'fr';
    // Langues supportées par le site
    $supportedLangs = array_keys($dataPages);

    // Récupère le dernier segment de l'URL (nom de la page)
    $finalEndpoint = end($endpoints);
    // Récupère l'avant-dernier segment de l'URL (langue de la page)
    $supposedToBeLang = prev($endpoints);

    // Si l'utilisateur n'a pas sa langue dans son URL, on redirige vers la langue par défaut
    if ($supposedToBeLang == '' || !in_array($supposedToBeLang, $supportedLangs)) {
        header("Location: $defaultLanguage/$finalEndpoint");
        die();
    }

    // Récupère toutes les pages existantes dans le dossier templates
    $pages = array_diff(scandir('./templates/'), array('.', '..')); 
    // On enlève le fichier base.twig car il n'est pas utilisé pour afficher les pages
    $pages = array_diff($pages, array('base.twig')); 

    // Récupère toutes les pages ajoutées au site depuis $dataPages et les met dans un tableau
    // Récupère les clés des pages (nom des pages)
    $pageKeys = array_keys($dataPages[$supposedToBeLang]);
    // Récupère les traductions des noms des pages
    $pageNamesTranslation = array_column($dataPages[$supposedToBeLang], 'titre');

    // Ce tableau contient donc tous les articles de chaque catégorie (artistes, logiciels, ressources) pour les afficher dans le footer
    $dataArticles = [
        'artistes' => $dataArtistes[$supposedToBeLang],
        'logiciels' => $dataLogiciels[$supposedToBeLang],
        'ressources' => $dataRessources[$supposedToBeLang]
    ];

    // Ce tableau contient toutes les données qui seront utilisées dans les pages en plus des données de pages (dataPages) définies dans data-pages.php
    $ajoutData = [
        'pages' => $pageKeys,
        'traductionsNomPages' => $pageNamesTranslation,
        'active' => $finalEndpoint,
        'footerArticles' => $dataArticles,
        '__trad' => $dataTextes[$supposedToBeLang]['all']
    ];

    // On va vérifier si l'endpoint est dans la liste des pages
    if ($finalEndpoint != '' && in_array($finalEndpoint.'.twig', $pages)) {
        echo $twig->render("$finalEndpoint.twig", array_merge($dataPages[$supposedToBeLang][$finalEndpoint], $ajoutData));
    } else {
        // Le '' n'est pas dans la liste des pages, cependant, on doit afficher le index quand l'url n'a pas d'endpoint
        if ($finalEndpoint == '') {
            echo $twig->render('accueil.twig', array_merge($dataPages[$supposedToBeLang]['accueil'], $ajoutData));
        } else {
            // Erreur 404
            echo $twig->render('erreur.twig', [
                'httpCode' => '404'
            ]);
        }
    }