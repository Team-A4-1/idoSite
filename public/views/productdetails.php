
<?php
require_once('header-footer/header.php');
echo "<script>var id= $id;</script>";
?>
<body>
<div id="product">
<div class="thumbnails"></div>
<img id="image"></img>
<h1 id="title"></h1>
<p id="author"></p>
<div id=button></div>
</div>


<script src="/public/scripts/general/getProductgeneral.js"></script>
<script src="/public/scripts/product-details/details.js"></script>
</body>
<?php
require_once('header-footer/footer.php');


?>
