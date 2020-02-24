<?php

return [
    'left_menu' => [
        'api_users'         => 'Dostęp do API',
        'data_export'        => 'Eksport danych',
        'home'              => 'Home', // do not translate
        'sales'             => 'Sprzedaż',
        'settings'          => 'Ustawienia',
        'stock_status'       => 'Stan magazynu',
    ],
    'pages'         => [
        'api_users'     => [
            'components'            => [
                'x_access_to_api_component'     => [
                    'alert_heading'                 => 'Playground dla API (Swagger UI) znajduje się pod adresem:',
                ],
                'x_create_api_token_component'  => [
                    'cancel'                        => 'Anuluj',
                    'description'                   => 'Opis',
                    'name'                          => 'Nazwa',
                    'placeholder_description'       => 'opis',
                    'placeholder_name'              => 'nazwa',
                    'send'                          => 'Wysłać',
                ],
                'x_list_of_api_users_component' => [
                    'action'                        => 'Akcja',
                    'created'                       => 'Utworzony',
                    'description'                   => 'Opis',
                    'name'                          => 'Nazwa',
                ],
            ],
            'index'         => [
                'heading'       => 'Dostęp do API',
                'tabs'          => [
                    'access_to_api'     => 'Dostęp do API',
                    'create_api_token'  => 'Utwórz token',
                    'list_of_api_users' => 'Lista użytkowników',
                ],
            ],
            'token_confirmation'    => [
                'alert_warning'         => 'Upewnij się, że token został skopiowany, nie będziesz mógł go ponownie wyświetlić!',
                'creating_access'       => 'Tworzenie dostępu',
                'return'                => 'Powrót',
                'your_token_is'         => 'Twój token to:',
            ],
        ],
        'data_export'    => [
            'index'         => [
                'heading'       => 'Eksport danych',
            ],
        ],
        'home'                          => [
            'components'                    => [
                'x_general_component'           => [
                    'how_many_days'                 => 'Ile dni?',
                    'legend'                        => [
                        'spanning_days'                 => 'przychód na dzień',
                        'this_year'                     => 'przychody miesięcznie',
                    ],
                    'reset'                         => 'Resetowanie',
                    'reset_text_info'               => 'Aby przywrócić zawartość po usunięciu komponentu, kliknij przycisk: ',
                    'revenue_of_the_spanning_days'  => 'Dochód obejmujący dni',
                    'revenue_of_this_year'          => 'Przychody tego roku',
                ],
            ],
            'index'         => [
                'heading'       => 'Home',
            ],
        ],
        'sales'         => [
            'index'         => [
                'heading'       => 'Sprzedaż',
            ],
        ],
        'settings'      => [
            'components'    => [
                'x_general_component'           => [
                    'general_settings'              => 'Ustawienia główne',
                    'save_changes'                  => 'Zapisz zmiany',
                    'cancel'                        => 'Anuluj',
                ],
                'x_select_language_component'   => [
                    'choose_language'               => 'Wybierz język',
                ],
            ],
            'index'         => [
                'heading'       => 'Ustawienia',
                'select_language'   => [
                    'de'                => 'niemiecki',
                    'en'                => 'angielski',
                    'fr'                => 'francuski',
                    'it'                => 'włoski',
                    'pl'                => 'polski',
                ],
            ],
        ],
        'shared'        => [
            'actionButtons' => [
                'destroy'       => [
                    'action'        => 'Akcja',
                    'remove'        => 'Usunąć',
                    'reset_token'   => 'Zresetuj token',
                ],
            ],
        ],
        'stock_status'   => [
            'components'      => [
                'x_list_of_stock_status_component' => [
                    'code'                             => 'Kod',
                    'name'                             => 'Nazwa',
                    'description'                      => 'Opis',
                    'created'                          => 'Utworzony',
                ],
            ],
            'index'         => [
                'heading'       => 'Stan magazynu',
            ],
        ],
    ],
];
