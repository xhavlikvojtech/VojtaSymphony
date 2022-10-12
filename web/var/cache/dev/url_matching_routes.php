<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage_default', '_controller' => 'App\\Controller\\BartaController::default'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'homepage_add', '_controller' => 'App\\Controller\\BartaController::add'], null, null, null, false, false, null]],
        '/edit' => [[['_route' => 'homepage_edit', '_controller' => 'App\\Controller\\BartaController::edit'], null, null, null, false, false, null]],
        '/spacelab' => [[['_route' => 'homepage_detail', '_controller' => 'App\\Controller\\BartaController::spacelab'], null, null, null, false, false, null]],
        '/xhavlikvojtech_new' => [[['_route' => 'xhavlikvojtech_new', '_controller' => 'App\\Controller\\UserController::new'], null, null, null, false, false, null]],
        '/xhavlikvojtech_delete' => [[['_route' => 'xhavlikvojtech_delete', '_controller' => 'App\\Controller\\UserController::delete'], null, null, null, false, false, null]],
        '/xhavlikvojtech_edit' => [[['_route' => 'xhavlikvojtech_edit', '_controller' => 'App\\Controller\\UserController::edit'], null, null, null, false, false, null]],
        '/xhavlikvojtech_detail' => [[['_route' => 'xhavlikvojtech_detail', '_controller' => 'App\\Controller\\UserController::detail'], null, null, null, false, false, null]],
        '/xhavlikvojtech_default' => [[['_route' => 'xhavlikvojtech_default', '_controller' => 'App\\Controller\\UserController::default'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
