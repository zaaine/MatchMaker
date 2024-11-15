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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Infra\\MatchMaker\\UserInterface\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/match/maker' => [[['_route' => 'match_maker_index', '_controller' => 'App\\Infra\\MatchMaker\\UserInterface\\Controller\\EncounterController::index'], null, ['GET' => 0], null, true, false, null]],
        '/match/maker/new' => [[['_route' => 'match_maker_new', '_controller' => 'App\\Infra\\MatchMaker\\UserInterface\\Controller\\EncounterController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Infra\\MatchMaker\\UserInterface\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/lobby' => [[['_route' => 'lobby', '_controller' => 'App\\Infra\\MatchMaker\\UserInterface\\Controller\\LobbyController::enterLobby'], null, null, null, false, false, null]],
        '/lobby/pending' => [[['_route' => 'lobbyPending', '_controller' => 'App\\Infra\\MatchMaker\\UserInterface\\Controller\\LobbyController::pendingLobby'], null, null, null, false, false, null]],
        '/lobby/exit' => [[['_route' => 'lobbyExit', '_controller' => 'App\\Infra\\MatchMaker\\UserInterface\\Controller\\LobbyController::exitLobby'], null, null, null, false, false, null]],
        '/player' => [[['_route' => 'player_index', '_controller' => 'App\\Infra\\MatchMaker\\UserInterface\\Controller\\PlayerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Infra\\User\\UserInterface\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Infra\\User\\UserInterface\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Infra\\User\\UserInterface\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/match/maker/([^/]++)/([^/]++)/vs/([^/]++)/score(*:217)'
                .'|/player/([^/]++)(?'
                    .'|(*:244)'
                    .'|/edit(*:257)'
                    .'|(*:265)'
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
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        217 => [[['_route' => 'match_maker_edit', '_controller' => 'App\\Infra\\MatchMaker\\UserInterface\\Controller\\EncounterController::edit'], ['date', 'playerA', 'playerB'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        244 => [[['_route' => 'player_show', '_controller' => 'App\\Infra\\MatchMaker\\UserInterface\\Controller\\PlayerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        257 => [[['_route' => 'player_edit', '_controller' => 'App\\Infra\\MatchMaker\\UserInterface\\Controller\\PlayerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        265 => [
            [['_route' => 'player_delete', '_controller' => 'App\\Infra\\MatchMaker\\UserInterface\\Controller\\PlayerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
