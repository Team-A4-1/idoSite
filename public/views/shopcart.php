<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Blen Michil">
    <link rel="stylesheet" href="public/css/shopcart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Charioteto</title>
</head>


<body>
    <?php require_once('header-footer/header.php');?>


    <div class="wrapper">


        <div class="main">
            <div class="main-content">

                <section class="cart">
                    <form class="cart__content">
                        <h2 class="cart__title">Charioteto</h2>
                        <div class="cart__list">
                            <div class="cart__left">
                                <img class="cart__img" src="/public/assets/ido-covers/Kandido.jpg" alt="Book-cover">
                            </div>
                            <div class="cart__center">
                                <p>Kandido</p>

                                <label for="cars">Selektar quanto:</label>
                                <select name="amount" id="amount">
                                    <option value="volvo">1</option>
                                    <option value="saab">2</option>
                                    <option value="opel">3</option>
                                    <option value="audi">4</option>
                                </select>
                                <p>Charjar: 100gr</p>
                            </div>
                            <div class="cart__right">
                                <p><i class="fas fa-trash-alt"></i>$ 11.40</p>
                            </div>
                        </div>
                        <hr>
                        <div class="cart__list">
                            <div class="cart__left">
                                <img class="cart__img" src="/public/assets/ido-covers/Kafka noveleti.jpg" alt="Book-cover">
                            </div>
                            <div class="cart__center">
                                <p>Kafka noveleti</p>

                                <label for="cars">Selektar quanto:</label>
                                <select name="amount" id="amount">
                                    <option value="volvo">1</option>
                                    <option value="saab">2</option>
                                    <option value="opel">3</option>
                                    <option value="audi">4</option>
                                </select>
                                <p>Charjar: 100gr</p>
                            </div>
                            <div class="cart__right">
                                <p><i class="fas fa-trash-alt"></i>$ 11.40</p>
                            </div>
                        </div>
                        <hr>
                        <div class="cart__total">
                            <div class="cart__left">
                                <h2>Tote:</h2>
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
                        <h2 class="summary__title">Titularo</h2>
                        <div class="summary__list">
                            <div class="summary__left">Subtote: 4 artikli</div>
                            <div class="summary__right">&euro; 20.30</div>
                        </div>

                        <p class="summary_weight">Tota pezo: 538 grami</p>

                        <div class="summary__list">
                            <div class="summary__left">Afranko</div>
                            <div class="summary__right">&euro; 2.30</div>
                        </div>

                        <div class="summary__total">
                            <div class="summary__left">
                                <h2>Tote:</h2>
                            </div>
                            <div class="summary__right">
                                <h2 class="totaltax">&euro;13.50</h2>
                            </div>
                        </div>
                        <hr>

                        <div class="summary__bottom">
                            <button class="summary__btn" type="submit"><a href="/payment">Durez</a></button>
                            <p><a href="/home">Abrogez pago</a></p>
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