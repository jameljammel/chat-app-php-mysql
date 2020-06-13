<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<link rel="stylesheet" href="Application/MAMP/htdocs/chat_2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		hr{
			height: 2px;
		}
	</style>
</head>
<body style="background-color: #F0EEEE">
	<div class="container">
		<div class="row">
			<h3  align="center"><font color="#80c342">Chat </font></h3>
				<hr color="#E32F75">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<div class="panel panel-success">
						<div class="panel-heading" align="center">
							Enregistrement 
						</div>
						<div class="panel-body">
							<form method="POST" action="register.php">
								<label>Nom utilisateur</label>
								<input type="text" name="name" placeholder="Nom d'utililateur" class="form-control" required>
								<label>Email</label>
								<input type="Email" name="email" placeholder="Email" class="form-control" required>
								<label>Pays</label>
								<select name="country" class="form-control" required>
									<option disabled selected >choisi un pays</option>
									<option value="Italy">Italy</option>
									<option value="Paris8 Mime">Paris8</option>
									<option value="Espagne">Espagne</option>
									<option value="Belgique">Belgique</option>
									<option value="France">France</option>
									<option value="England">Angletaire</option>
									<option value="Austriche">Austriche</option>
									<option value="Russie">Russie</option>
								</select>
								<label>Genre</label>
								<span style="margin-left: 40px; margin-right: 5px"> Male </span> <input type="radio" name="gender" value="male"  style="margin-right: 15px;">
								Female <input type="radio" name="gender" value="female" style="margin-left: 5px;"><br>
								<label>Mot de passe</label>
								<input type="password" name="password" placeholder="Mot de passe" class="form-control" required>
						</div>
						<div class="panel-footer">
							<button type="submit" class="btn btn-success" name="Submit"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Register </button>
							<button type="reset" class="btn btn-danger" style="float: right;"> <span class="glyphicon glyphicon-refresh"></span>&nbsp;&nbsp;Reset</button>
						</div>
						<div class="panel-footer">
							<div align="center">
								deja membre ? <a href="login.php"><font color="green"><b>Login par ici</b></font></a>
							</div>
						</div>
					  </form>
					</div>
				</div>
				<div class="col-sm-4"></div>
		</div>
	</div>

</body>
</html>

<?php

if (isset($_POST['Submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];

	$query = "INSERT INTO user SET name='$name', email='$email', country='$country', gender='$gender', password='$password', status='0' ";
	$run = mysqli_query($con, $query);
	if ($run) {
		header('location: login.php');
	}
	else{
		echo "Error Occured";
	}
}