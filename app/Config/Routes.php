<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('/search', 'Search::index', ['as' => 'search']);


//Rota de fetchs
$routes->get('banner/home', 'HomeFetch::banner');
$routes->get('trending/home', 'HomeFetch::trending');
