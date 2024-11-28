<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('administracao', 'Main::administracao');
$routes->get('admins', 'Main::admins');
$routes->get('cadastro', 'Main::cadastro');
$routes->get('cadlogin', 'Main::cadlogin');
$routes->get('login', 'Main::login');
$routes->get('pesquisa', 'Main::pesquisar');
$routes->get('alterar', 'Main::alterar');
$routes->get('header', 'templates::header');
$routes->get('nav', 'templates::nav');
$routes->get('footer', 'templates::footer');