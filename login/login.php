<?php
$ini = parse_ini_file('../settings.ini');
$servername =    $ini['server_name'];
$username   =    $ini['db_user'];  
$password   =    $ini['db_password'];
$dbname     =    $ini['db_name']; 



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $stmt = $conn->prepare("SELECT * FROM `usernames`");

//   $stmt->bind_param("ss", $firstname, $lastname);


  $stmt->execute();
  $result = $stmt->fetch();

  print_r( $result);

  $stmt->close();
  $conn->close();

?>
test