<?php 

    // Include twig dans notre projet
    include('./include/twig.php');
    $twig = init_twig();

    // Include les datas des pages (importe $dataPages)
    include('./include/data-pages.php');

    // Un routeur simple pour toutes les pages pour ne pas avoir besoin de créer un .php pour chaque fichier
    $request = $_SERVER["REQUEST_URI"];
    $endpoints = explode("/", $request);
    $finalEndpoint = end($endpoints);

    $pages = array_diff(scandir("./templates/"), array('.', '..')); // Récupère les pages existantes
    $pages = array_diff($pages, array("base.twig")); // On enlève le base.twig car pas besoin pour les pages
    
    // On va vérifier si l'endpoint est dans la liste des pages
    if ($finalEndpoint != "" && in_array($finalEndpoint.".twig", $pages)) {
        echo $twig->render($finalEndpoint.".twig", $dataPages[$finalEndpoint.".twig"]);
    } else {
        // Le "" n'est pas dans la liste des pages, cependant, on doit afficher le index quand l'url n'a pas d'endpoint
        if ($finalEndpoint == "") {
            echo $twig->render("index.twig", $dataPages["index.twig"]);
        } else {
            // Erreur 404
            echo "404";
        }
    }

