<?php
include 'route.php';


include 'pages/about.php';
include 'pages/contact.php';
include 'pages/login.php';

echo 1;

$route = new Route();

$route->add('/');
$route->add('/about', 'About');
$route->add('/contact', 'Contact');
$route->add('/login', 'Login');

echo "hi";

echo '<pre>';
print_r($route);

$route->submit();

?>
