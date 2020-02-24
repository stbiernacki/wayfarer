<?php

return [
    'left_menu' => [
        'api_users'         => 'API-Zugriff',
        'data_export'        => 'Datenexport',
        'home'              => 'Home', // do not translate
        'sales'             => 'Verkauf',
        'settings'          => 'Einstellungen',
        'stock_status'       => 'Lagerbestand',
    ],
    'pages'         => [
        'api_users'     => [
            'components'            => [
                'x_access_to_api_component'     => [
                    'alert_heading'                 => 'Playground for API (Swagger UI) befindet sich unter:',
                ],
                'x_create_api_token_component'  => [
                    'cancel'                        => 'Stornieren',
                    'description'                   => 'Beschreibung',
                    'name'                          => 'Name',
                    'placeholder_description'       => 'beschreibung',
                    'placeholder_name'              => 'name',
                    'send'                          => 'Senden',
                ],
                'x_list_of_api_users_component' => [
                    'action'                        => 'Aktion',
                    'created'                       => 'Erstellt',
                    'description'                   => 'Beschreibung',
                    'name'                          => 'Name',
                ],
            ],
            'index'         => [
                'heading'       => 'API-Zugriff',
                'tabs'          => [
                    'access_to_api'     => 'Zugriff auf API',
                    'create_api_token'  => 'Erstelle ein API-Token',
                    'list_of_api_users' => 'Liste der Api-Benutzer',
                ],
            ],
            'token_confirmation'    => [
                'alert_warning'         => 'Stellen Sie sicher, dass das Token kopiert wurde. Sie können es dann nicht mehr anzeigen!',
                'creating_access'       => 'Zugang erstellen',
                'return'                => 'Rückkehr',
                'your_token_is'         => 'Ihr Token ist:',
            ],
        ],
        'data_export'    => [
            'index'         => [
                'heading'       => 'Datenexport',
            ],
        ],
        'home'                          => [
            'components'                    => [
                'x_general_component'           => [
                    'how_many_days'                 => 'Wie viele Tage?',
                    'legend'                        => [
                        'spanning_days'                 => 'einnahmen pro tag',
                        'this_year'                     => 'einnahmen pro monat',
                    ],
                    'reset'                         => 'Zurücksetzen',
                    'reset_text_info'               => 'Um den Inhalt nach dem Löschen der Komponente wiederherzustellen, klicken Sie auf die Schaltfläche: ',
                    'revenue_of_the_spanning_days'  => 'Einnahmen der Spanning Days',
                    'revenue_of_this_year'          => 'Einnahmen dieses Jahres',
                ],
            ],
            'index'         => [
                'heading'       => 'Home',
            ],
        ],
        'sales'         => [
            'index'         => [
                'heading'       => 'Verkauf',
            ],
        ],
        'settings'      => [
            'components'    => [
                'x_general_component'           => [
                    'general_settings'              => 'Allgemeine Einstellungen',
                    'save_changes'                  => 'Änderungen speichern',
                    'cancel'                        => 'Stornieren',
                ],
                'x_select_language_component'   => [
                    'choose_language'               => 'Sprache wählen',
                ],
            ],
            'index'         => [
                'heading'       => 'Einstellungen',
                'select_language'   => [
                    'de'                => 'Deutsche',
                    'en'                => 'Englische',
                    'fr'                => 'Französische',
                    'it'                => 'Italienische',
                    'pl'                => 'Polnische',
                ],
            ],
        ],
        'shared'        => [
            'actionButtons' => [
                'destroy'       => [
                    'action'        => 'Aktion',
                    'remove'        => 'Entfernen',
                    'reset_token'   => 'Token zurücksetzen',
                ],
            ],
        ],
        'stock_status'   => [
            'components'      => [
                'x_list_of_stock_status_component' => [
                    'code'                             => 'Code',
                    'name'                             => 'Name',
                    'description'                      => 'Beschreibung',
                    'created'                          => 'Erstellt',
                ],
            ],
            'index'         => [
                'heading'       => 'Lagerbestand',
            ],
        ],
    ],
];
