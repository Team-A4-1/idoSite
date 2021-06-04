<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Blen Michil">
    <link rel="stylesheet" href="public/css/home.css">
    <link rel="stylesheet" href="public/css/orderlist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
</head>


<body>
<?php
require_once('header-footer/header.php');
?>
    <div class="wrapper">
        <div class="sidebar">
            <ul class="sidebar__list">
                <li class="sidebar__item">Users</li>
                <li class="sidebar__item"><a href="">Products</a></li>
                <li class="sidebar__item active"><a href="/orderlist">Orders</a></li>
            </ul>
        </div>
        
    <div class="orderlist-box">
        <ul>
            <li class="order-list">
                <input class="order-list-check" type="checkbox" id="check" name="check" value="check">
                <div class="order-image-box"></div>
                <p>Name</p>
                <p>Adress</p>
                <p>Mail</p>
                <p>Product</p>
                <p>Weight</p>
                <p>Price</p>
            </li>

            <li class="order-list list-background">
                <input class="order-list-check" type="checkbox" id="check" name="check" value="check">
                <div class="order-image-box"></div>
                <p>Name</p>
                <p>Adress</p>
                <p>Mail</p>
                <p>Product</p>
                <p>Weight</p>
                <p>Price</p>
            </li>

            <li class="order-list">
                <input class="order-list-check" type="checkbox" id="check" name="check" value="check">
                <div class="order-image-box"></div>
                <p>Name</p>
                <p>Adress</p>
                <p>Mail</p>
                <p>Product</p>
                <p>Weight</p>
                <p>Price</p>
            </li>

            <li class="order-list list-background">
                <input class="order-list-check" type="checkbox" id="check" name="check" value="check">
                <div class="order-image-box"></div>
                <p>Name</p>
                <p>Adress</p>
                <p>Mail</p>
                <p>Product</p>
                <p>Weight</p>
                <p>Price</p>
            </li>

            <li class="order-list">
                <input class="order-list-check" type="checkbox" id="check" name="check" value="check">
                <div class="order-image-box"></div>
                <p>Name</p>
                <p>Adress</p>
                <p>Mail</p>
                <p>Product</p>
                <p>Weight</p>
                <p>Price</p>
            </li>

            <li class="order-list list-background">
                <input class="order-list-check" type="checkbox" id="check" name="check" value="check">
                <div class="order-image-box"></div>
                <p>Name</p>
                <p>Adress</p>
                <p>Mail</p>
                <p>Product</p>
                <p>Weight</p>
                <p>Price</p>
            </li>
        </ul>
    </div>




    </div>

</body>
<?php
require_once('header-footer/footer.php');
?>

<script src="public/scripts/home/getProductsHome.js"></script>


</html>