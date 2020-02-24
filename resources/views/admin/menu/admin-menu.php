<?php

//__ Here we can modify the sidebar/top navigation of the admin panel.

return [
//    [
//        'text' => __('admin.left_menu.sales'),
//        'icon' => 'fas fa-cash-register',
//        'icon_color' => 'yellow',
//        'route' => 'admin.sales.index',
//    ],
    [
        'text' => __('admin.left_menu.stock_status'),
        'icon' => 'fas fa-boxes',
        'icon_color' => 'yellow',
        'route' => 'admin.stockStatus.index',
    ],
//    [
//        'text' => __('admin.left_menu.data_export'),
//        'icon' => 'fas fa-download',
//        'icon_color' => 'yellow',
//        'route' => 'admin.dataExports.index',
//    ],
    [
        'text' => __('admin.left_menu.api_users'),
        'icon' => 'fas fa-arrows-alt-h',
        'icon_color' => 'yellow',
        'route' => 'admin.apiUsers.index',
    ],
    [
        'text' => __('admin.left_menu.settings'),
        'icon' => 'fas fa-cog',
        'icon_color' => 'yellow',
        'route' => 'admin.settings.index',
    ],
];
