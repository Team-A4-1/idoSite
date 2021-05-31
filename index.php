<?php


require 'vendor/autoload.php';
$router = new AltoRouter();

// map pages

$router->addRoutes(array(
	array('GET', '/', function() {require __DIR__ . '/public/views/home.php';}),
	array('GET', '/books', function() {require __DIR__ . '/public/views/books.php';}),
	array('GET', '/info', function() {require __DIR__ . '/public/views/info.php';}),
	array('GET', '/about', function() {require __DIR__ . '/public/views/about.php';}),
	array('GET', '/contact', function() {require __DIR__ . '/public/views/contact.php';}),
	array('GET', '/product/[i:id]/', function($id) {require __DIR__ . '/public/views/productdetails.php';})));

// match current request url
$match = $router->match();

// call closure or throw 404 status
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
?>