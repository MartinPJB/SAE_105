<?php 

    // Include twig dans notre projet
    include('./include/twig.php');
    $twig = init_twig();

    // Include les datas des pages (importe $dataPages, $dataArticles ainsi que $dataTextes)
    include('./include/data-pages.php');

    // Un routeur simple pour toutes les pages pour ne pas avoir besoin de créer un .php pour chaque fichier
    $request = $_SERVER["REQUEST_URI"];
    $parsed = parse_url($request);
    $endpoints = explode("/", $parsed["path"]);

    // S'occupe du langage dans l'url (Exemple: .../fr/accueil OU .../dk/ressources)
    $defaultLanguage = "fr";
    $supportedLangs = array_keys($dataPages); // Comme le premier niveau de ce tableau multidimmensionel sont les codes de langues, on peut juste les prendres pour avoir la liste des languages supportés

    $finalEndpoint = end($endpoints);
    $supposedToBeLang = prev($endpoints);

    // L'utilisateur n'a pas sa langue dans son URL, on redirige vers la langue par défaut
    if ($supposedToBeLang == "" || !in_array($supposedToBeLang, $supportedLangs)) {
        header("Location: ./$defaultLanguage/$finalEndpoint");
        die();
    }

    $pages = array_diff(scandir("./templates/"), array('.', '..')); // Récupère les pages existantes
    $pages = array_diff($pages, array("base.twig")); // On enlève le base.twig car pas besoin pour les pages
    
    // Récupère toutes les pages ajoutées au site depuis $dataPages et les met dans un tableau
    $pageKeys = array_keys($dataPages[$supposedToBeLang]);
    $pageNamesTranslation = array_column($dataPages[$supposedToBeLang], "titre");


    // Données qui vont êtres ajoutées en plus du $dataPages sur les pages twig
    $ajoutData = [
        "pages" => $pageKeys, // <-- Les pages existantes dans le data-pages pour les mettres dans la navbar automatiquement
        "traductionsNomPages" => $pageNamesTranslation, // <-- La traduction des noms de pages en fonction du langage
        "active" => $finalEndpoint, //  <-- L'endpoint pour vérifier la page active
        "footerArticles" => $dataArticles[$supposedToBeLang], // <-- Récupère le $dataArticles pour les afficher dans le footer
        "__trad" => $dataTextes[$supposedToBeLang]["all"] // <-- Les traductions globales (sur toutes les pages)
    ];


    // On va vérifier si l'endpoint est dans la liste des pages
    if ($finalEndpoint != "" && in_array($finalEndpoint.".twig", $pages)) {
        echo $twig->render("$finalEndpoint.twig", array_merge($dataPages[$supposedToBeLang][$finalEndpoint], $ajoutData));
    } else {
        // Le "" n'est pas dans la liste des pages, cependant, on doit afficher le index quand l'url n'a pas d'endpoint
        if ($finalEndpoint == "") {
            echo $twig->render("accueil.twig", array_merge($dataPages[$supposedToBeLang]["accueil"], $ajoutData));
        } else {
            // Erreur 404
            echo "404";
        }
    }

