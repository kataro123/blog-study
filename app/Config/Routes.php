<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('/search', 'Search::index', ['as' => 'search']);

$routes->get('post/(:any)', 'Post::index/$1');

// Login
$routes->get('login', 'Login::index', ['as' => 'login']);
$routes->post('login', 'Login::store', ['as' => 'login.store']);
$routes->get('register', 'Login::register', ['as' => 'register']);
$routes->get('logout', 'Login::logout', ['as' => 'logout']);

// Cadastrar Mensagem/Reply
$routes->post('api/reply', 'Reply::store', ['as' => 'reply.store']);
$routes->post('comment', 'Comment::store', ['as' => 'comment.store', 'filter' => 'csrfThrottle']);


//Rota de fetchs
$routes->get('banner/home', 'HomeFetch::banner');
$routes->get('trending/home', 'HomeFetch::trending');
$routes->get('recent/home', 'HomeFetch::recent');
$routes->get('category/sidebar/partials/(:alpha)', 'CategorySidebarPartials::index/$1');
$routes->get('category/fetch/(:alpha)', 'Category::index/$1');
$routes->get('category/(:any)', 'Category::getCategoryPosts/$1');
