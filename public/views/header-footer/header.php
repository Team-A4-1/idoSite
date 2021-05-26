<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Kevin Kranenburg">
    <link rel="stylesheet" href="..\css\header-footer\header.css">
    <script src="https://kit.fontawesome.com/8ee2ef1015.js" crossorigin="anonymous"></script>
</head>
<body>

    <header class="header">
        <nav class="navbar">
            <a href="/">
            <img class="header-logo" src="..\assets\header-footer\logo-sideways.png" alt="ido-logo">
            </a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="/books" class="nav-link">Shop</a>
                </li>
                <li class="nav-item">
                    <a href="/info" class="nav-link">How does it work</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link">About us</a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link">Contact</a>
                </li>
                <ul>
                <li>
                    <i class="icon-header fas fa-shopping-cart"></i>

                    <button class="header-button" onclick="document.getElementById('id01').style.display='block'"><i class="icon-header fas fa-user"></i></button>

                    <div id="id01" class="modal">

                        <form class="modal-content animate" action="/action_page.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <button class="loginbtn" type="submit">Login</button>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    </div>
                    </form>
                    </div>
                </li>
            </ul>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
</header>

<script src="..\scripts\header-footer\header.js"></script>
<script src="..\scripts\header-footer\header-login.js"></script>

</body>
</html>