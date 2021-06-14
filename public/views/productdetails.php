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

}

.product-detail-right {
  grid-area: product-detail-right;
  height: auto;
}

.product-detail-bottom {
  grid-area: product-detail-bottom;
  height: fit-content;
}

#title {
    font-size: 45px;
    padding-bottom: 10px;
}

#author {
    font-size: 25px;
    padding-bottom: 10px;
    font-style: italic;
}

#addCart {
    background-color: #346dbb;
    color: white;
    width: 220px;
    height: 75px;
    border: none;
    font-weight: 600;
    font-size: 20px;
    transition: all 0.3s ease 0s;
}

#addCart:hover {
    background-color: white;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    color: #346dbb;
    border: 2px solid #346dbb;
}

#amount_togle {
    background-color: white;
    border: 1px solid lightgray;
    color: #346dbb;
    height: 75px;
    width: 100px;
    font-size: 25px;
    text-align: center;
}

#image {
    width: 55%;
    margin-left: auto;
    margin-right: auto;
    display: block;
    padding-bottom: 25px;
}

.side {
    padding: 50px;
}

#tabdata {
    font-size: 20px;
    padding: 25px;
}

.bottom_window {
    border: 1px solid lightgray;
    width: fit-content;
}

.tab-button {
    height: 60px;
    width: 125px;
    background-color: #346dbb;
    border: none;
    font-size: 20px;
    color: white;
    transition: all 0.3s ease 0s;
}

.tab-button:hover {
    background-color: white;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    color: #346dbb;
    border: 2px solid #346dbb;
}

.details {
  padding: 25px;
  font-size: 18px;
}

@media only screen and (max-width: 950px) {
    .grid-container {
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr 1fr;
    gap: 0px 0px;
    grid-template-areas:
    "product-detail-left" "product-detail-right"
    "product-detail-bottom" "product-detail-bottom";
    padding-top: 25px;
    padding-left: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    }

    #image {
    width: 55%;
    margin-left: auto;
    margin-right: auto;
    display: block;
    padding-bottom: 25px;
}
  }

</style>

<?php
require_once('header-footer/header.php');
echo "<script>var id=$id;</script>";
?>
<body>



    <div id="product">
        
        <div class="grid-container">
            <div class="product-detail-left">
                <div class="thumbnails"></div>

                    <div class="image-block">
                        <div class="image-block__thumbs">
                            <img src="" alt=""></img>
                            <img src="" alt=""></img>
                            <img src="" alt=""></img>
                        </div>
                        <div class="image-block__main">
                        <img id="image" src="public/assets/ido-covers/Basisgrammatica foto.jpg"></img>
                        </div>
                    </div>
            </div>
            


            <div class="product-detail-right">
                <div class="side">
                    <p id="title">Basisgrammatica</p>
                    <p id="author"></p>
                    <br>
                    <h3>Price:</h3>
                    <p id="price">15,95</p>
                    <br>
                    <h3>In stock:</h3>
                    <p id="amount">4</p>
                    <br>
                    <h3>Weight:</h3>
                    <p id="weight">135</p>
                    
                    <input type="number"  id="amount_togle" name="quantity" placeholder="1" min="1" max="10">
                    <button id="addCart" href="/shopcart">Charioteto</button>
                </div>
            </div>


            <div class="product-detail-bottom">
                <div class="bottom_window">
                <div id="tabs"></div>
                


                <div class="w3-bar w3-black">
  <button class="tab-button" onclick="openCity('London')">Preview</button>
  <button class="tab-button" onclick="openCity('Paris')">Details</button>
</div>

<div id="London" class="w3-container city">
  <div id="tabdata">Dit is de preview van het boek. De samenvatting op de achterkant van het boek kan hier worden weergegeven.
  <br><br>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat erat ut purus scelerisque biben
    dum nec et lorem. In nec nisi vel augue dapibus egestas in eu ligula. Etiam in neque sollicitudin, eleifend turp
    is sed, tincidunt tellus. Etiam gravida est ac sapien ornare iaculis. Phasellus imperdiet mauris ac metus orn
    are, eget fermentum diam scelerisque. Vivamus at ex sed justo congue accumsan at ut erat. Pellentesque 
    suscipit justo felis, at porttitor sem porttitor non. Aenean vel tincidunt ex. Etiam aliquam eleifend justo, 
    sed cursus ex blandit nec.


  </div>
</div>

<div id="Paris" class="w3-container city" style="display:none">
  <div class="details">
    <h3>Height:</h3>
    <p id="height">24</p>
    <br>
    <h3>Width:</h3>
    <p id="width">16,5</p>
    <br>
    <h3>Depth:</h3>
    <p id="depth">4</p>
  </div>
</div>

            </div>
        </div>

    </div>

    <script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>

<script src="/public/scripts/general/cookie.js"></script>
<script src="/public/scripts/product-details/details.js"></script>
</body>

<?php
require_once('header-footer/footer.php');
?>

</html>