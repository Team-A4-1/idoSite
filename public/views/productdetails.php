
<?php
require_once('header-footer/header.php');
echo "<script>var id= $id;</script>";
?>
<body>
<div id="product">
<div class="thumbnails"></div>
<img id="image"></img>
</div>
<div class="side">
<h1 id="title"></h1>
<p id="author"></p>
<div id="amount_togle"></div>
<div id="addCart">add to cart</div>
<div id="addWishlist">add to wishlist</div>
</div>
<div class="botom_window">
<div id="tabs"></div>
<div id="tabdata"></div>
</div>

<script src="/public/scripts/product-details/details.js"></script>
</body>
<?php
require_once('header-footer/footer.php');


?>
