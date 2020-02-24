<?php

return [
    'left_menu' => [
        'api_users'         => 'Accesso Api',
        'data_export'        => 'Esportazione dei dati',
        'home'              => 'Home', // do not translate
        'sales'             => 'Vendita',
        'settings'          => 'Impostazioni',
        'stock_status'       => 'Stato delle scorte',
    ],
    'pages'         => [
        'api_users'     => [
            'components'            => [
                'x_access_to_api_component'     => [
                    'alert_heading'                 => 'Playground per API (SwaggerUI) si trova in:',
                ],
                'x_create_api_token_component'  => [
                    'cancel'                        => 'Annulla',
                    'description'                   => 'Descrizione',
                    'name'                          => 'Nome',
                    'placeholder_description'       => 'descrizione',
                    'placeholder_name'              => 'nome',
                    'send'                          => 'Invia',
                ],
                'x_list_of_api_users_component' => [
                    'action'                        => 'Azione',
                    'created'                       => 'Creato',
                    'description'                   => 'Descrizione',
                    'name'                          => 'Nome',
                ],
            ],
            'index'         => [
                'heading'       => 'Accesso Api',
                'tabs'          => [
                    'access_to_api'     => 'Accesso ad Api',
                    'create_api_token'  => 'Creare un token',
                    'list_of_api_users' => 'Elenco di utenti',
                ],
            ],
            'token_confirmation'    => [
                'alert_warning'         => 'Assicurati che il token sia stato copiato, non potrai più visualizzarlo!',
                'creating_access'       => 'Creare l\'accesso',
                'return'                => 'Ritorno',
                'your_token_is'         => 'Il token è:',
            ],
        ],
        'data_export'    => [
            'index'         => [
                'heading'       => 'Esportazione dei dati',
            ],
        ],
        'home'                          => [
            'components'                    => [
                'x_general_component'           => [
                    'how_many_days'                 => 'Quanti giorni?',
                    'legend'                        => [
                        'spanning_days'                 => 'entrate al giorno',
                        'this_year'                     => 'entrate al mese',
                    ],
                    'reset'                         => 'Ripristina',
                    'reset_text_info'               => 'Per ripristinare il contenuto dopo l\'eliminazione del componente, fare clic sul pulsante: ',
                    'revenue_of_the_spanning_days'  => 'Entrate  dei giorni',
                    'revenue_of_this_year'          => 'Entrate dell\'anno',
                ],
            ],
            'index'         => [
                'heading'       => 'Home',
            ],
        ],
        'sales'         => [
            'index'         => [
                'heading'       => 'Vendita',
            ],
        ],
        'settings'      => [
            'components'    => [
            'x_general_component'           => [
                'general_settings'              => 'Impostazioni generali',
                'save_changes'                  => 'Salvare le modifiche',
                'cancel'                        => 'Annulla',
            ],
            'x_select_language_component'   => [
                'choose_language'               => 'Scegli la lingua',
            ],
        ],
            'index'         => [
                'heading'       => 'Impostazioni',
                'select_language'   => [
                    'de'                => 'tedesco',
                    'en'                => 'inglese',
                    'fr'                => 'francese',
                    'it'                => 'italiano',
                    'pl'                => 'polacco',
                ],
            ],
        ],
        'shared'        => [
            'actionButtons' => [
                'destroy'       => [
                    'action'        => 'Azione',
                    'remove'        => 'Rimuovere',
                    'reset_token'   => 'Reimposta token',
                ],
            ],
        ],
        'stock_status'   => [
            'components'      => [
                'x_list_of_stock_status_component' => [
                    'code'                             => 'Codice',
                    'name'                             => 'Nome',
                    'description'                      => 'Descrizione',
                    'created'                          => 'Creato',
                ],
            ],
            'index'         => [
                'heading'       => 'Stato delle scorte',
            ],
        ],
    ],
];
