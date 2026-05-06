<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// --- HALAMAN PUBLIK (GIRLY THEME) ---
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');
$routes->get('/faqs', 'Home::faqs');

// --- HALAMAN BLOG/POST ---
$routes->get('/post', 'Post::index');
$routes->get('/post/(:any)', 'Post::viewPost/$1');

// --- HALAMAN ADMIN (MODIFIKASI FILTER) ---
$routes->group('admin', ['filter' => 'login'], function ($routes) {
    
    // URL: localhost:8080/admin/post
    $routes->get('post', 'PostAdmin::index');
    
    // URL: localhost:8080/admin/post/1/preview
    $routes->get('post/(:segment)/preview', 'PostAdmin::preview/$1');
    
    // URL: localhost:8080/admin/post/new
    $routes->match(['get', 'post'], 'post/new', 'PostAdmin::create');
    
    // URL: localhost:8080/admin/post/1/edit
    $routes->match(['get', 'post'], 'post/(:segment)/edit', 'PostAdmin::edit/$1');
    
    // --- PERBAIKAN DI SINI ---
    // URL Sekarang: localhost:8080/admin/post/delete/1
    // Sebelumnya: post/(:segment)/delete (terbalik)
    $routes->get('post/delete/(:segment)', 'PostAdmin::delete/$1');
});