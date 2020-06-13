<?php
 $con = mysqli_connect("localhost", "root", "root", "chat");

if(isset($_POST['submit']))
{
	$name = $_POST['userName'];
	$msg = $_POST['userMsg'];
	$query = "INSERT INTO chat SET name= '$name', msg='$msg'";
	
	$run = mysqli_query($con, $query);

}



?>