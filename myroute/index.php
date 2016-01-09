<?php
ini_set('display_errors', 1);

include 'route.php';
include 'pages/home.php';
include 'pages/about.php';
include 'pages/contact.php';
include 'pages/login.php';

$route = new Route();

$route->add('/', function() {
	echo "Hey this is home~!";
});

$route->add('/about', 'About');
$route->add('/contact', 'Contact');
$route->add('/login', 'Login');

//echo '<pre>';
print_r($route);

$route->submit();

?>
