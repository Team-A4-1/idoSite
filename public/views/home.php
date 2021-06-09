<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Blen Michil">
    <link rel="stylesheet" href="public/css/home.css">
    <link rel="stylesheet" href="public/css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hemo</title>
</head>


<body>
<?php
require_once('header-footer/header.php');
?>
    <div class="wrapper">
        <div class="sidebar">
            <ul class="sidebar__list">
                <li class="sidebar__item active"><a href="/">Hemo</a></li>
                <li class="sidebar__item"><a href="/books">Butiko </a></li>
                <li class="sidebar__item"><a href="/info">Quale funcionas</a></li>
                <li class="sidebar__item"><a href="/about">Pri ni</a></li>
                <li class="sidebar__item"><a href="/contact">Kontakto</a></li>
            </ul>
        </div>
        <div class="main">
            <section class="banner">
                <div class="banner__wrapper">
                    <div class="banner__content">
                        <ul class="banner__list">
                            <li class="banner__item">
                                <div class="banner__title">
                                    <h2 style="font-weight: 400;">Collection Sale</h2>
                                </div>
                                <div class="banner__text">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit.
                                    Sed
                                    convallis, justo sit.</div>
                                <div class="banner__btn"><a href="/books">Buy now!</a></div>
                            </li>
                            <li class="banner__item banner__item--right">

                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="best-sellers">
                <div class="best-sellers__wrapper">
                    <div class="best-sellers__content">
                        <div class="best-sellers__top">
                            <h2>Best-sellers</h2>
                            <p>Zie al onze meest populaire boeken</p>
                        </div>
                    </div>
                    <div class="best-sellers__bottom">
                        <ul class="best-sellers__list">
                            <li class="best-sellers__item">
                                <div class="best-sellers__card">
                                    <div class="best-sellers__card-content">
                                        <div class="best-sellers__card-img">
                                            <img src="public/assets/ido-covers/Kandido.jpg" alt="Book-cover">
                                        </div>
                                        <div class="best-sellers__title">Kandido</div>
                                        <div class="best-sellers__stars"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="best-sellers__price">&euro;12,40,-</div>
                                        <button type="submit" class="best-sellers__btn">ADD TO CARD></button>
                                    </div>
                                </div>
                            </li>
                            <li class="best-sellers__item">
                                <div class="best-sellers__card">
                                    <div class="best-sellers__card-content">
                                        <div class="best-sellers__card-img">
                                            <img src="public/assets/ido-covers/Kafka noveleti.jpg" alt="Book-cover">
                                        </div>
                                        <div class="best-sellers__title">Kafka noveleti</div>
                                        <div class="best-sellers__stars"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="best-sellers__price">&euro;12,40,-</div>
                                        <button type="submit" class="best-sellers__btn">ADD TO CARD</button>
                                    </div>
                                </div>
                            </li>
                            <li class="best-sellers__item">
                                <div class="best-sellers__card">
                                    <div class="best-sellers__card-content">
                                        <div class="best-sellers__card-img">
                                            <img src="public/assets/ido-covers/Modern Ido poeti foto.jpg" alt="Book-cover">
                                        </div>
                                        <div class="best-sellers__title">Modern Ido poeti</div>
                                        <div class="best-sellers__stars"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="best-sellers__price">&euro;12,40,-</div>
                                        <button type="submit" class="best-sellers__btn">ADD TO CARD</button>
                                    </div>
                                </div>
                            </li>
                            <li class="best-sellers__item">
                                <div class="best-sellers__card">
                                    <div class="best-sellers__card-content">
                                        <div class="best-sellers__card-img">
                                            <img src="public/assets/ido-covers/Rimbaud foto.jpg" alt="Book-cover">
                                        </div>
                                        <div class="best-sellers__title">Rimbaud</div>
                                        <div class="best-sellers__stars"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="best-sellers__price">&euro;12,40,-</div>
                                        <button type="submit" class="best-sellers__btn">ADD TO CARD</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="advertisment">
                <div class="advertisment__wrapper">
                    <div class="advertisment__content">
                        <ul class="advertisment__list">
                            <li class="advertisment__item advertisment__item--left">
                                <div class="advertisment__content">
                                    <div class="advertisment__text">Holiday season sale</div>
                                    <div class="advertisment__title">
                                        <h2>Off Up To <br> 45% <br> For
                                            All Books </h2>
                                    </div>

                                    <div class="advertisment__btn"><a href="/books">Buy now!</a></div>
                                </div>
                            </li>
                            <li class="advertisment__item advertisment__item--right">
                                <div class="advertisment__content">
                                    <ul class="advertisment__list">

                                        <li class="advertisment__blok advertisment__blok--blue">
                                            <div class="advertisment__content">
                                                <h2 class="advertisment__blok--title">Want to <br>
                                                    learn more <br>
                                                    about <br>
                                                    IDO</h2>
                                                <button type="submit" class="advertisment__blok--btn"><a href="/about">Click
                                                    here</a></button>
                                            </div>
                                        </li>
                                        <li class="advertisment__blok">
                                            <div class="advertisment__content advertisment__content--merch">
                                                <h2 class="advertisment__blok--title">MERCH!</h2>
                                                <button type="submit" class="advertisment__blok--btn"><a href="/books">See more</a></button>
                                            </div>
                                        </li>
                                        <li class="advertisment__blok ">
                                            <div class="advertisment__content  advertisment__content--keep">
                                                <h2 class="advertisment__blok--title">Keep <br>
                                                    reading</h2>
                                                <p class="advertisment__blok--text">Because by reading <br>
                                                    more you will know <br> more</p>
                                            </div>
                                        </li>
                                        <li class="advertisment__blok advertisment__blok--blue">
                                            <div class="advertisment__content  advertisment__content--70">
                                                <p class="advertisment__blok--up">new books</p>
                                                <h2 class="advertisment__blok--title">70% off</h2>
                                                <button type="submit" class="advertisment__blok--btn"><a href="/books">See more</a></button>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="random">
                <div class="random__wrapper">
                    <div class="random__content">
                        <div class="random__top">
                            <h2>Random</h2>
                            <p>Hier is een selectie van een paar boeken.</p>
                        </div>
                    </div>
                    <div class="random__bottom">
                        <ul class="random__list">
                            <li class="random__item">
                                <div class="random__card">
                                    <div class="random__card-content">
                                        <div class="random__card-img">
                                            <img src="public/assets/ido-covers/Revoluciono ed altra esayi.jpg" alt="Book-cover">
                                        </div>
                                        <div class="random__title">Revoluciono altra</div>
                                        <div class="random__stars"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="random__price">&euro;12,40,-</div>
                                        <button type="submit" class="random__btn">ADD TO CARD</button>
                                    </div>
                                </div>
                            </li>
                            <li class="random__item">
                                <div class="random__card">
                                    <div class="random__card-content">
                                        <div class="random__card-img">
                                            <img src="public/assets/ido-covers/Ngozi Adichie reklamo.jpg" alt="Book-cover">
                                        </div>
                                        <div class="random__title">Ngozi Adichie</div>
                                        <div class="random__stars"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="random__price">&euro;12,40,-</div>
                                        <button type="submit" class="random__btn">ADD TO CARD</button>
                                    </div>
                                </div>
                            </li>
                            <li class="random__item">
                                <div class="random__card">
                                    <div class="random__card-content">
                                        <div class="random__card-img">
                                            <img src="public/assets/ido-covers/La aboyanta lando.jpg" alt="Book-cover">
                                        </div>
                                        <div class="random__title">La aboyanta lando</div>
                                        <div class="random__stars"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="random__price">&euro;12,40,-</div>
                                        <button type="submit" class="random__btn">ADD TO CARD</button>
                                    </div>
                                </div>
                            </li>
                            <li class="random__item">
                                <div class="random__card">
                                    <div class="random__card-content">
                                        <div class="random__card-img">
                                            <img src="public/assets/ido-covers/Dum epoko di kontagio reklamo plus texto.jpg" alt="Book-cover">
                                        </div>
                                        <div class="random__title">Epoko di kontagio</div>
                                        <div class="random__stars"><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span></div>
                                        <div class="random__price">&euro;12,40,-</div>
                                        <button type="submit" class="random__btn">ADD TO CARD</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </section>
        <div>

    </div>

</body>
<?php
require_once('header-footer/footer.php');
?>

<script src="public/scripts/home/getProductsHome.js"></script>


</html>