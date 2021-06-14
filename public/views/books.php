<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Blen Michil">
    <link rel="stylesheet" href="public/css/books.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Butiko</title>
</head>


<body>
<?php require_once('header-footer/header.php'); ?>
    


<div class="wrapper">

        <div class="main">
            <h1 class="main__title">Butiko</h1>
            <section class="books">
                <ul class="books__list">

                    <li class="books__item">
                        <div class="books__content">
                            <a href="/productdetails"><img class="books__img" src="/public/assets/cover.jpg" alt="Book-cover"></a>
                            <div class="books__title"><h2>Girl in red</h2></div>
                            <div class="books__author">Sam Draak</div>
                            <div class="books__price">&euro;16.20</div>
                            <a type="submit" href="/shoppingcart" class="books__btn">
                                ADD TO CARD
                            </a>
                        </div>
                    </li>

                    <li class="books__item">
                        <div class="books__content">
                            <a href="/productdetails"><img class="books__img" src="/public/assets/ido-covers/Basisgrammatica foto.jpg" alt="Book-cover"></a>
                            <div class="books__title"><h2>Basisgrammatica</h2></div>
                            <div class="books__author">Jhon Blue</div>
                            <div class="books__price">&euro;34.20</div>
                            <a type="submit" href="/shoppingcart" class="books__btn">
                                ADD TO CARD
                            </a>
                        </div>
                    </li>

                    <li class="books__item">
                        <div class="books__content">
                        <a href="/productdetails"><img class="books__img" src="/public/assets/ido-covers/Dum epoko di kontagio reklamo plus texto.jpg" alt="Book-cover"></a>
                            <div class="books__title"><h2>epoko di kontagio</h2></div>
                            <div class="books__author">Willem Groen</div>
                            <div class="books__price">&euro;21.90</div>
                            <a type="submit" href="/shoppingcart" class="books__btn">
                                ADD TO CARD
                            </a>
                        </div>
                    </li>

                    <li class="books__item">
                        <div class="books__content">
                        <a href="/productdetails"><img class="books__img" src="/public/assets/ido-covers/Dum epoko di kontagio.jpg" alt="Book-cover"></a>
                            <div class="books__title"><h2>epoko di kontagio</h2></div>
                            <div class="books__author">karin Bakker</div>
                            <div class="books__price">&euro;18.99</div>
                            <a type="submit" href="/shoppingcart" class="books__btn">
                                ADD TO CARD
                            </a>
                        </div>
                    </li>

                    <!-- Tweede line boeken -->

                    <li class="books__item">
                        <div class="books__content">
                        <a href="/productdetails"><img class="books__img" src="/public/assets/ido-covers/Kafka noveleti.jpg" alt="Book-cover"></a>
                            <div class="books__title"><h2>Kafka noveleti</h2></div>
                            <div class="books__author">kevin Sneek</div>
                            <div class="books__price">&euro;6.20</div>
                            <a type="submit" href="/shoppingcart" class="books__btn">
                                ADD TO CARD
                            </a>
                        </div>
                    </li>

                    <li class="books__item">
                        <div class="books__content">
                        <a href="/productdetails"><img class="books__img" src="/public/assets/ido-covers/Kandido.jpg" alt="Book-cover"></a>
                            <div class="books__title"><h2>Kandido</h2></div>
                            <div class="books__author">Sanal Klal</div>
                            <div class="books__price">&euro;12.20</div>
                            <a type="submit" href="/shoppingcart" class="books__btn">
                                ADD TO CARD
                            </a>
                        </div>
                    </li>

                    <li class="books__item">
                        <div class="books__content">
                        <a href="/productdetails"><img class="books__img" src="/public/assets/ido-covers/Kurez kurez ocidero.jpg" alt="Book-cover"></a>
                            <div class="books__title"><h2>Kurez ocidero</h2></div>
                            <div class="books__author">Dirk Katon</div>
                            <div class="books__price">&euro;11.20</div>
                            <a type="submit" href="/shoppingcart" class="books__btn">
                                ADD TO CARD
                            </a>
                        </div>
                    </li>

                    <li class="books__item">
                        <div class="books__content">
                        <a href="/productdetails"><img class="books__img" src="/public/assets/ido-covers/La aboyanta lando.jpg" alt="Book-cover"></a>
                            <div class="books__title"><h2>La aboyanta lando</h2></div>
                            <div class="books__author">Kim Zonlaag</div>
                            <div class="books__price">&euro;12.00</div>
                            <a type="submit" href="/shoppingcart" class="books__btn">
                                ADD TO CARD
                            </a>
                        </div>
                    </li>

                </ul>
            </section>
        <div>

</div>



<?php require_once('header-footer/footer.php'); ?>
</body>
<!-- <script src="public/scripts/products/products.js"></script> -->

</html>