<?php
include "db.php";
$id = $_GET['id'];

$query = "SELECT * from user WHERE  id = '$id' ";
$run = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($run, MYSQLI_BOTH)) {
	$name = $row['name'];
	$email = $row['email'];
	$country = $row['country'];
	$gender = $row['gender'];

}
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
			<h3  align="center"><font color="#E32F75">Chat</font></h3>
				<hr color="#E32F75">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<div class="panel panel-success">
						<div class="panel-heading" align="center">
							<?php echo "Profile of ". $name ?>
						</div>
						<div class="panel-body">
								<label>User name</label>
								<input type="text" name="name" value="<?php echo $name ?>" class="form-control" readonly>
								<label>Email</label>
								<input type="text" name="email" value="<?php echo $email ?>" class="form-control" readonly>
								<label>Country</label>
								<input type="text" name="email" value="<?php echo $country ?>" class="form-control" readonly>
								<label>Gender</label>
								<input type="text" name="email" value="<?php echo $gender ?>" class="form-control" readonly><br>
								<div class="panel-footer" align="center">
									<a href="index.php"><button class="btn btn-success btn-sm">Go Back</button></a>
								</div>
								
						</div>
						
					</div>
				</div>
				<div class="col-sm-4"></div>
		</div>
	</div>

</body>
</html>
