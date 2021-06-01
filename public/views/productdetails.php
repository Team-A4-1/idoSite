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
    padding: 50px;
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

#title {
    font-size: 45px;
}

#author {
    font-size: 30px;
}

#addCart {
    background-color: #346dbb;
    color: white;
    width: 220px;
    height: 75px;
    border: none;
    font-weight: 600;
    font-size: 20px;
}

#amount_togle {
    background-color: white;
    border: 1px solid lightgray;
    color: #346dbb;
    height: 75px;
    width: 100px;
}

#image {
    width: 65%;
    margin-left: auto;
    margin-right: auto;
    display: block;
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
                    <p id="title"></p>
                    <p id="author"></p>
                    <input type="number" id="amount_togle" name="quantity" placeholder="1" min="1" max="10">
                    <button id="addCart">ADD TO CART</button>
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