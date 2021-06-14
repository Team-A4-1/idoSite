<?php


require 'vendor/autoload.php';
$router = new AltoRouter();
// Start the session
session_start();
// map pages

$router->addRoutes(array(
	array('GET', '/', function() {require __DIR__ . '/public/views/home.php';}),
	array('GET', '/books', function() {require __DIR__ . '/public/views/books.php';}),
	array('GET', '/info', function() {require __DIR__ . '/public/views/info.php';}),
	array('GET', '/about', function() {require __DIR__ . '/public/views/about.php';}),
	array('GET', '/login', function() {require __DIR__ . '/public/views/login.php';}),
	array('GET', '/payment', function() {require __DIR__ . '/public/views/payment.php';}),
	array('GET', '/shoppingcart', function() {require __DIR__ . '/public/views/shopcart.php';}),
	array('GET', '/productdetails', function() {require __DIR__ . '/public/views/productdetails.php';}),
	array('GET', '/contact', function() {require __DIR__ . '/public/views/contact.php';}),
	//user cms
	array('GET', '/acount/products', function() {
		if(isset($_SESSION['userid'])){
		require __DIR__ . '/public/views/productlist.php';
		}
		else{
			header('Location:/');
			die();
		}
	}),
	array('GET', '/acount/users', function() {
		if(isset($_SESSION['userid'])){

		require __DIR__ . '/public/views/userlist.php';
		}
		else{
			header('Location:/');
			die();
		}
	}),
	array('GET', '/acount/add', function() {
		if(isset($_SESSION['userid'])){

		require __DIR__ . '/public/views/addbooks.php';
		}
			else{
				echo $_SESSION['userid'];
					}
	}),
	array('GET', '/acount/orderlist', function() {
		if(isset($_SESSION['userid'])){

			require __DIR__ . '/public/views/orderlist.php';
	}
	else{
		header('Location:/');
		die();
	}
	}),

	//
	array('GET', '/product/[i:id]/', function($id) {require __DIR__ . '/public/views/productdetails.php';}),
	array('GET', '/payment', function() {require __DIR__ . '/public/views/payment.php';}),
	array('GET', '/orderlist', function() {require __DIR__ . '/public/views/orderlist.php';}),
	array('GET', '/productlist', function() {require __DIR__ . '/public/views/productlist.php';}),
	array('GET', '/userlist', function() {require __DIR__ . '/public/views/userlist.php';})
));

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