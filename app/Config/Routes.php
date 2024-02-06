<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('/search', 'Search::index', ['as' => 'search']);

$routes->get('post/(:any)', 'Post::index/$1');

// Login
$routes->get('login', 'Login::index', ['as' => 'login', 'filter' => 'verifyLogged']);
$routes->post('login', 'Login::store', ['as' => 'login.store', 'filter' => 'verifyLogged']);
$routes->get('logout', 'Login::logout', ['as' => 'logout']);

// Register
$routes->get('register', 'Register::index', ['as' => 'register']);
$routes->post('register', 'Register::store', ['as' => 'register.store', 'filter' => 'verifyLogged']);

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
