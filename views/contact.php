<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Kevin Kranenburg">
    <link rel="stylesheet" href="../css/contact.css">
    <script src="https://kit.fontawesome.com/8ee2ef1015.js" crossorigin="anonymous"></script>
    <title>Contact</title>
</head>

<?php require_once('header-footer/header.php'); ?>

<body>

<div class="grid-container">
  <div class="contact-page-left">
      <div class="contact-info">
    <p class="title-contact">GET IN TOUCH</p>
    <br>
    <p class="contact-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
    Aenean commodo ligula eget dolor. Aenean massa. 
    Cum sociis natoque penatibus et magnis dis parturient montes, 
    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, 
    pretium quis, sem. Nulla consequat massa quis enim.</p>
    <i class="contact-icon fas fa-envelope"></i>
    <br>
    <i class="contact-icon fab fa-facebook-square"></i>
</div>

  </div>
  <div class="contact-page-right">

    <div class="contact-form-box">
        <p class="title-contact">SAY SOMETHING</p>
        <input class="contact-input" type="text" placeholder="Your Name..."><br>
        <input class="contact-input" type="text" placeholder="Your Email..."><br>
        <p class="contact-text">Your Message</p>
        <textarea class="contact-textarea" type="text" rows="8" cols="50" placeholder="..."></textarea><br>
        <input class="contact-btn" type="button" value="SEND">
    </div>
  </div>
</div>
    

<div class="contact-page-bottom">
    <div class="bottom-info-box">
    <div class="logo-footer-circle">
        <img class="logo-footer" src="../header-footer/assets/logo-middle.png" alt="logo">
    </div>
    <div class="footer-left-text">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
        Aenean commodo ligula eget dolor.
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
        Aenean commodo ligula eget dolor.</p>
    </div>

</div>
<div class="bottom-menu">
        <ul>
            <li><a href="/">HOME</a></li>
            <li><a href="/books">SHOP</a></li>
            <li><a href="/about">ABOUT US</a></li>
            <li><a href="/info">HOW DOES IT WORK</a></li>
            <li><a href="/contact">CONTACT</a></li>
        </ul>
    </div>
</div>

</body>
</html>