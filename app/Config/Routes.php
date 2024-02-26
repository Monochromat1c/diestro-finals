<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'mainController::index');
$routes->get('/signup', 'mainController::signup');
$routes->get('/signin', 'mainController::signin');

$routes->post('/add/user', 'mainController::addUser');
$routes->post('/signin', 'mainController::signin');

$routes->group('', ['filter' => 'AuthUser'], function($routes){
    // $routes->get('/website/test', 'mainController::test');
    $routes->get('/dashboard', 'mainController::dashboard');
    $routes->get('/add/data', 'mainController::addData');
    $routes->get('/edit/data/(:num)', 'mainController::editData/$1');
    $routes->get('/view/data/(:num)', 'mainController::viewData/$1');
    $routes->get('/delete/data/(:num)', 'mainController::deleteData/$1');
    $routes->get('/signout', 'mainController::confirm_signout');
    $routes->get('/signout/confirmed', 'mainController::signout');
    $routes->get('/view/profile', 'mainController::viewProfile');
    $routes->get('edit/profile', 'mainController::editProfile');

    // $routes->post('/edit/profile/process', 'mainController::processEditProfile');
    $routes->post('profile/updateProfile', 'mainController::updateProfile');
    $routes->post('/add/data', 'mainController::addData');
    $routes->post('/edit/data/(:num)', 'mainController::editData/$1');
    $routes->post('/delete/data/(:num)', 'mainController::deleteData/$1');
});



