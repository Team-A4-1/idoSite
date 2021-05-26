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
    <title>Home</title>
</head>
<?php
require_once('header-footer/header.php');
?>

<body>
    <div class="wrapper">
        <section class="banner">
            <div class="banner__wrapper">
                <div class="banner__content">
                    <ul class="banner__list">
                        <li class="banner__item">
                            <div class="banner__title">
                                <h2 style="font-weight: 400;">Collection Sale</h2>
                            </div>
                            <div class="banner__text">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit. Sed
                                convallis, justo sit.</div>
                            <div class="banner__btn"><a href="#">Buy now!</a></div>
                        </li>
                        <li class="banner__item">

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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac Leo sit ame.</p>
                    </div>
                </div>
                <div class="best-sellers__bottom">
                    <ul class="best-sellers__list">
                        <li class="best-sellers__item">
                            <div class="best-sellers__card">
                                <div class="best-sellers__card-content">
                                    <div class="best-sellers__card-img">
                                        <img src="/public/assets/cover.jpg" alt="Book-cover">
                                    </div>
                                    <div class="best-sellers__title">Test boek 5</div>
                                    <div class="best-sellers__stars"><span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span></div>
                                    <div class="best-sellers__price">$12,40,-</div>
                                    <button type="submit" class="best-sellers__btn">ADD TO CARD</button>
                                </div>
                            </div>
                        </li>
                        <li class="best-sellers__item">
                            <div class="best-sellers__card">
                                <div class="best-sellers__card-content">
                                    <div class="best-sellers__card-img">
                                        <img src="/public/assets/cover.jpg" alt="Book-cover">
                                    </div>
                                    <div class="best-sellers__title">Test boek 5</div>
                                    <div class="best-sellers__stars"><span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span></div>
                                    <div class="best-sellers__price">$12,40,-</div>
                                    <button type="submit" class="best-sellers__btn">ADD TO CARD</button>
                                </div>
                            </div>
                        </li>
                        <li class="best-sellers__item">
                            <div class="best-sellers__card">
                                <div class="best-sellers__card-content">
                                    <div class="best-sellers__card-img">
                                        <img src="/public/assets/cover.jpg" alt="Book-cover">
                                    </div>
                                    <div class="best-sellers__title">Test boek 5</div>
                                    <div class="best-sellers__stars"><span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span></div>
                                    <div class="best-sellers__price">$12,40,-</div>
                                    <button type="submit" class="best-sellers__btn">ADD TO CARD</button>
                                </div>
                            </div>
                        </li>
                        <li class="best-sellers__item">
                            <div class="best-sellers__card">
                                <div class="best-sellers__card-content">
                                    <div class="best-sellers__card-img">
                                        <img src="/public/assets/cover.jpg" alt="Book-cover">
                                    </div>
                                    <div class="best-sellers__title">Test boek 5</div>
                                    <div class="best-sellers__stars"><span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span></div>
                                    <div class="best-sellers__price">$12,40,-</div>
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
                            <div class="advertisment__title">
                                <h2>Collection Sale</h2>
                            </div>
                            <div class="advertisment__text">Lorem ipsum dolor sit amet, consectetur <br> adipiscing
                                elit. Sed convallis, justo sit.</div>
                            <div class="advertisment__btn"><a href="#">Buy now!</a></div>
                        </li>
                        <li class="advertisment__item">

                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="banner">random-books</section>

        <!-- <div class="wrap">
        <div class="grid-container">
            <div class="middle-box">
                <div class="box-header">Our Story</div>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa. 
                Cum sociis natoque penatibus et magnis dis parturient montes, 
                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, 
                pretium quis, sem. Nulla consequat massa quis enim.</p>
            </div>
            <div class="left-box">
                <div class="box-header">About Us</div>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa. 
                Cum sociis natoque penatibus et magnis dis parturient montes, 
                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, 
                pretium quis, sem. Nulla consequat massa quis enim.</p>
            </div>
            <div class="right-box">
                <div class="box-header">History</div>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa. 
                Cum sociis natoque penatibus et magnis dis parturient montes, 
                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, 
                pretium quis, sem. Nulla consequat massa quis enim.</p>
            </div>
        </div>
    </div> -->

    </div>
</body>
<?php
require_once('header-footer/footer.php');
?>

</html>