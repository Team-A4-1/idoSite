<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Kevin Kranenburg">
    <link rel="stylesheet" href="public\css\contact.css">
    <script src="https://kit.fontawesome.com/8ee2ef1015.js" crossorigin="anonymous"></script>
    <title>Kontakto</title>
</head>

<?php require_once('header-footer/header.php'); ?>

<body>

<div class="grid-container">
  <div class="contact-page-left">
      <div class="contact-info">
    <p class="title-contact">KONTAKTEZ NI</p>
    <br>
    <p class="contact-text">Se vu havas questioni, remarki o sugesti, kontaktez ni per e-posto, vizitez ni che Facebook o simple plenigez la kontakto-formulario.</p>
    <div class="icon-box">
        <a href="mailto: Ido.info@hetnet.nl" class="contact-icon fas fa-envelope"></a>
        <p class="icon-text">Ido.info@hetnet.nl</p>
    </div>
    <br>
    <div class="icon-box">
        <a href="https://www.facebook.com/Librerio-Tia-Libro-110014134251724" class="contact-icon fab fa-facebook-square"></a>
        <p class="icon-text">Librerio Tia Libro</p>
    </div>
</div>

  </div>
  <div class="contact-page-right">

    <div class="contact-form-box">
        <p class="title-contact">DICEZ ULO</p>
        <input class="contact-input" type="text" placeholder="Vua nomo..."><br>
        <input class="contact-input" type="text" placeholder="Vua e-posto..."><br>
        <p class="contact-text-2">Vua mesajo</p>
        <textarea class="contact-textarea" type="text" rows="8" cols="50" placeholder="..."></textarea><br>
        <div class="contact-btn-box">
            <input class="contact-btn" type="button" value="Sendez">
        </div>
    </div>
  </div>
</div>
    
<script src="public\scripts\contact\mail.js"></script>
<div class="contact-page-bottom">
    <div class="bottom-info-box">
    <div class="logo-footer-circle">
        <img class="logo-footer" src="public\assets\header-footer\logo-middle.png" alt="logo">
    </div>
    <div class="footer-left-text">
        <p>Vendeyo interretala di Ido-libri e produkturi. Kontaktez ni por plusa informi.</p>
    </div>

</div>
<div class="bottom-menu">
    <ul>
        <li><a href="/">Hemo</a></li>
        <li><a href="/books">Butiko</a></li>
        <li><a href="/about">Pri ni</a></li>
        <li><a href="/info">Quale funcionas</a></li>
        <li><a href="/contact">Kontakto</a></li>
    </ul>

        <div class="copy-bottom">
            <p>&copy; 2021 Autor-yuri Librerio Tia Libro</p>
        </div>
    </div>
</div>

</body>
</html>