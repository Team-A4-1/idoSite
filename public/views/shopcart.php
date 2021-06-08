<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Blen Michil">
    <link rel="stylesheet" href="public/css/shopcart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Shoppingcart</title>
</head>


<body>
    <?php require_once('header-footer/header.php');?>


    <div class="wrapper">


        <div class="main">
            <div class="main-content">

                <section class="cart">
                    <form class="cart__content">
                        <h2 class="cart__title">Shopping Cart</h2>
                        <div class='list'>
                        
                
                        </div>
                        <div class="cart__total">
                            <div class="cart__left">
                                <h2>Total:</h2>
                            </div>
                            <div class="cart__right">
                                <h2 class="totaltax">&euro;13.50</h2>
                            </div>
                        </div>

                    </form>
                </section>


                <section class="summary">
                    <div class="summary__width">
                    <div class="summary__content">
                        <h2 class="summary__title">Shopping summary</h2>
                        <div class="summary__list">
                            <div class="summary__left">Subtotal: 4 items</div>
                            <div class="summary__right">&euro; 20.30</div>
                        </div>

                        <p class="summary_weight">Total weight: 538 Grams</p>

                        <div class="summary__list">
                            <div class="summary__left">Delivery Fee</div>
                            <div class="summary__right">&euro; 2.30</div>
                        </div>

                        <div class="summary__total">
                            <div class="summary__left">
                                <h2>Total:</h2>
                            </div>
                            <div class="summary__right">
                                <h2 class="totaltax">&euro;13.50</h2>
                            </div>
                        </div>
                        <hr>

                        <div class="summary__bottom">
                            <button class="summary__btn" type="submit"><a href="/payment">Continue</a></button>
                            <p><a href="/home">Cancel payment</a></p>
                        </div>

                    </div>
                    </div>
                </section>



            </div>
            <div>
        

            </div>
      

            <?php require_once('header-footer/footer.php');?>
</body>

</html>
<script src="public/scripts/general/cookie.js"></script>

<script src="public/scripts/shoppingcart/cart.js"></script>