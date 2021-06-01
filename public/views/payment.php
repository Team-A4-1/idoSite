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

            <section class="payment-details">
                <h1 class="payment-details__title">Payment method</h1>

                <form class="payment-details__form">
                        <h2 class="payment__title">Payment Details</h2>
                    <div class="payment__content">

                        <div class="payment__fn">
                            <label for="fname">First name:</label>
                            <input type="text" id="fname" name="fname">
                        </div>

                        <div class="payment__ln">
                            <label for="lname">Last name:</label>
                            <input type="text" id="lname" name="lname"><br><br>
                        </div>

                    </div>
                </form>

            </section>

            <section class="order-summary">
                Test
            </section>

        <div>


    </div>


<?php require_once('header-footer/footer.php');?>
</body>


</html>