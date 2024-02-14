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
$routes->post('login', 'Login::store', ['as' => 'login.store', 'filter' => 'verifyLoggedCsrfThrottle']);
$routes->get('logout', 'Login::logout', ['as' => 'logout']);

// Register
$routes->get('register', 'Register::index', ['as' => 'register', 'filter' => 'csrfThrottle']);
$routes->post('register', 'Register::store', ['as' => 'register.store', 'filter' => 'verifyLoggedCsrfThrottle']);

// Forgot Password
$routes->get('forgot/password', 'Forgot::index', ['as' => 'forgot', 'filter' => 'verifyLogged']);
$routes->post('forgot/password', 'Forgot::store', ['as' => 'forgot.store', 'filter' => 'csrfThrottle']);
$routes->get('reset/(:alphanum)', 'Forgot::edit/$1', ['as' => 'forgot.edit']);
$routes->post('forgot/update/(:alphanum)', 'Forgot::update/$1', ['as' => 'forgot.update', 'filter' => 'csrfThrottle']);

// Cadastrar Mensagem/Reply
$routes->post('comment', 'Comment::store', ['as' => 'comment.store', 'filter' => 'csrfThrottle']);

// Contact
$routes->get('contact', 'Contact::index', ['as' => 'contact']);
$routes->post('contact', 'Contact::store', ['as' => 'contact.store', 'filter' => 'csrfThrottle']);

// Profile
$routes->get('profile', 'Profile::index', ['as' => 'profile', 'filter' => 'verifyNotLogged']);

$routes->group('api', ['filter' => 'verifyNotLoggedCsrfThrottleAjax'], function ($routes) {
    $routes->post('reply', 'Reply::store', ['as' => 'reply.store']);
    $routes->put('profile', 'Profile::update', ['as' => 'profile.update']);
    $routes->put('password', 'Profile::updatePassword', ['as' => 'profile.updatePassword']);
    $routes->post('avatar', 'Profile::updateAvatar', ['as' => 'profile.updateAvatar']);
});

//Rota de fetchs
$routes->get('banner/home', 'HomeFetch::banner');
$routes->get('trending/home', 'HomeFetch::trending');
$routes->get('recent/home', 'HomeFetch::recent');
$routes->get('category/sidebar/partials/(:alpha)', 'CategorySidebarPartials::index/$1');
$routes->get('category/fetch/(:alpha)', 'Category::index/$1');
$routes->get('category/(:any)', 'Category::getCategoryPosts/$1');


$routes->set404Override(function () {
    return view('error404');
});
