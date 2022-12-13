<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_visiteur_index' => [[], ['_controller' => 'App\\Controller\\VisiteurController::index'], [], [['text', '/visiteur/index']], [], [], []],
    'app_visiteur_new' => [[], ['_controller' => 'App\\Controller\\VisiteurController::new'], [], [['text', '/visiteur/new']], [], [], []],
    'app_visiteur_show' => [['id'], ['_controller' => 'App\\Controller\\VisiteurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/visiteur']], [], [], []],
    'app_visiteur_edit' => [['id'], ['_controller' => 'App\\Controller\\VisiteurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/visiteur']], [], [], []],
    'app_visiteur_delete' => [['id'], ['_controller' => 'App\\Controller\\VisiteurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/visiteur']], [], [], []],
    'app_accueil' => [[], ['_controller' => 'App\\Controller\\LoginController::visiteur'], [], [['text', '/']], [], [], []],
    'app_comptable' => [[], ['_controller' => 'App\\Controller\\LoginController::comptable'], [], [['text', '/comptable']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/home']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'app_frais_forfait' => [[], ['_controller' => 'App\\Controller\\FicheFraisController::renseigner'], [], [['text', '/frais/forfait']], [], [], []],
    'app_frais_hors_forfait' => [[], ['_controller' => 'App\\Controller\\FicheFraisController::renseignerHorsForfait'], [], [['text', '/frais/hors/forfait']], [], [], []],
    'app_visu_frais' => [[], ['_controller' => 'App\\Controller\\FicheFraisController::visualiser'], [], [['text', '/fiche/frais/visualiser']], [], [], []],
];
