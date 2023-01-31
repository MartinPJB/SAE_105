<?php

/*
    Tableau contenant tous les textes du site qui seront transmis à Twig pour le rendu (par l'intermédiaire de data-pages.php)
    Le tableau est également réparti en langues afin de faciliter la séparation des textes selon la langue
*/
$dataTextes = [
    // Version française
    'fr' => [
            // Commun à toutes les pages
            'all' => [
                'footer' => [
                    'creator' => 'Site réalisé par Martin Brönnimann',
                    'context' => 'Dans le cadre de la SAE 105',
                    'label-nav' => 'Footer contenant liens pour les catégories ainsi que de leurs articles',
                    'drapeau' => 'Icône Drapeau {{ langue }} pour contenu du site'
                ],
                'nav' => [
                    'main' => 'Menu principal'
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
                'th' => 'Informations',
                'liens' => 'Liens',
                'pronom' => 'Son'
            ],

            // Page contact
            'contact' => [
                'h1' => 'REMPLISSEZ CE FORMULAIRE',
                'legends' => [
                    'gender' => 'Votre sexe',
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
                "h1" => "Conditions Générales d'Utilisation",
                "conditions" => [
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
    ],

    // Version Danoise (Traduction de tout ce qui est en Danois vérifiée, corrigée et complétée par ma copine le parlant couramment)
    'dk' => [
            'all' => [
                'footer' => [
                    'creator' => 'Side lavet af Martin Brönnimann',
                    'context' => 'Som en del af SAE 105',
                    'label-nav' => 'Footer med links til kategorierne og deres artikler',
                    'drapeau' => '{{ langue }} Flag-ikon for webstedets indhold'
                ],
                'nav' => [
                    'main' => 'Hovedmenu',
                ]
            ],

            'accueil' => [
                'h1' => [
                    'infosColorBass' => '"Color Bass"? Hvad er det?',
                    'music' => 'Hvordan lyder det?'
                ],
                'p' => [
                    'definition' => '<b>Color Bass</b> er en kategorisering af basmusik, der fokuserer på melodi, følelser og vibrationer sammen med den dynamiske og aggressive bas, der ofte forbindes med <b><a href="https://da.wikipedia.org/wiki/Dubstep">Dubstep</a></b>.',
                    'terme' => 'Ordet <b>Color Bass</b> er blevet opfundet af produceren <b><a href="https://www.chimetunes.net/" target="_blank">Chime</a></b> <i>(A.K.A Harvey Oscar Thompson)</i>, en kunstner fra <b>England</b> der begyndte at komponere elektronisk musik i <b>2010</b> med oprettelse af et duo med kunstneren <b>James Shakeshaft</b> kaldet <i>"Caution & Crisis"</i>.',
                    'disclaimer' => 'Vær opmærksom, en forvirring, som mange mennesker gør i denne branche, er Color Bass <strong> ikke Dubstep </strong>. Color Bass <strong> er kun en undergenre </strong>! Det vil sige, at denne musikgenre er opstået fra Dubstep, men <strong> opstået betyder ikke det samme </strong>. Man skal ikke se begge som det samme, da der er mange forskelle mellem de to stilarter.'
                ]
            ],

            'ressources' => [
                'h1' => 'Ressourcer til at lave Color Bass'
            ],

            'logiciels' => [
                'h1' => 'Softwares til at lave Color Bass',
                'fonctionnalites' => 'indeholder en række funktioner til musikproduktion:',
                'button' => 'Besøg deres hjemmeside'
            ],

            'artistes' => [
                'h1' => 'Kunstnere, der er kendt for at lave Color Bass',
                'th' => 'Information',
                'liens' => 'Links',
                'pronom' => 'Hans/Hendes'
            ],

            'contact' => [
                'h1' => 'UDFYLD DENNE FORMULAR',
                'legends' => [
                    'sexe' => 'Dit køn',
                    'info' => 'Informationer',
                    'comment' => 'Kommentar',
                    'infoPlus' => 'Yderligere oplysninger',
                    'submitMsg' => 'For at validere de indtastede oplysninger',
                    'submit' => 'Indsend'
                ],
                'labels' => [
                    'woman' => 'Kvinde',
                    'man' => 'Mand',
                    'other' => 'Andet',
                    'none' => 'Jeg foretrækker ikke at svare',
                    'reason' => 'Årsagen til din kontakt',
                    'anonymous' => 'Forbliv anonym',
                    'name' => 'Dit navn',
                    'mail' => 'Din e-mail-adresse',
                    'anonymousDetail' => 'Kun dit navn vil blive brugt, ikke din e-mail-adresse',
                    'commentPlaceholder' => 'Skriv venligst dine kommentarer her.'
                ],
                'select' => [
                    'problem' => 'Et problem med hjemmesiden',
                    'question' => 'Et spørgsmål vedrørende hjemmesidens indhold',
                    'report' => 'En rapport om en fejl eller sikkerhedshul på hjemmesiden'
                ]
            ],
            'cgu' => [
                "h1" => "Brugsbetingelser",
                "conditions" => [
                    ["Introduktion", 'Disse almindelige brugsbetingelser (herefter "Brugsvilkår") har til formål at regulere den juridiske ramme for tilgængeligheden af tjenesterne på Color Bass-websitet og deres brug af "Brugeren". Brugsvilkår skal accepteres af enhver Bruger, der ønsker at få adgang til websitet. De udgør kontrakten mellem websitet og Brugeren. Adgangen til websitet af Brugeren betyder accept af Brugsvilkår.'],
                    ["Indhold", "Formålet med Color Bass-websitet er at give information om naturen af Color Bass. Indholdet (herunder tekster, billeder, videoer, funktioner osv.) er til informationsformål."],
                    ["Immaterielle rettigheder", "Indholdet på Color Bass-websitet (tekster, billeder, videoer, funktioner osv.) er ikke beskyttet af immaterielle rettigheder. Dog kan det være, at nogle eksterne indhold, der deles på websitet (f.eks. links til videoer på YouTube), er underlagt copyright af deres respektive ejere. Det er Brugerens ansvar at undersøge eventuelle gældende copyright-love, før de distribuerer eller reproducerer disse eksterne indhold."],
                    ["Ansvar", "Oplysningerne på Color Bass-websitet er leveret som de er. Websitet kan ikke holdes ansvarlig for eventuelle uklarheder, unøjagtigheder eller udeladelser i oplysningerne på websitet."],
                    ["Hyperlinks", "Color Bass-websitet kan indeholde hyperlinks til andre websider på internettet. Links til disse andre ressourcer får dig til at forlade Color Bass-websitet. Det er muligt at oprette et link til websitets præsentationsside uden særlig tilladelse."],
                    ["Ændringer i Brugsvilkår", "Brugsvilkår kan ændres til enhver tid og uden varsel af Color Bass-websitet. Det er Brugerens ansvar at referere regelmæssigt til den seneste version af Brugsvilkår i kraft"],
                    ["Varighed af Brugsvilkår", "Varigheden af Brugsvilkår er ubestemt. Kontrakten træder i kraft i forhold til Brugeren fra brugen af tjenesten."],
                    ["Anvendelig lov og kompetent jurisdiktion", "Brugsvilkår er underlagt og fortolket i overensstemmelse med franske love. Enhver tvist vedrørende brugen af Color Bass-websitet er underlagt de kompetente domstole i Haguenau."]
                ]
            ]
    ],
];