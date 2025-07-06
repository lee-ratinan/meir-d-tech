<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about-us', 'Home::aboutUs');
$routes->get('contact-us', 'Home::contactUs');
$routes->get('services', 'Home::services');
$routes->get('blog', 'Home::blog'); // p=?&tag=?&q=? (page, tag, search)
$routes->get('blog/view/(:any)', 'Home::blogView/$1');
$routes->get('products', 'Home::products'); // list product categories
$routes->get('products/category/(:any)', 'Home::productsByCategory/$1');
$routes->get('products/view/(:any)', 'Home::productView/$1');
// SITEMAP.XML
$routes->get('sitemap.xml', 'Home::sitemap');
// POST
$routes->post('contact-us', 'Home::contactUsScript');