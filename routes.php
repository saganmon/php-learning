<?php

$router->get('', 'controllers/index.php'); // get($uri, $controller)
// $router->routes['GET'][''] = controllers/index.php
$router->get('about', 'controllers/about.php');
// $router->routes['GET']['about'] = controllers/about.php
$router->get('about/culture', 'controllers/about-culture.php');
// $router->routes['GET']['about/culture'] = controllers/about-culture.php
$router->get('contact', 'controllers/contact.php');
// $router->routes['GET']['about/culture'] = controllers/about-culture.php
$router->post('names', 'controllers/add-name.php');
// $router->routes['POST']['names'] = controllers/add-name.php