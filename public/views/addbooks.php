<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Latricha Seym">
    <link rel="stylesheet" href="public\css\addbooks.css">
    <title>CMS - Add books</title>
</head>



<body>
    <?php require_once('header-footer/header.php'); ?>

    

    <div class="wrapper">
    <aside class="sidebar">
        <ul>
            <li class="sidebar__item active"><a href="#">Home</a></li>
            <li class="sidebar__item"><a href="#">Users</a></li>
            <li class="sidebar__item"><a href="#">Products</a></li>
        </ul>
    </aside>
   
    <main>
        <div class="container">
            
            <section class="section-bread">
                <ul class="breadcrumbs">
                    <li><a href="#">CMS</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Product change</a></li>
                </ul>
                <div></div>
            </section>
            

            <section>
                <div class="flex-container">
                    <div class="image-block">
                        <div class="image-block__thumbs">
                            <img src="" alt=""></img>
                            <img src="" alt=""></img>
                            <img src="" alt=""></img>
                        </div>
                        <div class="image-block__main">
                            <img src="" alt=""></img>
                            <span class="image-block__placeholder">Drag JPEG, PNG, SVG here</span>
                        </div>
                    </div>

                    <div class="product-order">

                        <div class="product-order__title">
                            <h2>Revoluciono</h2>
                            <a class="button" href="#">Change</a> 
                        </div>
                        <div class="product-order__author">
                            <h3>Jack London</h3>
                            <a class="button" href="#">Change</a> 
                        </div>
                        <div class="product-order__price">
                            <h3>$17,20</h3>
                            <a class="button" href="#">Change</a> 
                        </div>
                        <div class="product-order__status">
                            <h3>Op voorraad: <span>54</span></h3>
                            <a href="#">Share</a>
                            <a class="button" href="#">Change</a> 
                        </div>
                        <div class="product-order__weight">
                            <h3>Weight: <span>123gr</span></h3>
                            <a class="button" href="#">Change</a> 
                        </div>

                        <a class="edit-btn" href="#">Save</a>
                        <a class="edit-btn" href="#">Preview</a>

                    </div>

                </div>
    
            </section>

            <section>
        
                <div class="description-box">
                    <div class="preview-tab">Preview</div>
                    <div class="details-tab">Details</div>
                    <form method="post" action="" class="description-box__text">
                        <textarea placeholder="Type here..." ></textarea>
                    </form>
                </div>
        
            </section>
        
        <div>

    </main>
    
    </div>
</body>

<?php require_once('header-footer/footer.php'); ?>

</html>