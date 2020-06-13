<?php
include 'db.php';

session_start();

mysqli_query($con, "UPDATE user SET status = '0' WHERE email = '$_SESSION[email]' ");

unset($_SESSION['email']);
session_destroy();
header( "refresh:0;url=login.php?logout=Deconnection reussi a bientot!" ); 


?>