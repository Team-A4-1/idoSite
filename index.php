<?php


require 'vendor/autoload.php';
$router = new AltoRouter();

// map pages
$router->map( 'GET', '/', function() {
	require __DIR__ . '/views/home.php';
});

$router->map( 'GET', '/books', function() {
	require __DIR__ . '/views/books.php';
});
$router->map( 'GET', '/login', function() {
	require __DIR__ . '/views/login.php';
});


// match current request url
$match = $router->match();

// call closure or throw 404 status
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}