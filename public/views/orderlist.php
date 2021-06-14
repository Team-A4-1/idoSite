<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Kevin Kranenburg">
    <link rel="stylesheet" href="/public/css/home.css">
    <link rel="stylesheet" href="/public/css/orderlist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CMS | Orders</title>
</head>


<body>
<?php
require_once('header-footer/header.php');
?>
    <div class="wrapper">
        <div class="sidebar">
            <ul class="sidebar__list">
                <li class="sidebar__item"><a href="/userlist">Users</a></li>
                <li class="sidebar__item"><a href="/productlist">Products</a></li>
                <li class="sidebar__item active"><a href="/orderlist">Orders</a></li>
            </ul>
        </div>
        
    <div class="orderlist-box">
        <ul>
        <li class="order-list-top">
            <form class="user-form" action="">
                <select class="user-select" name="users" id="users">
                <option value="user">A-Z</option>
                    <option value="user">Z-A</option>
                    <option value="user">Price High-Low</option>
                    <option value="user">Price Low-Heigh</option>
                </select>
            </form>
            
            <form class="user-form-right" id="form"> 
                <input class="user-search" type="search" id="query" name="q" placeholder="Search...">
                <button class="user-search-button">Search</button>
            </form>
        </li>

        <li class="order-list-top-under">
        <div class="box-trash"><i class="fas fa-trash-alt"></i></div>
                <div class="order-image-box-invisible"></div>
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