<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Blen Michil">
    <link rel="stylesheet" href="public/css/payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Payment</title>
</head>


<body>
<?php require_once('header-footer/header.php');?>


    <div class="wrapper">
    

        <div class="main">
          <div class="main-content">


            <section class="payment-details">
                <h1 class="payment-details__title">Payment method</h1>

                <form class="payment-details__form">
                        <h2 class="payment__title">Payment Details</h2>
                    <div class="payment__content">

                        <div class="payment__one"> 
                            <div class="payment__fn">
                                <label for="fname">First name:</label>
                                <input type="text" id="fname" name="fname">
                            </div>

                            <div class="payment__ln">
                                <label for="lname">Last name:</label>
                                <input type="text" id="lname" name="lname"><br><br>
                            </div>
                        </div>

                        <div class="payment__two"> 
                            <div class="payment__adress">
                                <label for="fname">Adress:</label>
                                <input type="text" id="adress" name="adress">
                            </div>

                            <div class="payment__postcode">
                                <label for="lname">Postcode:</label>
                                <input type="text" id="postcode" name="postcode"><br><br>
                            </div>
                        </div>

                        <div class="payment__three"> 
                            <div class="payment__city">
                                <label for="fname">City:</label>
                                <input type="text" id="city" name="city">
                            </div>

                            <div class="payment__nummer">
                                <label for="lname">Nummer:</label>
                                <input type="text" id="nummer" name="nummer"><br><br>
                            </div>
                        </div>

                        <div class="payment__four"> 
                            <div class="payment__country">
                                <label for="fname">Country:</label>
                                <input type="text" id="country" name="country">
                            </div>
                        </div>

                        <div class="payment__methode"> 
                            <h3 class="h3-pay">Avalaible Payment Methodes</h3>
                            <div class="payment__choice">
                                <button type="submit">Paypal</button>
                                <button type="submit">Online betalen</button>
                                <button type="submit">Credit Card</button>
                            </div>
                        </div>

                    </div>
                </form>

            </section>

            <section class="order-summary">
                <div class="order__wrapper">
                <div class="order__top">top</div>
                    <div class="order__content">
                        <div class="order__title"><h2>Order Summary</h2></div>
                        <div class="order__nr"><p>Order reference: 129291120</p></div>
                        
                        <div class="order__list">
                            <div class="order__left"><img class="order__img" src="/public/assets/cover.jpg" alt="Book-cover"></div>
                            <div class="order__center">
                                <p>IDO What is IT?</p>
                                <p>X 1</p>
                                <p>Weight: 100gr</p>
                            </div>
                            <div class="order__right">
                                <p>$ 11.40</p>
                            </div>
                       
                        </div>
                        <div class="order__extra">
                            <div class="order__left">
                                <p>Shipping cost</p>
                                <p>Taxes</p>
                                <p>Total weight:</p>
                            </div>
                            <div class="order__right">
                                <p>Free</p>
                                <p>$2.50</p>
                                <p>1300gr</p>
                            </div>
                        </div>

                        <div class="order__total">
                            <div class="order__left">
                                <h2>Total:</h2>
                            </div>
                            <div class="order__right">
                                <h2>$13.50</h2>
                            </div>
                        </div>
                        <div class="order__bottom">
                            <button class="order__btn" type="submit">Continue</button>
                            <p>Cancel payment</p>
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