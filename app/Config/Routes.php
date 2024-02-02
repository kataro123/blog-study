<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('/search', 'Search::index', ['as' => 'search']);

$routes->get('post/(:any)', 'Post::index/$1');


//Rota de fetchs
$routes->get('banner/home', 'HomeFetch::banner');
$routes->get('trending/home', 'HomeFetch::trending');
$routes->get('recent/home', 'HomeFetch::recent');
$routes->get('category/sidebar/partials/(:alpha)', 'CategorySidebarPartials::index/$1');
$routes->get('category/fetch/(:alpha)', 'Category::index/$1');
$routes->get('category/(:any)', 'Category::getCategoryPosts/$1');
