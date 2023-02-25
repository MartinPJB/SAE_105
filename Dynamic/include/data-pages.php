<?php

// Importe les articles contenus dans chaques catégories (soit $dataLogiciels, $dataArtistes, $dataRessources)
include('./include/categories/data-artistes.php');
include('./include/categories/data-logiciels.php');
include('./include/categories/data-ressources.php');

// Importe les data des pages
include('./include/pages/data-accueil.php');
include('./include/pages/data-contact.php');

// Importe les traductions des pages ($dataTextes)
include('./include/data-textes.php');


/*
    Tableau contenant toutes les données des pages du site qui seront transmise à Twig pour le rendu
    Le tableau est réparti en langues, car les titres des pages ainsi que les textes traduits propres aux pages diffèrent selon la langue
    C'est également grâce à ces clés que je peux récupérer la liste des langues disponibles dans index.php
*/
$dataPages = [
    'fr' => [
        'accueil' => [
            'titre' => 'Accueil',
            'classeMain' => 'column',
            'traduction' => $dataTextes['fr']['accueil'],
            'videos' => $videos
        ],

        'ressources' => [
            'titre' => 'Ressources',
            'classeMain' => 'withAside',
            'articles' => $dataRessources['fr'],
            'traduction' => $dataTextes['fr']['ressources']
        ],

        'logiciels' => [
            'titre' => 'Logiciels',
            'classeMain' => 'withAside',
            'articles' => $dataLogiciels['fr'],
            'traduction' => $dataTextes['fr']['logiciels']
        ],

        'artistes' => [
            'titre' => 'Artistes',
            'classeMain' => 'withAside',
            'articles' => $dataArtistes['fr'],
            'traduction' => $dataTextes['fr']['artistes']
        ],

        'contact' => [
            'titre' => 'Contact',
            'classeMain' => 'column',
            'traduction' => $dataTextes['fr']['contact'],
            'form' => $form
        ],

        'a_propos' => [
            'titre' => 'A propos',
            'classeMain' => 'column',
            'traduction' => $dataTextes['fr']['cgu']
        ],
    ],

    'dk' => [
        'accueil' => [
            'titre' => 'Forside',
            'classeMain' => 'column',
            'traduction' => $dataTextes['dk']['accueil'],
            'videos' => $videos
        ],

        'ressources' => [
            'titre' => 'Ressourcer',
            'classeMain' => 'withAside',
            'traduction' => $dataTextes['dk']['ressources'],
            'articles' => $dataRessources['dk']
        ],

        'logiciels' => [
            'titre' => 'Software',
            'classeMain' => 'withAside',
            'traduction' => $dataTextes['dk']['logiciels'],
            'articles' => $dataLogiciels['dk']
        ],

        'artistes' => [
            'titre' => 'Kunstnere',
            'classeMain' => 'withAside',
            'traduction' => $dataTextes['dk']['artistes'],
            'articles' => $dataArtistes['dk']
        ],

        'contact' => [
            'titre' => 'Kontakt',
            'classeMain' => 'column',
            'traduction' => $dataTextes['dk']['contact'],
            'form' => $form
        ],

        'a_propos' => [
            'titre' => 'Om os',
            'classeMain' => 'column',
            'traduction' => $dataTextes['dk']['cgu']
        ],
    ],
];