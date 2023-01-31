<?php

// Tableau qui contiennent les éléments répétitifs de mon formulaire
$form = [
    // Tous les inputs du fieldset contenant les infos sur le genre de l'utilisateur
    'gender' => [
        [
            'id' => 'woman',
            'type' => 'radio'
        ],
        [
            'id' => 'man',
            'type' => 'radio'
        ],
        [
            'id' => 'other',
            'type' => 'radio'
        ],
        [
            'id' => 'none',
            'type' => 'radio'
        ]
    ],

    // Tous les inputs présents dans le fieldset de la raison du contact
    'raison' => [
        [
            'id' => 'name',
            'type' => 'text',
            'placeholder' => 'Jean Dupont'
        ],
        [
            'id' => 'mail',
            'type' => 'email',
            'placeholder' => 'jdupont67@gmail.com'
        ]
    ]
];