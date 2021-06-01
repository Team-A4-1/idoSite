<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Kevin Kranenburg">
    <link rel="stylesheet" href="public/css/productdetails.css">
    <title>Book</title>
</head>

<style>
.grid-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  gap: 0px 0px;
  grid-template-areas:
    "product-detail-left product-detail-right"
    "product-detail-bottom product-detail-bottom";
}

.product-detail-left {
  grid-area: product-detail-left;
  height: auto;
  border: 1px solid black;
}

.product-detail-right {
  grid-area: product-detail-right;
  height: auto;
  border: 1px solid black;
}

.product-detail-bottom {
  grid-area: product-detail-bottom;
  height: auto;
  border: 1px solid black;
}

</style>

<?php
require_once('header-footer/header.php');
echo "<script>var id= $id;</script>";
?>
<body>
    <div id="product">
        
        <div class="grid-container">
            <div class="product-detail-left">
                <div class="thumbnails"></div>
                    <img id="image"></img>
            </div>
            


            <div class="product-detail-right">
                <div class="side">
                    <h1 id="title"></h1>
                    <p id="author"></p>
                    <div id="amount_togle"></div>
                    <div id="addCart">add to cart</div>
                    <div id="addWishlist">add to wishlist</div>
                </div>
            </div>


            <div class="product-detail-bottom">
                <div class="botom_window">
                <div id="tabs"></div>
                <div id="tabdata"></div>
            </div>
        </div>

    </div>



    

    <script src="/public/scripts/product-details/details.js"></script>
</body>

<?php
require_once('header-footer/footer.php');
?>

</html>