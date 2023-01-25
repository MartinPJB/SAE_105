<?php

    // Importe les data-articles des pages qui sont des articles (importe $dataArticles)
    include('./include/data-articles.php');

    // Import les CGU pour la page a_propos.twig (importe $CGU)
    include('./include/data-CGUs.php');

    // Contient les données de mes pages
    $dataPages = [
        "index.twig" => [
            "title" => "Accueil",
            "titreHeader" => "ACCUEIL DU SITE",
            "classeMain" => "column"
        ],

        "contact.twig" => [
            "title" => "Contact",
            "titreHeader" => "CONTACT",
            "classeMain" => "column"
        ],

        "a_propos.twig" => [
            "title" => "A propos",
            "titreHeader" => "A PROPOS",
            "classeMain" => "column",
            "cgus" => $CGU
        ],

        "ressources.twig" => [
            "title" => "Ressources",
            "titreHeader" => "RESSOURCES",
            "classeMain" => "withAside",
            "articles" => $dataArticles["ressources"]
        ],

        "logiciels.twig" => [
            "title" => "Logiciels",
            "titreHeader" => "LOGICIELS",
            "classeMain" => "withAside",
            "articles" => $dataArticles["logiciels"]
        ],
    ];