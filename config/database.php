<?php
// used to connect to the database
$host = "localhost";
<<<<<<< HEAD
$db_name = "complaint_system";
$username = "complaint_system";
$password = "FTueUImDoAAW-Cf9";
=======
$db_name = "group";
$username = "cheekang";
$password = "a442.IkkH@dNRf2B";
>>>>>>> 416f0c6f7b90bae2fa252c2792268b2babf8405d
  
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // show error
    // echo "Connected successfully"; 
}  
// show error
catch(PDOException $exception){
    echo "Connection error: ".$exception->getMessage();
}
?>