<?php

    // Articles à afficher en fonction des différentes pages
    $dataArticles = [
        'fr' => [
            "ressources" => [
                [
                    "titre" => "Tutoriels FL Studio",
                    "listePuce" => [
                        ["'POWERFUL COLOR BASS DROP [HOW TO]' par CRWTH", "https://youtube.com/watch?v=6WBXD65WUTQ"],
                        ["'HOW TO MAKE COLOUR BASS!' par Infowler", "https://youtube.com/watch?v=tqD5aNj-g6A"],
                        ["'HOW TO COLOR BASS' par Looma", "https://youtube.com/watch?v=kHe-s6liVYc"],
                        ["'How To Make COLOR BASS' par CyberBlitz", "https://youtube.com/watch?v=8wMs5f6RxaI"]
                    ]
                ],
                [
                    "titre" => "Tutoriels Ableton",
                    "listePuce" => [
                        ["'HOW TO CREATE COLOUR BASS IN UNDER A MINUTE' par YokuMusic", "https://youtube.com/watch?v=U2DeYsM4cFs"],
                        ["'How to Color Bass' par Ash", "https://youtube.com/watch?v=AkStN2lgA7M"],
                        ["'The secret to watery colour bass' par Ash", "https://youtube.com/watch?v=uGNtWeDrmnc"],
                        ["'HOW TO MAKE COLOR BASS IN ABLETON LIVE' par OvaSenpai", "https://youtube.com/watch?v=F4AMGdNceJg"]
                    ]
                ],
                [
                    "titre" => "Théorie Musicale",
                    "listePuce" => [
                        ["MusicTheory.net", "https://www.musictheory.net/lessons"],
                        ["Teoria.com | Music Theory Web", "https://teoria.com"],
                        ["Landr.com | Music Theory", "https://blog.landr.com/en/music-theory/"],
                        ["IconCollective.edu | Basic Music Theory", "https://iconcollective.edu/basic-music-theory/"]
                    ]
                ],
                [
                    "titre" => "Ressources Utiles",
                    "listePuce" => [
                        ["Splice.com | Samples & outils utiles à la production de musique", "https://splice.com/"],
                        ["Vital.audio | Un plugin de synthétiseur complet & gratuit", "https://vital.audio/"],
                        ["XFer | Plugins gratuits / payants utiles à la production de musique", "https://xferrecords.com/"]
                    ]
                ],
                [
                    "titre" => "Synthétiseurs Amazon",
                    "listePuce" => [
                        ["AKAI Professional APC Key 25 MK2", "https://a.co/d/i9ng0KJ"],
                        ["AKAI Professional MPK Mini MK3", "https://a.co/d/b6A6j9G"],
                        ["AKAI Professional LPK25", "https://a.co/d/0pO7egA"],
                        ["ROLI Seaboard Block (Studio Edition)", "https://amzn.eu/d/cfSFORf"]
                    ]
                ]
            ],
    
            "logiciels" => [
                [
                    "titre" => "FL Studio",
                    "q" => "The fastest way from your brain to your speakers",
                    "presentation" => "FL Studio est un logiciel de production musicale connu également sous le nom de Fruity Loops. Il est développé par la société belge Image-Line Software. Il permet de créer, de produire et de mixer de la musique électronique sur un ordinateur personnel. Il offre une variété d'outils pour l'enregistrement, l'édition, la manipulation et la manipulation de pistes audio, ainsi que des fonctionnalités de synthétiseur virtuel, de boîte à rythmes et d'effets pour créer des morceaux de musique complets. Il est très populaire auprès des DJ, producteurs de musique et musiciens amateurs pour sa facilité d'utilisation et sa grande variété de fonctionnalités.",
                    "img" => "FLSTUDIO",
                    "lien" => "https://www.image-line.com/",
                    "features" => [
                        ["Éditeur de pistes", "Permet de créer, de modifier et de synchroniser des pistes audio et MIDI."],
                        ["Synthétiseurs virtuels", "Offre une variété de synthétiseurs, y compris des synthétiseurs FM, des synthétiseurs à ondes, des synthétiseurs à modélisation physique, et plus encore."],
                        ["Boîtes à rythmes", "Offre une variété de boîtes à rythmes, y compris des boîtes à rythmes de batterie, des boîtes à rythmes de basse, des boîtes à rythmes de percussions, et plus encore."],
                        ["Effets", "Offre une variété d'effets audio, tels que des réverbérations, des delays, des filtres, des distorsions, des égalisations, et plus encore."],
                        ["Enregistrement audio", "Permet d'enregistrer des pistes audio en direct à partir d'un microphone ou d'une interface audio."],
                        ["Mixage et mastering", "Offre des outils pour mixer les pistes et pour les mastering pour les rendre plus professionnel."],
                        ["Automatisation", "Permet de créer des courbes d'automatisation pour les paramètres de plugins et de pistes."],
                        ["Prise en charge de plusieurs formats", "Prend en charge les formats audio tels que WAV, MP3, OGG, MIDI, et plus encore."],
                        ["Prise en charge de plusieurs plateformes", "Est disponible pour Windows et Mac."],
                        ["Interface utilisateur personnalisable", "Permet de personnaliser l'interface utilisateur pour s'adapter à vos besoins de production."]
                    ]
                ],
                [
                    "titre" => "Ableton Live",
                    "q" => "Add more feeling to your music",
                    "presentation" => "Ableton Live est un logiciel de production musicale qui permet à l'utilisateur de créer, enregistrer, produire et mixer de la musique électronique. Il offre des fonctionnalités de composition en temps réel, de manipulation de clips audio et de contrôle MIDI. Il existe en deux versions: Ableton Live Standard et Ableton Live Suite. La version Suite inclut des instruments virtuels et des effets supplémentaires. Ableton Live est utilisé par de nombreux musiciens, producteurs et DJ pour créer de la musique en studio et pour les performances en direct.",
                    "img" => "ABLETON",
                    "lien" => "https://www.ableton.com/en/live/",
                    "features" => [
                        ["Composition en temps réel", "Ableton Live permet de créer des morceaux en utilisant des clips audio et MIDI qui peuvent être lancés, synchronisés et bouclés en temps réel."],
                        ["Enregistrement audio et MIDI", "Ableton Live permet d'enregistrer des pistes audio et MIDI à partir de sources externes, comme des instruments électroniques ou des microphones."],
                        ["Edition audio et MIDI", "Ableton Live possède des outils d'édition pour couper, découper, déplacer et retravailler les clips audio et MIDI."],
                        ["Effets audio et MIDI", "Ableton Live inclut une variété d'effets audio et MIDI pour ajouter de la profondeur et de la texture à vos morceaux."],
                        ["Instruments virtuels", "La version Ableton Live Suite inclut des instruments virtuels, tels que des synthétiseurs, des boîtes à rythmes et des instruments acoustiques virtuels."],
                        ["Mixage", "Ableton Live permet de mixer les différentes pistes audio et MIDI pour créer une balance sonore équilibrée dans votre morceau."],
                        ["Performance en direct", "Ableton Live est conçu pour les performances en direct, avec des fonctionnalités telles que le lancement de clips en temps réel et la possibilité de contrôler les paramètres en direct à l'aide d'un contrôleur MIDI externe."]
                    ]
                ],
                [
                    "titre" => "Bitwig Studio",
                    "q" => "Modern music production and performance for Windows, macOS, and Linux.",
                    "presentation" => "Bitwig Studio est un logiciel de production musicale pour Windows, macOS, et Linux. Il permet à l'utilisateur de créer, enregistrer, produire et mixer de la musique électronique. Il offre des fonctionnalités de composition en temps réel, de manipulation de clips audio et de contrôle MIDI, similaires à Ableton Live. Il inclut des instruments virtuels, des effets audio, des outils de mixage et d'édition, ainsi qu'un support pour les contrôleurs MIDI externes. Bitwig Studio est souvent comparé à Ableton Live en raison de sa fonctionnalité similaire, mais il ajoute des fonctionnalités uniques telles que la modélisation de l'onde sonore, la polyvalence de modélisation de l'onde de forme d'onde, et un système de modulation modulaire. Il est utilisé par de nombreux producteurs, musiciens et DJ pour créer de la musique en studio et pour les performances en direct.",
                    "img" => "BITWIG",
                    "lien" => "https://www.bitwig.com/",
                    "features" => [
                        ["Éditeur de pistes", "Permet de créer, de modifier et de synchroniser des pistes audio et MIDI en temps réel."],
                        ["Enregistrement audio et MIDI", "Permet d'enregistrer des pistes audio et MIDI à partir de sources externes, comme des instruments électroniques ou des microphones."],
                        ["Edition audio et MIDI", "Possède des outils d'édition pour couper, découper, déplacer et retravailler les clips audio et MIDI."],
                        ["Effets audio et MIDI", "Inclut une variété d'effets audio et MIDI pour ajouter de la profondeur et de la texture à vos morceaux."],
                        ["Instruments virtuels", "Inclut des instruments virtuels, tels que des synthétiseurs, des boîtes à rythmes et des instruments acoustiques virtuels."],
                        ["Mixage", "Permet de mixer les différentes pistes audio et MIDI pour créer une balance sonore équilibrée dans votre morceau."],
                        ["Performance en direct", "Conçu pour les performances en direct, avec des fonctionnalités telles que le lancement de clips en temps réel et la possibilité de contrôler les paramètres en direct à l'aide d'un contrôleur MIDI externe."],
                        ["Système de modulation modulaire", "Inclut un système de modulation modulaire pour créer des relations modulatoires entre différents paramètres."],
                        ["Modélisation de l'onde sonore", "Inclut des outils pour la modélisation de l'onde sonore pour des effets de synthétiseurs."],
                        ["Polyvalence de modélisation de l'onde de forme d'onde", "Permet de déformer et de transformer les formes d'onde audio pour créer des sons uniques."]
                    ]                    
                ],
                [
                    "titre" => "Logic Pro",
                    "q" => "Terriblement puissant. Merveilleusement créatif.",
                    "presentation" => "Logic Pro est un logiciel de production musicale pour Mac. Il permet à l'utilisateur de créer, enregistrer, produire et mixer de la musique électronique. Il offre des fonctionnalités de composition en temps réel, de manipulation de clips audio et de contrôle MIDI. Il inclut des instruments virtuels, des effets audio, des outils de mixage et d'édition, ainsi qu'un support pour les contrôleurs MIDI externes. Logic Pro est utilisé par de nombreux producteurs, musiciens et DJ pour créer de la musique en studio et pour les performances en direct.",
                    "img" => "LOGIC_PRO",
                    "lien" => "https://www.apple.com/fr/logic-pro/",
                    "features" => [
                        ["Composition en temps réel", "Permet de créer des morceaux en utilisant des clips audio et MIDI qui peuvent être lancés, synchronisés et bouclés en temps réel."],
                        ["Enregistrement audio et MIDI", "Permet d'enregistrer des pistes audio et MIDI à partir de sources externes, comme des instruments électroniques ou des microphones."],
                        ["Édition audio et MIDI", "Possède des outils d'édition pour couper, découper, déplacer et retravailler les clips audio et MIDI."],
                        ["Effets audio et MIDI", "Inclut une variété d'effets audio et MIDI pour ajouter de la profondeur et de la texture à vos morceaux."],
                        ["Instruments virtuels", "Inclut des instruments virtuels, tels que des synthétiseurs, des boîtes à rythmes et des instruments acoustiques virtuels."],
                        ["Mixage", "Permet de mixer les différentes pistes audio et MIDI pour créer une balance sonore équilibrée dans votre morceau."],
                        ["Performance en direct", "Conçu pour les performances en direct, avec des fonctionnalités telles que le lancement de clips en temps réel et la possibilité de contrôler les paramètres en direct à l'aide d'un contrôleur MIDI externe."],
                        ["Fonctionnalités avancées de composition", "Inclut des fonctionnalités avancées pour la composition, telles que des outils pour la création de rythmiques, des outils pour la création de boucles, et des outils pour la création de motifs."],
                        ["Outils de mixage professionnels", "Inclut des outils de mixage professionnels pour créer des balances sonores équilibrées et pour ajouter des effets professionnels à vos morceaux."],
                        ["Support pour les plug-ins", "Supporte les plug-ins VST et AU pour ajouter encore plus de fonctionnalités à votre workflow de production musicale."],
                    ]
                ],
                [
                    "titre" => "Pro Tools",
                    "q" => "Legendary music starts here.",
                    "presentation" => "Pro Tools est un logiciel de production audio pour Mac et Windows. Il permet à l'utilisateur de créer, enregistrer, produire et mixer de la musique électronique, des films, des émissions de télévision, des podcasts et bien plus encore. Il offre des fonctionnalités d'enregistrement audio et MIDI, d'édition audio, d'effets audio, d'outils de mixage et de composition. Il supporte les plug-ins VST et AU pour ajouter encore plus de fonctionnalités à votre workflow de production audio. Pro Tools est utilisé par de nombreux studios d'enregistrement, producteurs, musiciens, compositeurs et ingénieurs du son pour créer des projets audio de haute qualité.",
                    "img" => "PRO_TOOLS",
                    "lien" => "https://www.avid.com/pro-tools",
                    "features" => [
                        ["Enregistrement audio et MIDI", "Pro Tools permet d'enregistrer des pistes audio et MIDI à partir de sources externes, comme des instruments électroniques ou des microphones."],
                        ["Édition audio", "Pro Tools possède des outils d'édition pour couper, déconstruire des signaux sonores équilibrées et pour ajouter des effets professionnels à vos morceaux."],
                        ["Supports pour les plugins", "Logic Pro supporte les plug-ins VST et AU pour ajouter encore plus de fonctionnalités à votre workflow de production musicale."],
                    ]
                ]
            ],
            
            "artistes" => [
                [
                    "titre" => "Chime",
                    "img" => "chime",
                    "informations" => [
                        "Prénom / Nom" => "Harvey Oscar Goldfinch",
                        "Pays" => "Grande-Bretagne (Royaume-Uni)",
                        "Années d'activité" => "2013 - Aujourd'hui",
                        "Âge" => "28 ans",
                        "Logiciel Utilisé" => "Logic Pro"
                    ],
                    "liens" => [
                        "Soundcloud" => "https://soundcloud.com/chimetunes",
                        "Spotify" => "https://open.spotify.com/artist/3hMTYaexWgGkXqvbkt6EIS",
                        "Twitter" => "https://twitter.com/ChimeTunes",
                        "Youtube" => "https://www.youtube.com/ChimeTunes"
                    ]
                ],
                [ 
                    "titre" => "Sharks", 
                    "img" => "sharks", 
                    "informations" => [ 
                        "Prénom / Nom" => "Deylene Bensedira", 
                        "Pays" => "France",
                        "Années d'activité" => "2016 - Présent", 
                        "Âge" => "Inconnu", 
                        "Logiciel Utilisé" => "FL Studio",
                    ], 
                    "liens" => [ 
                        "Soundcloud" => "https://soundcloud.com/sharkstunes", 
                        "Spotify" => "https://open.spotify.com/artist/1C3aEfW34xkicZ5umNYdJM", 
                        "Twitter" => "https://twitter.com/sharkstunes", 
                        "Youtube" => "https://www.youtube.com/SharksTunes"
                    ] 
                ],
                [ 
                    "titre" => "Ace Aura", 
                    "img" => "aceAura", 
                    "informations" => [ 
                        "Prénom / Nom" => "Eric Seall", 
                        "Pays" => "U.S.A", 
                        "Années d'activité" => "2012 - Présent", 
                        "Âge" => "24 ans", 
                        "Logiciel Utilisé" => "Ableton Live"
                    ], 
                    "liens" => [ 
                        "Soundcloud" => "https://soundcloud.com/aceaura", 
                        "Spotify" => "https://open.spotify.com/artist/5o2KBzYUFierWmBhSemAhq", 
                        "Twitter" => "https://twitter.com/OfficialAceAura", 
                        "Youtube" => "https://www.youtube.com/channel/UCXm-ZgK45WFEkFt0NLvztsg",
                    ] 
                ],
                [ 
                    "titre" => "Skybreak", 
                    "img" => "skybreak", 
                    "informations" => [ 
                        "Prénom / Nom" => "Skye Ramsay", 
                        "Pays" => "U.S.A", 
                        "Années d'activité" => "2016 - Présent", 
                        "Âge" => "20 ans", 
                        "Logiciel Utilisé" => "FL Studio"
                    ], 
                    "liens" => [ 
                        "Soundcloud" => "https://soundcloud.com/skybreakofficial", 
                        "Spotify" => "https://open.spotify.com/artist/2858y2JiMYIst8dY4WXGi3", 
                        "Twitter" => "https://twitter.com/skybreakedm",
                        "Youtube" => "https://www.youtube.com/channel/UCVkwPo62gvyjGC0145Jllmg"
                    ]
                ],
                [ 
                    "titre" => "Similar Outskirts", 
                    "img" => "sO", 
                    "informations" => [ 
                        "Prénom / Nom" => "Troy Kurniawan", 
                        "Pays" => "U.S.A / Indonésie", 
                        "Années d'activité" => "2012 - Présent", 
                        "Âge" => "Inconnu", 
                        "Logiciel Utilisé" => "Ableton Live"
                    ], 
                    "liens" => [ 
                        "Soundcloud" => "https://soundcloud.com/similar-outskirts", 
                        "Spotify" => "https://open.spotify.com/artist/1EheS355QusAVqx9Pux9No", 
                        "Twitter" => "https://twitter.com/Sim_Out_/", 
                        "Youtube" => "https://www.youtube.com/SimilarOutskirts"
                    ]
                ]
            ],
        ],

        'dk' => [
            "ressources" => [
                [
                    "titre" => "Tutoriels FL Studio",
                    "listePuce" => [
                        ["'POWERFUL COLOR BASS DROP [HOW TO]' par CRWTH", "https://youtube.com/watch?v=6WBXD65WUTQ"],
                        ["'HOW TO MAKE COLOUR BASS!' par Infowler", "https://youtube.com/watch?v=tqD5aNj-g6A"],
                        ["'HOW TO COLOR BASS' par Looma", "https://youtube.com/watch?v=kHe-s6liVYc"],
                        ["'How To Make COLOR BASS' par CyberBlitz", "https://youtube.com/watch?v=8wMs5f6RxaI"]
                    ]
                ],
                [
                    "titre" => "Tutoriels Ableton",
                    "listePuce" => [
                        ["'HOW TO CREATE COLOUR BASS IN UNDER A MINUTE' par YokuMusic", "https://youtube.com/watch?v=U2DeYsM4cFs"],
                        ["'How to Color Bass' par Ash", "https://youtube.com/watch?v=AkStN2lgA7M"],
                        ["'The secret to watery colour bass' par Ash", "https://youtube.com/watch?v=uGNtWeDrmnc"],
                        ["'HOW TO MAKE COLOR BASS IN ABLETON LIVE' par OvaSenpai", "https://youtube.com/watch?v=F4AMGdNceJg"]
                    ]
                ],
                [
                    "titre" => "Théorie Musicale",
                    "listePuce" => [
                        ["MusicTheory.net", "https://www.musictheory.net/lessons"],
                        ["Teoria.com | Music Theory Web", "https://teoria.com"],
                        ["Landr.com | Music Theory", "https://blog.landr.com/en/music-theory/"],
                        ["IconCollective.edu | Basic Music Theory", "https://iconcollective.edu/basic-music-theory/"]
                    ]
                ],
                [
                    "titre" => "Ressources Utiles",
                    "listePuce" => [
                        ["Splice.com | Samples & outils utiles à la production de musique", "https://splice.com/"],
                        ["Vital.audio | Un plugin de synthétiseur complet & gratuit", "https://vital.audio/"],
                        ["XFer | Plugins gratuits / payants utiles à la production de musique", "https://xferrecords.com/"]
                    ]
                ],
                [
                    "titre" => "Synthétiseurs Amazon",
                    "listePuce" => [
                        ["AKAI Professional APC Key 25 MK2", "https://a.co/d/i9ng0KJ"],
                        ["AKAI Professional MPK Mini MK3", "https://a.co/d/b6A6j9G"],
                        ["AKAI Professional LPK25", "https://a.co/d/0pO7egA"],
                        ["ROLI Seaboard Block (Studio Edition)", "https://amzn.eu/d/cfSFORf"]
                    ]
                ]
            ],
    
            "logiciels" => [
                [
                    "titre" => "FL Studio",
                    "q" => "The fastest way from your brain to your speakers",
                    "presentation" => "FL Studio est un logiciel de production musicale connu également sous le nom de Fruity Loops. Il est développé par la société belge Image-Line Software. Il permet de créer, de produire et de mixer de la musique électronique sur un ordinateur personnel. Il offre une variété d'outils pour l'enregistrement, l'édition, la manipulation et la manipulation de pistes audio, ainsi que des fonctionnalités de synthétiseur virtuel, de boîte à rythmes et d'effets pour créer des morceaux de musique complets. Il est très populaire auprès des DJ, producteurs de musique et musiciens amateurs pour sa facilité d'utilisation et sa grande variété de fonctionnalités.",
                    "img" => "FLSTUDIO",
                    "lien" => "https://www.image-line.com/",
                    "features" => [
                        ["Éditeur de pistes", "Permet de créer, de modifier et de synchroniser des pistes audio et MIDI."],
                        ["Synthétiseurs virtuels", "Offre une variété de synthétiseurs, y compris des synthétiseurs FM, des synthétiseurs à ondes, des synthétiseurs à modélisation physique, et plus encore."],
                        ["Boîtes à rythmes", "Offre une variété de boîtes à rythmes, y compris des boîtes à rythmes de batterie, des boîtes à rythmes de basse, des boîtes à rythmes de percussions, et plus encore."],
                        ["Effets", "Offre une variété d'effets audio, tels que des réverbérations, des delays, des filtres, des distorsions, des égalisations, et plus encore."],
                        ["Enregistrement audio", "Permet d'enregistrer des pistes audio en direct à partir d'un microphone ou d'une interface audio."],
                        ["Mixage et mastering", "Offre des outils pour mixer les pistes et pour les mastering pour les rendre plus professionnel."],
                        ["Automatisation", "Permet de créer des courbes d'automatisation pour les paramètres de plugins et de pistes."],
                        ["Prise en charge de plusieurs formats", "Prend en charge les formats audio tels que WAV, MP3, OGG, MIDI, et plus encore."],
                        ["Prise en charge de plusieurs plateformes", "Est disponible pour Windows et Mac."],
                        ["Interface utilisateur personnalisable", "Permet de personnaliser l'interface utilisateur pour s'adapter à vos besoins de production."]
                    ]
                ],
                [
                    "titre" => "Ableton Live",
                    "q" => "Add more feeling to your music",
                    "presentation" => "Ableton Live est un logiciel de production musicale qui permet à l'utilisateur de créer, enregistrer, produire et mixer de la musique électronique. Il offre des fonctionnalités de composition en temps réel, de manipulation de clips audio et de contrôle MIDI. Il existe en deux versions: Ableton Live Standard et Ableton Live Suite. La version Suite inclut des instruments virtuels et des effets supplémentaires. Ableton Live est utilisé par de nombreux musiciens, producteurs et DJ pour créer de la musique en studio et pour les performances en direct.",
                    "img" => "ABLETON",
                    "lien" => "https://www.ableton.com/en/live/",
                    "features" => [
                        ["Composition en temps réel", "Ableton Live permet de créer des morceaux en utilisant des clips audio et MIDI qui peuvent être lancés, synchronisés et bouclés en temps réel."],
                        ["Enregistrement audio et MIDI", "Ableton Live permet d'enregistrer des pistes audio et MIDI à partir de sources externes, comme des instruments électroniques ou des microphones."],
                        ["Edition audio et MIDI", "Ableton Live possède des outils d'édition pour couper, découper, déplacer et retravailler les clips audio et MIDI."],
                        ["Effets audio et MIDI", "Ableton Live inclut une variété d'effets audio et MIDI pour ajouter de la profondeur et de la texture à vos morceaux."],
                        ["Instruments virtuels", "La version Ableton Live Suite inclut des instruments virtuels, tels que des synthétiseurs, des boîtes à rythmes et des instruments acoustiques virtuels."],
                        ["Mixage", "Ableton Live permet de mixer les différentes pistes audio et MIDI pour créer une balance sonore équilibrée dans votre morceau."],
                        ["Performance en direct", "Ableton Live est conçu pour les performances en direct, avec des fonctionnalités telles que le lancement de clips en temps réel et la possibilité de contrôler les paramètres en direct à l'aide d'un contrôleur MIDI externe."]
                    ]
                ],
                [
                    "titre" => "Bitwig Studio",
                    "q" => "Modern music production and performance for Windows, macOS, and Linux.",
                    "presentation" => "Bitwig Studio est un logiciel de production musicale pour Windows, macOS, et Linux. Il permet à l'utilisateur de créer, enregistrer, produire et mixer de la musique électronique. Il offre des fonctionnalités de composition en temps réel, de manipulation de clips audio et de contrôle MIDI, similaires à Ableton Live. Il inclut des instruments virtuels, des effets audio, des outils de mixage et d'édition, ainsi qu'un support pour les contrôleurs MIDI externes. Bitwig Studio est souvent comparé à Ableton Live en raison de sa fonctionnalité similaire, mais il ajoute des fonctionnalités uniques telles que la modélisation de l'onde sonore, la polyvalence de modélisation de l'onde de forme d'onde, et un système de modulation modulaire. Il est utilisé par de nombreux producteurs, musiciens et DJ pour créer de la musique en studio et pour les performances en direct.",
                    "img" => "BITWIG",
                    "lien" => "https://www.bitwig.com/",
                    "features" => [
                        ["Éditeur de pistes", "Permet de créer, de modifier et de synchroniser des pistes audio et MIDI en temps réel."],
                        ["Enregistrement audio et MIDI", "Permet d'enregistrer des pistes audio et MIDI à partir de sources externes, comme des instruments électroniques ou des microphones."],
                        ["Edition audio et MIDI", "Possède des outils d'édition pour couper, découper, déplacer et retravailler les clips audio et MIDI."],
                        ["Effets audio et MIDI", "Inclut une variété d'effets audio et MIDI pour ajouter de la profondeur et de la texture à vos morceaux."],
                        ["Instruments virtuels", "Inclut des instruments virtuels, tels que des synthétiseurs, des boîtes à rythmes et des instruments acoustiques virtuels."],
                        ["Mixage", "Permet de mixer les différentes pistes audio et MIDI pour créer une balance sonore équilibrée dans votre morceau."],
                        ["Performance en direct", "Conçu pour les performances en direct, avec des fonctionnalités telles que le lancement de clips en temps réel et la possibilité de contrôler les paramètres en direct à l'aide d'un contrôleur MIDI externe."],
                        ["Système de modulation modulaire", "Inclut un système de modulation modulaire pour créer des relations modulatoires entre différents paramètres."],
                        ["Modélisation de l'onde sonore", "Inclut des outils pour la modélisation de l'onde sonore pour des effets de synthétiseurs."],
                        ["Polyvalence de modélisation de l'onde de forme d'onde", "Permet de déformer et de transformer les formes d'onde audio pour créer des sons uniques."]
                    ]                    
                ],
                [
                    "titre" => "Logic Pro",
                    "q" => "Terriblement puissant. Merveilleusement créatif.",
                    "presentation" => "Logic Pro est un logiciel de production musicale pour Mac. Il permet à l'utilisateur de créer, enregistrer, produire et mixer de la musique électronique. Il offre des fonctionnalités de composition en temps réel, de manipulation de clips audio et de contrôle MIDI. Il inclut des instruments virtuels, des effets audio, des outils de mixage et d'édition, ainsi qu'un support pour les contrôleurs MIDI externes. Logic Pro est utilisé par de nombreux producteurs, musiciens et DJ pour créer de la musique en studio et pour les performances en direct.",
                    "img" => "LOGIC_PRO",
                    "lien" => "https://www.apple.com/fr/logic-pro/",
                    "features" => [
                        ["Composition en temps réel", "Permet de créer des morceaux en utilisant des clips audio et MIDI qui peuvent être lancés, synchronisés et bouclés en temps réel."],
                        ["Enregistrement audio et MIDI", "Permet d'enregistrer des pistes audio et MIDI à partir de sources externes, comme des instruments électroniques ou des microphones."],
                        ["Édition audio et MIDI", "Possède des outils d'édition pour couper, découper, déplacer et retravailler les clips audio et MIDI."],
                        ["Effets audio et MIDI", "Inclut une variété d'effets audio et MIDI pour ajouter de la profondeur et de la texture à vos morceaux."],
                        ["Instruments virtuels", "Inclut des instruments virtuels, tels que des synthétiseurs, des boîtes à rythmes et des instruments acoustiques virtuels."],
                        ["Mixage", "Permet de mixer les différentes pistes audio et MIDI pour créer une balance sonore équilibrée dans votre morceau."],
                        ["Performance en direct", "Conçu pour les performances en direct, avec des fonctionnalités telles que le lancement de clips en temps réel et la possibilité de contrôler les paramètres en direct à l'aide d'un contrôleur MIDI externe."],
                        ["Fonctionnalités avancées de composition", "Inclut des fonctionnalités avancées pour la composition, telles que des outils pour la création de rythmiques, des outils pour la création de boucles, et des outils pour la création de motifs."],
                        ["Outils de mixage professionnels", "Inclut des outils de mixage professionnels pour créer des balances sonores équilibrées et pour ajouter des effets professionnels à vos morceaux."],
                        ["Support pour les plug-ins", "Supporte les plug-ins VST et AU pour ajouter encore plus de fonctionnalités à votre workflow de production musicale."],
                    ]
                ],
                [
                    "titre" => "Pro Tools",
                    "q" => "Legendary music starts here.",
                    "presentation" => "Pro Tools est un logiciel de production audio pour Mac et Windows. Il permet à l'utilisateur de créer, enregistrer, produire et mixer de la musique électronique, des films, des émissions de télévision, des podcasts et bien plus encore. Il offre des fonctionnalités d'enregistrement audio et MIDI, d'édition audio, d'effets audio, d'outils de mixage et de composition. Il supporte les plug-ins VST et AU pour ajouter encore plus de fonctionnalités à votre workflow de production audio. Pro Tools est utilisé par de nombreux studios d'enregistrement, producteurs, musiciens, compositeurs et ingénieurs du son pour créer des projets audio de haute qualité.",
                    "img" => "PRO_TOOLS",
                    "lien" => "https://www.avid.com/pro-tools",
                    "features" => [
                        ["Enregistrement audio et MIDI", "Pro Tools permet d'enregistrer des pistes audio et MIDI à partir de sources externes, comme des instruments électroniques ou des microphones."],
                        ["Édition audio", "Pro Tools possède des outils d'édition pour couper, déconstruire des signaux sonores équilibrées et pour ajouter des effets professionnels à vos morceaux."],
                        ["Supports pour les plugins", "Logic Pro supporte les plug-ins VST et AU pour ajouter encore plus de fonctionnalités à votre workflow de production musicale."],
                    ]
                ]
            ],
            
            "artistes" => [
                [
                    "titre" => "Chime",
                    "img" => "chime",
                    "informations" => [
                        "Prénom / Nom" => "Harvey Oscar Goldfinch",
                        "Pays" => "Grande-Bretagne (Royaume-Uni)",
                        "Années d'activité" => "2013 - Aujourd'hui",
                        "Âge" => "28 ans",
                        "Logiciel Utilisé" => "Logic Pro"
                    ],
                    "liens" => [
                        "Soundcloud" => "https://soundcloud.com/chimetunes",
                        "Spotify" => "https://open.spotify.com/artist/3hMTYaexWgGkXqvbkt6EIS",
                        "Twitter" => "https://twitter.com/ChimeTunes",
                        "Youtube" => "https://www.youtube.com/ChimeTunes"
                    ]
                ],
                [ 
                    "titre" => "Sharks", 
                    "img" => "sharks", 
                    "informations" => [ 
                        "Prénom / Nom" => "Deylene Bensedira", 
                        "Pays" => "France",
                        "Années d'activité" => "2016 - Présent", 
                        "Âge" => "Inconnu", 
                        "Logiciel Utilisé" => "FL Studio",
                    ], 
                    "liens" => [ 
                        "Soundcloud" => "https://soundcloud.com/sharkstunes", 
                        "Spotify" => "https://open.spotify.com/artist/1C3aEfW34xkicZ5umNYdJM", 
                        "Twitter" => "https://twitter.com/sharkstunes", 
                        "Youtube" => "https://www.youtube.com/SharksTunes"
                    ] 
                ],
                [ 
                    "titre" => "Ace Aura", 
                    "img" => "aceAura", 
                    "informations" => [ 
                        "Prénom / Nom" => "Eric Seall", 
                        "Pays" => "U.S.A", 
                        "Années d'activité" => "2012 - Présent", 
                        "Âge" => "24 ans", 
                        "Logiciel Utilisé" => "Ableton Live"
                    ], 
                    "liens" => [ 
                        "Soundcloud" => "https://soundcloud.com/aceaura", 
                        "Spotify" => "https://open.spotify.com/artist/5o2KBzYUFierWmBhSemAhq", 
                        "Twitter" => "https://twitter.com/OfficialAceAura", 
                        "Youtube" => "https://www.youtube.com/channel/UCXm-ZgK45WFEkFt0NLvztsg",
                    ] 
                ],
                [ 
                    "titre" => "Skybreak", 
                    "img" => "skybreak", 
                    "informations" => [ 
                        "Prénom / Nom" => "Skye Ramsay", 
                        "Pays" => "U.S.A", 
                        "Années d'activité" => "2016 - Présent", 
                        "Âge" => "20 ans", 
                        "Logiciel Utilisé" => "FL Studio"
                    ], 
                    "liens" => [ 
                        "Soundcloud" => "https://soundcloud.com/skybreakofficial", 
                        "Spotify" => "https://open.spotify.com/artist/2858y2JiMYIst8dY4WXGi3", 
                        "Twitter" => "https://twitter.com/skybreakedm",
                        "Youtube" => "https://www.youtube.com/channel/UCVkwPo62gvyjGC0145Jllmg"
                    ]
                ],
                [ 
                    "titre" => "Similar Outskirts", 
                    "img" => "sO", 
                    "informations" => [ 
                        "Prénom / Nom" => "Troy Kurniawan", 
                        "Pays" => "U.S.A / Indonésie", 
                        "Années d'activité" => "2012 - Présent", 
                        "Âge" => "Inconnu", 
                        "Logiciel Utilisé" => "Ableton Live"
                    ], 
                    "liens" => [ 
                        "Soundcloud" => "https://soundcloud.com/similar-outskirts", 
                        "Spotify" => "https://open.spotify.com/artist/1EheS355QusAVqx9Pux9No", 
                        "Twitter" => "https://twitter.com/Sim_Out_/", 
                        "Youtube" => "https://www.youtube.com/SimilarOutskirts"
                    ]
                ]
            ],
        ]
        
    ];