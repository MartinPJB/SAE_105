<?php

// Importe les data-articles des pages qui sont des articles (importe $dataLogiciels, $dataArtistes, $dataRessources)
include('./include/articles/data-artistes.php');
include('./include/articles/data-logiciels.php');
include('./include/articles/data-ressources.php');

// Importe les traductions des pages ($dataTextes)
include('./include/data-textes.php');

// Contient les données de mes pages
$dataPages = [
    "fr" => [
        "accueil" => [
            "titre" => "Accueil",
            "classeMain" => "column",
            "traduction" => $dataTextes["fr"]["accueil"]
        ],

        "ressources" => [
            "titre" => "Ressources",
            "classeMain" => "withAside",
            "articles" => $dataRessources["fr"],
            "traduction" => $dataTextes["fr"]["ressources"]
        ],

        "logiciels" => [
            "titre" => "Logiciels",
            "classeMain" => "withAside",
            "articles" => $dataLogiciels["fr"],
            "traduction" => $dataTextes["fr"]["logiciels"]
        ],

        "artistes" => [
            "titre" => "Artistes",
            "classeMain" => "withAside",
            "articles" => $dataArtistes["fr"],
            "traduction" => $dataTextes["fr"]["artistes"]
        ],

        "contact" => [
            "titre" => "Contact",
            "classeMain" => "column",
            "traduction" => $dataTextes["fr"]["contact"]
        ],

        "a_propos" => [
            "titre" => "A propos",
            "classeMain" => "column",
            "traduction" => $dataTextes["fr"]["cgu"]
        ],
    ],

    "dk" => [
        "accueil" => [
            "titre" => "Forside",
            "classeMain" => "column",
            "traduction" => $dataTextes["dk"]["accueil"]
        ],

        "ressources" => [
            "titre" => "Ressourcer",
            "classeMain" => "withAside",
            "traduction" => $dataTextes["dk"]["ressources"],
            "articles" => $dataRessources["dk"]
        ],

        "logiciels" => [
            "titre" => "Software",
            "classeMain" => "withAside",
            "traduction" => $dataTextes["dk"]["logiciels"],
            "articles" => $dataLogiciels["dk"]
        ],

        "artistes" => [
            "titre" => "Kunstnere",
            "classeMain" => "withAside",
            "traduction" => $dataTextes["dk"]["artistes"],
            "articles" => $dataArtistes["dk"]
        ],

        "contact" => [
            "titre" => "Kontakt",
            "classeMain" => "column",
            "traduction" => $dataTextes["dk"]["contact"]
        ],

        "a_propos" => [
            "titre" => "Om os",
            "classeMain" => "column",
            "traduction" => $dataTextes["dk"]["cgu"]
        ],
    ]
];