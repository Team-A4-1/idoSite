<?php
$ini = parse_ini_file('../settings.ini');
echo $ini['db_name'];     // mydatabase
echo $ini['db_user'];     // myuser
echo $ini['db_password']; // mypassword
?>
test