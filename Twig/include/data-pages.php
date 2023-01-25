<?php

    // Importe les data-articles des pages qui sont des articles (importe $dataArticles)
    include('./include/data-articles.php');

    // Import les CGU pour la page a_propos (importe $CGU)
    include('./include/data-CGUs.php');

    // Contient les données de mes pages
    $dataPages = [
        "accueil" => [
            "title" => "Accueil",
            "titreHeader" => "ACCUEIL DU SITE",
            "classeMain" => "column"
        ],

        "ressources" => [
            "title" => "Ressources",
            "titreHeader" => "RESSOURCES",
            "classeMain" => "withAside",
            "articles" => $dataArticles["ressources"]
        ],

        "logiciels" => [
            "title" => "Logiciels",
            "titreHeader" => "LOGICIELS",
            "classeMain" => "withAside",
            "articles" => $dataArticles["logiciels"]
        ],

        "artistes" => [
            "title" => "Artistes",
            "titreHeader" => "ARTISTES",
            "classeMain" => "withAside",
            "articles" => $dataArticles["artistes"]
        ],

        "contact" => [
            "title" => "Contact",
            "titreHeader" => "CONTACT",
            "classeMain" => "column"
        ],

        "a_propos" => [
            "title" => "A propos",
            "titreHeader" => "A PROPOS",
            "classeMain" => "column",
            "cgus" => $CGU
        ],
    ];