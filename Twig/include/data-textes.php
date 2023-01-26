<?php

    // Le contenu du site hors des articles (Genre footer, page d'accueil, formulaire contact, etc...)
    $dataTextes = [
        // VF
        'fr' => [
            // Commun à toutes les pages
            'all' => [
                'footer' => [
                    'creator' => 'Sité réalisé par Martin Brönnimann',
                    'context' => 'Dans le cadre de la SAE 105',
                    'label-nav' => 'Footer contenant liens pour les catégories ainsi que de leurs articles',
                    'drapeau-fr' => 'Icône Drapeau FR pour contenu du site',
                    'drapeau-dk' => 'Icône Drapeau DK pour contenu du site'
                ]
            ],

            // Page accueil
            'accueil' => [
                'h1' => [
                    'infosColorBass' => 'La "Color Bass"? C\'est quoi?',
                    'music' => 'Comment ça sonne?'
                ],
                'p' => [
                    'definition' => 'La <b>Color Bass</b> est une catégorisation de <b><a href="https://fr.wikipedia.org/wiki/Bass_music" target="_blank">Bass Music</a></b> se concentrant sur la mélodie, l\'émotion et la vibration parallèlement au dynamisme et à l\'agressivité des basses souvent associés au <b><a href="https://fr.wikipedia.org/wiki/Dubstep#:~:text=Le%20dubstep%20est%20un%20genre,%2C%20jungle%2C%20dub%20et%20reggae." target="_blank">Dubstep</a></b>.',
                    'terme' => 'Le terme de <b>Color Bass</b> a été inventé par le producteur<b> <a href="https://www.chimetunes.net/" target="_blank">Chime</a></b> <i>(A.K.A Harvey Oscar Thompson)</i>, un artiste originaire d\'<b>Angleterre</b> ayant commencé la composition de musique éléctronique en <b>2010</b> avec la création d\'un duo avec l\'artiste <b>James Shakeshaft</b> appelé <i>"Caution & Crisis"</i>.',
                    'disclaimer' => 'Attention, une confusion que beaucoup de gens font dans ce milieu, la Color Bass <strong>n\'est pas du Dubstep</strong>. La Color Bass <strong>n\'en est qu\'un sous-genre</strong>! C\'est à dire que ce genre de musique a été issu du Dubstep, mais <strong>issu ne signifie pas le même</strong>. Il ne faut pas voir les deux comme la même chose car de nombreuses choses divergent entre les deux styles.'
                ]
            ],

            // Page de ressources
            'ressources' => [
                'h1' => 'Ressources pour faire de la Color Bass'
            ],

            // Page logiciels
            'logiciels' => [
                'h1' => 'Les logiciels pour faire de la Color Bass',
                'fonctionnalites' => 'contient une variété de fonctionnalités pour la production musicale:',
                'button' => 'Visiter leur site'
            ],

            // Page artistes
            'artistes' => [
                'h1' => 'Artistes étant reconnus pour faire de la Color Bass',
                'th' => 'Informations'
            ],

            // Page contact
            'contact' => [
                'h1' => 'REMPLISSEZ CE FORMULAIRE',
                'legends' => [
                    'sexe' => 'Votre sexe',
                    'info' => 'Informations',
                    'comment' => 'Commentaire',
                    'infoPlus' => 'Infos complémentaires',
                    'submitMsg' => 'Pour valider vos informations saisies',
                    'submit' => 'Valider'
                ],
                'labels' => [
                    'woman' => 'Femme',
                    'man' => 'Homme',
                    'other' => 'Autre',
                    'none' => 'Je ne préfère pas répondre',
                    'reason' => 'Raison de votre contact',
                    'anonymous' => 'Rester anonyme',
                    'name' => 'Votre nom',
                    'mail' => 'Votre adresse mail',
                    'anonymousDetail' => 'Seulement votre nom sera affecté, non pas votre adresse mail',
                    'commentPlaceholder' => 'Veuillez entrer vos commentaires ici.'
                ],
                'select' => [
                    'problem' => 'Un problème avec le site',
                    'question' => 'Une question relative au contenu du site',
                    'report' => 'Un rapport de bug ou de faille de sécurité sur le site'
                ]
            ],

            'cgu' => [
                ["Introduction", 'Les présentes conditions générales d\'utilisation (ci-après désignées les "CGU") ont pour objet l\'encadrement juridique des modalités de mise à disposition des services du site Color Bass, et leur utilisation par "l\'Utilisateur". Les CGU doivent être acceptées par tout Utilisateur souhaitant accéder au site. Elles constituent le contrat entre le site et l\'Utilisateur. L\'accès au site par l\'Utilisateur signifie son acceptation des CGU.'],
                ["Contenu", "Le site Color Bass a pour objet de fournir une information concernant la nature de la Color Bass. Les contenus (notamment textes, photographies, vidéos, fonctionnalités, etc.) sont fournis à titre informatif."],
                ["Propriété Intellectuelle", "Les contenus du site Color Bass (textes, photographies, vidéos, fonctionnalités, etc.) ne sont pas protégés par les droits de propriété intellectuelle. Cependant, il est possible que certains contenus externes partagés sur le site (par exemple, des liens vers des vidéos sur YouTube) soient soumis aux droits d'auteur de leurs propriétaires respectifs. Il est de la responsabilité de l'Utilisateur de s'informer sur les éventuels droits d'auteur applicables avant de diffuser ou de reproduire ces contenus externes."],
                ["Responsabilité", "Les informations diffusées sur le site Color Bass sont fournies en l'état. Le site ne pourra être tenu responsable de toute imprécision, inexactitude ou omission dans les informations diffusées sur le site."],
                ["Liens Hypertextes", "Le site Color Bass peut contenir des liens hypertextes vers d'autres sites présents sur le réseau Internet. Les liens vers ces autres ressources vous font quitter le site Color Bass. Il est possible de créer un lien vers la page de présentation de ce site sans autorisation expresse."],
                ["Évolution des CGU", "Les CGU peuvent être modifiées à tout moment et sans préavis par le site Color Bass. Il est de l'Utilisateur de se référer régulièrement à la dernière version des CGU en vigueur"],
                ["Durée des CGU", "La durée des CGU est indéterminée. Le contrat produit ses effets à l'égard de l'Utilisateur à compter de l'utilisation du service."],
                ["Droit Applicable et Juridiction Compétente", "Les CGU sont régies par et interprétées conformément aux lois Françaises. Tout litige en relation avec l'utilisation du site Color Bass est soumis aux tribunaux compétents de Haguenau."]
            ]
        ],

        // VDANOISE
        'dk' => [
            'all' => [
                'footer' => [
                    'creator' => 'Sité réalisé par Martin Brönnimann',
                    'context' => 'Dans le cadre de la SAE 105',
                    'label-nav' => 'Footer contenant liens pour les catégories ainsi que de leurs articles',
                    'drapeau-fr' => 'Icône Drapeau FR pour contenu du site',
                    'drapeau-dk' => 'Icône Drapeau DK pour contenu du site'
                ]
            ],

            'accueil' => [
                'h1' => [
                    'infosColorBass' => 'La "Color Bass"? C\'est quoi?',
                    'music' => 'Comment ça sonne?'
                ],
                'p' => [
                    'definition' => 'La <b>Color Bass</b> est une catégorisation de <b><a href="https://fr.wikipedia.org/wiki/Bass_music" target="_blank">Bass Music</a></b> se concentrant sur la mélodie, l\'émotion et la vibration parallèlement au dynamisme et à l\'agressivité des basses souvent associés au <b><a href="https://fr.wikipedia.org/wiki/Dubstep#:~:text=Le%20dubstep%20est%20un%20genre,%2C%20jungle%2C%20dub%20et%20reggae." target="_blank">Dubstep</a></b>.',
                    'terme' => 'Le terme de <b>Color Bass</b> a été inventé par le producteur<b> <a href="https://www.chimetunes.net/" target="_blank">Chime</a></b> <i>(A.K.A Harvey Oscar Thompson)</i>, un artiste originaire d\'<b>Angleterre</b> ayant commencé la composition de musique éléctronique en <b>2010</b> avec la création d\'un duo avec l\'artiste <b>James Shakeshaft</b> appelé <i>"Caution & Crisis"</i>.',
                    'disclaimer' => 'Attention, une confusion que beaucoup de gens font dans ce milieu, la Color Bass <strong>n\'est pas du Dubstep</strong>. La Color Bass <strong>n\'en est qu\'un sous-genre</strong>! C\'est à dire que ce genre de musique a été issu du Dubstep, mais <strong>issu ne signifie pas le même</strong>. Il ne faut pas voir les deux comme la même chose car de nombreuses choses divergent entre les deux styles.'
                ]
            ],

            'ressources' => [
                'h1' => 'Ressources pour faire de la Color Bass'
            ],

            'logiciels' => [
                'h1' => 'Les logiciels pour faire de la Color Bass',
                'fonctionnalites' => 'contient une variété de fonctionnalités pour la production musicale:',
                'button' => 'Visiter leur site'
            ],

            'artistes' => [
                'h1' => 'Artistes étant reconnus pour faire de la Color Bass',
                'th' => 'Informations'
            ],

            'contact' => [
                'h1' => 'REMPLISSEZ CE FORMULAIRE',
                'legends' => [
                    'sexe' => 'Votre sexe',
                    'info' => 'Informations',
                    'comment' => 'Commentaire',
                    'infoPlus' => 'Infos complémentaires',
                    'submitMsg' => 'Pour valider vos informations saisies',
                    'submit' => 'Valider'
                ],
                'labels' => [
                    'woman' => 'Femme',
                    'man' => 'Homme',
                    'other' => 'Autre',
                    'none' => 'Je ne préfère pas répondre',
                    'reason' => 'Raison de votre contact',
                    'anonymous' => 'Rester anonyme',
                    'name' => 'Votre nom',
                    'mail' => 'Votre adresse mail',
                    'anonymousDetail' => 'Seulement votre nom sera affecté, non pas votre adresse mail',
                    'commentPlaceholder' => 'Veuillez entrer vos commentaires ici.'
                ],
                'select' => [
                    'problem' => 'Un problème avec le site',
                    'question' => 'Une question relative au contenu du site',
                    'report' => 'Un rapport de bug ou de faille de sécurité sur le site'
                ]
            ],

            'cgu' => [
                ["Introduction", 'Les présentes conditions générales d\'utilisation (ci-après désignées les "CGU") ont pour objet l\'encadrement juridique des modalités de mise à disposition des services du site Color Bass, et leur utilisation par "l\'Utilisateur". Les CGU doivent être acceptées par tout Utilisateur souhaitant accéder au site. Elles constituent le contrat entre le site et l\'Utilisateur. L\'accès au site par l\'Utilisateur signifie son acceptation des CGU.'],
                ["Contenu", "Le site Color Bass a pour objet de fournir une information concernant la nature de la Color Bass. Les contenus (notamment textes, photographies, vidéos, fonctionnalités, etc.) sont fournis à titre informatif."],
                ["Propriété Intellectuelle", "Les contenus du site Color Bass (textes, photographies, vidéos, fonctionnalités, etc.) ne sont pas protégés par les droits de propriété intellectuelle. Cependant, il est possible que certains contenus externes partagés sur le site (par exemple, des liens vers des vidéos sur YouTube) soient soumis aux droits d'auteur de leurs propriétaires respectifs. Il est de la responsabilité de l'Utilisateur de s'informer sur les éventuels droits d'auteur applicables avant de diffuser ou de reproduire ces contenus externes."],
                ["Responsabilité", "Les informations diffusées sur le site Color Bass sont fournies en l'état. Le site ne pourra être tenu responsable de toute imprécision, inexactitude ou omission dans les informations diffusées sur le site."],
                ["Liens Hypertextes", "Le site Color Bass peut contenir des liens hypertextes vers d'autres sites présents sur le réseau Internet. Les liens vers ces autres ressources vous font quitter le site Color Bass. Il est possible de créer un lien vers la page de présentation de ce site sans autorisation expresse."],
                ["Évolution des CGU", "Les CGU peuvent être modifiées à tout moment et sans préavis par le site Color Bass. Il est de l'Utilisateur de se référer régulièrement à la dernière version des CGU en vigueur"],
                ["Durée des CGU", "La durée des CGU est indéterminée. Le contrat produit ses effets à l'égard de l'Utilisateur à compter de l'utilisation du service."],
                ["Droit Applicable et Juridiction Compétente", "Les CGU sont régies par et interprétées conformément aux lois Françaises. Tout litige en relation avec l'utilisation du site Color Bass est soumis aux tribunaux compétents de Haguenau."]
            ]
        ]
    ];