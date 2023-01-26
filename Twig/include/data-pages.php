<?php

    // Importe les data-articles des pages qui sont des articles (importe $dataArticles)
    include('./include/data-articles.php');

    // Importe les traductions des pages ($dataTextes)
    include('./include/data-textes.php');

    // Contient les données de mes pages
    $dataPages = [
        "fr" => [
            "accueil" => [
                "titre" => "Accueil",
                "titreHeader" => "ACCUEIL DU SITE",
                "classeMain" => "column",
                "traduction" => $dataTextes["fr"]["accueil"]
            ],
    
            "ressources" => [
                "titre" => "Ressources",
                "titreHeader" => "RESSOURCES",
                "classeMain" => "withAside",
                "articles" => $dataArticles["fr"]["ressources"],
                "traduction" => $dataTextes["fr"]["ressources"]
            ],
    
            "logiciels" => [
                "titre" => "Logiciels",
                "titreHeader" => "LOGICIELS",
                "classeMain" => "withAside",
                "articles" => $dataArticles["fr"]["logiciels"],
                "traduction" => $dataTextes["fr"]["logiciels"]
            ],
    
            "artistes" => [
                "titre" => "Artistes",
                "titreHeader" => "ARTISTES",
                "classeMain" => "withAside",
                "articles" => $dataArticles["fr"]["artistes"],
                "traduction" => $dataTextes["fr"]["artistes"]
            ],
    
            "contact" => [
                "titre" => "Contact",
                "titreHeader" => "CONTACT",
                "classeMain" => "column",
                "traduction" => $dataTextes["fr"]["contact"]
            ],
    
            "a_propos" => [
                "titre" => "A propos",
                "titreHeader" => "A PROPOS",
                "classeMain" => "column",
                "traduction" => $dataTextes["fr"]["cgu"]
            ],
        ],

        "dk" => [
            "accueil" => [
                "titre" => "Forside",
                "titreHeader" => "HJEMMESIDEHJEM",
                "classeMain" => "column",
                "traduction" => $dataTextes["dk"]["accueil"]
            ],
    
            "ressources" => [
                "titre" => "Ressourcer",
                "titreHeader" => "RESSOURCER",
                "classeMain" => "withAside",
                "traduction" => $dataTextes["dk"]["ressources"],
                "articles" => $dataArticles["dk"]["ressources"]
            ],
    
            "logiciels" => [
                "titre" => "Software",
                "titreHeader" => "SOFTWARE",
                "classeMain" => "withAside",
                "traduction" => $dataTextes["dk"]["logiciels"],
                "articles" => $dataArticles["dk"]["logiciels"]
            ],
    
            "artistes" => [
                "titre" => "Musikere",
                "titreHeader" => "MUSIKERE",
                "classeMain" => "withAside",
                "traduction" => $dataTextes["dk"]["artistes"],
                "articles" => $dataArticles["dk"]["artistes"]
            ],
    
            "contact" => [
                "titre" => "Kontakt",
                "titreHeader" => "KONTAKT",
                "classeMain" => "column",
                "traduction" => $dataTextes["dk"]["contact"]
            ],
    
            "a_propos" => [
                "titre" => "Om os",
                "titreHeader" => "OM OS",
                "classeMain" => "column",
                "traduction" => $dataTextes["dk"]["cgu"]
            ],
        ]        
    ];