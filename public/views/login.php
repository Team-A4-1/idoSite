<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Latricha Seym">
    <link rel="stylesheet" href="public\css\info.css">
    <script src="https://kit.fontawesome.com/8ee2ef1015.js" crossorigin="anonymous"></script>
    <title>Quale funcionas</title>
</head>

<?php
require_once('header-footer/header.php');
?>

<body>
    <section>
    
                   

                        <form class="modal-content animate" action="private/login/login.php" method="post">
                    <div class="imgcontainer">
                        
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
            
        
    </section>
</body>

<?php
require_once('header-footer/footer.php');
?>