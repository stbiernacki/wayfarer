<?php

return [
    'left_menu' => [
        'api_users'         => 'Api Access',
        'data_export'        => 'Data Export',
        'home'              => 'Home', // do not translate
        'sales'             => 'Sales',
        'settings'          => 'Settings',
        'stock_status'       => 'Stock Status',
    ],
    'pages'         => [
        'api_users'     => [
            'components'            => [
                'x_access_to_api_component'     => [
                    'alert_heading'                 => 'Playground for API (SwaggerUI) is located at:',
                ],
                'x_create_api_token_component'  => [
                    'cancel'                        => 'Cancel',
                    'description'                   => 'Description',
                    'name'                          => 'Name',
                    'placeholder_description'       => 'description',
                    'placeholder_name'              => 'name',
                    'send'                          => 'Send',
                ],
                'x_list_of_api_users_component' => [
                    'action'                        => 'Action',
                    'created'                       => 'Created',
                    'description'                   => 'Description',
                    'name'                          => 'Name',
                ],
            ],
            'index'                 => [
                'heading'       => 'Api Access',
                'tabs'          => [
                    'access_to_api'     => 'Access To Api',
                    'create_api_token'  => 'Create Api Token',
                    'list_of_api_users' => 'List Of Api Users',
                ],
            ],
            'token_confirmation'    => [
                'alert_warning'         => 'Make sure that the token has been copied, you will not be able to view it again!',
                'creating_access'       => 'Creating Access',
                'return'                => 'Return',
                'your_token_is'         => 'Your token is:',
            ],
        ],
        'data_export'    => [
            'index'         => [
                'heading'       => 'Data Export',
            ],
        ],
        'home'                          => [
            'components'                    => [
                'x_general_component'           => [
                    'how_many_days'                 => 'How Many Days?',
                    'legend'                        => [
                        'spanning_days'                 => 'revenue per day',
                        'this_year'                     => 'revenue per month',
                    ],
                    'reset'                         => 'Reset',
                    'reset_text_info'               => 'To restore content after the component has been deleted, click on the button: ',
                    'revenue_of_the_spanning_days'  => 'Revenue Of The Spanning Days',
                    'revenue_of_this_year'          => 'Revenue Of This Year',
                ],
            ],
            'index'         => [
                'heading'       => 'Home',
            ],
        ],
        'sales'         => [
            'index'         => [
                'heading'       => 'Sales',
            ],
        ],
        'settings'      => [
            'components'    => [
                'x_general_component'           => [
                    'general_settings'              => 'General Settings',
                    'save_changes'                  => 'Save Changes',
                    'cancel'                        => 'Cancel',
                ],
                'x_select_language_component'   => [
                    'choose_language'               => 'Choose Language',
                ],
            ],
            'index'             => [
                'heading'           => 'Settings',
                'select_language'   => [
                    'de'                => 'German',
                    'en'                => 'English',
                    'fr'                => 'French',
                    'it'                => 'Italian',
                    'pl'                => 'Polish',
                ],
            ],
        ],
        'shared'        => [
            'actionButtons' => [
                'destroy'       => [
                    'action'        => 'Action',
                    'remove'        => 'Remove',
                    'reset_token'   => 'Reset Token',
                ],
            ],
        ],
        'stock_status'   => [
            'components'      => [
                'x_list_of_stock_status_component' => [
                    'code'                             => 'Code',
                    'name'                             => 'Name',
                    'description'                      => 'Description',
                    'created'                          => 'Created',
                ],
            ],
            'index'         => [
                'heading'       => 'Stock Status',
            ],
        ],
    ],
];
