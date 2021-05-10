<?php
  class Login{
   private function getUser($username,$password): int{
        $ini = parse_ini_file('../settings.ini');
        $servername =    $ini['server_name'];
        $db_username   =    $ini['db_user'];  
        $db_password   =    $ini['db_password'];
        $dbname     =    $ini['db_name']; 

        

        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

       $stmt = $conn->prepare("SELECT users.id 
          from users 
          Inner JOIN usernames on users.username=usernames.id 
          Inner JOIN passwords on users.username=passwords.id
          WHERE usernames.username = ? AND passwords.password =?
        ");

        $stmt->bind_param("ss", $username, $password);


        $stmt->execute();
        $result = $stmt->get_result()->fetch_object();
        return $result->id;
        $stmt->close();
        $conn->close();
      }

      public function sesionStart($username,$password){
        session_start();
        $_SESSION['userid'] = $this->getUser($username,$password);
      }
}

 $Login = new Login;
 $Login->sesionStart("John","Pass123");
 //delete this echo
  echo $_SESSION['userid'];
?>