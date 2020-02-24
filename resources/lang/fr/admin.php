<?php

return [
    'left_menu' => [
        'api_users'         => 'Accès Api',
        'data_export'        => 'Exportation de données',
        'home'              => 'Home', // do not translate
        'sales'             => 'Ventes',
        'settings'          => 'Réglages',
        'stock_status'       => 'État des stocks',
    ],
    'pages'         => [
        'api_users'     => [
            'components'            => [
                'x_access_to_api_component'     => [
                    'alert_heading'                 => 'Playground for API (SwaggerUI) est situé à:',
                ],
                'x_create_api_token_component'  => [
                    'cancel'                        => 'Annuler',
                    'description'                   => 'Description',
                    'name'                          => 'Nom',
                    'placeholder_description'       => 'description',
                    'placeholder_name'              => 'nom',
                    'send'                          => 'Envoyer',
                ],
                'x_list_of_api_users_component' => [
                    'action'                        => 'Action',
                    'created'                       => 'Créé',
                    'description'                   => 'Description',
                    'name'                          => 'Nom',
                ],
            ],
            'index'         => [
                'heading'       => 'Accès Api',
                'tabs'          => [
                    'access_to_api'     => 'Accès à Api',
                    'create_api_token'  => 'Créer un token',
                    'list_of_api_users' => 'Liste des utilisateurs',
                ],
            ],
            'token_confirmation'    => [
                'alert_warning'         => 'Assurez-vous que le jeton a été copié, vous ne pourrez plus le voir!',
                'creating_access'       => 'Création d\'accès',
                'return'                => 'Revenir',
                'your_token_is'         => 'Votre token est:',
            ],
        ],
        'data_export'    => [
            'index'         => [
                'heading'       => 'Exportation de données',
            ],
        ],
        'home'                          => [
            'components'                    => [
                'x_general_component'           => [
                    'how_many_days'                 => 'Combien de jours?',
                    'legend'                        => [
                        'spanning_days'                 => 'revenus par jour',
                        'this_year'                     => 'revenus par mois',
                    ],
                    'reset'                         => 'Réinitialiser',
                    'reset_text_info'               => 'Pour restaurer le contenu après la suppression du composant, cliquez sur le bouton: ',
                    'revenue_of_the_spanning_days'  => 'Revenus des jours d\'ouverture',
                    'revenue_of_this_year'          => 'Recettes de cette année',
                ],
            ],
            'index'         => [
                'heading'       => 'Home',
            ],
        ],
        'sales'         => [
            'index'         => [
                'heading'       => 'Ventes',
            ],
        ],
        'settings'      => [
            'components'    => [
                'x_general_component'           => [
                    'general_settings'              => 'Réglages généraux',
                    'save_changes'                  => 'Sauvegarder les modifications',
                    'cancel'                        => 'Annuler',
                ],
                'x_select_language_component'   => [
                    'choose_language'               => 'Choisissez la langue',
                ],
            ],
            'index'         => [
                'heading'       => 'Réglages',
                'select_language'   => [
                    'de'                => 'allemande',
                    'en'                => 'anglaise',
                    'fr'                => 'française',
                    'it'                => 'italienne',
                    'pl'                => 'polonaise',
                ],
            ],
        ],
        'shared'        => [
            'actionButtons' => [
                'destroy'       => [
                    'action'        => 'Action',
                    'remove'        => 'Retirer',
                    'reset_token'   => 'Réinitialiser  Token',
                ],
            ],
        ],
        'stock_status'   => [
            'components'      => [
                'x_list_of_stock_status_component' => [
                    'code'                             => 'Code',
                    'name'                             => 'Nom',
                    'description'                      => 'La description',
                    'created'                          => 'Créé',
                ],
            ],
            'index'         => [
                'heading'       => 'État des stocks',
            ],
        ],
    ],
];
