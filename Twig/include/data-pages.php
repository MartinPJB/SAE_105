<?php

    // Importe les data-articles des pages qui sont des articles (importe $dataArticles)
    include('./include/data-articles.php');

    // Import les CGU pour la page a_propos (importe $CGU)
    include('./include/data-CGUs.php');

    // Contient les données de mes pages
    $dataPages = [
        "accueil" => [
            "titre" => "Accueil",
            "titreHeader" => "ACCUEIL DU SITE",
            "classeMain" => "column"
        ],

        "ressources" => [
            "titre" => "Ressources",
            "titreHeader" => "RESSOURCES",
            "classeMain" => "withAside",
            "articles" => $dataArticles["ressources"]
        ],

        "logiciels" => [
            "titre" => "Logiciels",
            "titreHeader" => "LOGICIELS",
            "classeMain" => "withAside",
            "articles" => $dataArticles["logiciels"]
        ],

        "artistes" => [
            "titre" => "Artistes",
            "titreHeader" => "ARTISTES",
            "classeMain" => "withAside",
            "articles" => $dataArticles["artistes"]
        ],

        "contact" => [
            "titre" => "Contact",
            "titreHeader" => "CONTACT",
            "classeMain" => "column"
        ],

        "a_propos" => [
            "titre" => "A propos",
            "titreHeader" => "A PROPOS",
            "classeMain" => "column",
            "cgus" => $CGU
        ],
    ];