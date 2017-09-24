
<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin</title>
	</head>
	<body>
		<div class="container">
<?php
try{


	include ('connection.php');
	$error_username= '';
	$error_email= '';
	$error_pass= '';
	$error_conf_pass= '';
	$error_name= '';
	$success='';

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$mobile = $_POST['mobile'];
		$conf_pass = $_POST['confirm'];

		
		//exit;
		/*if ($connection->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $connection->error;
		}*/
		if($name == '')
		{
			$error_name = 'Name required';
		}
		if($username == '')
		{
			$error_username = 'User name required';
		}
		if($email == '')
		{
			$error_email = 'Email name required';
		}
		elseif($password == '')
		{
			$error_pass = 'Password is required;';
		}
		elseif($conf_pass == '')
		{
			$error_conf_pass = 'Password is required;';
		}
		elseif($password != $conf_pass)
		{
			$error_pass = 'Password does not matched';
		}
		else
		{
			$password = password_hash("$password", PASSWORD_DEFAULT);

			$sql = "call sec_users_insert(null,200,'$username','$password','123','','$name',null,'$email','$mobile',null,null,1,0,0,null,null,null,null,'created')";

			//echo $sql;

			$result = mysqli_query($connection,$sql);
			$success = 'Thanks, Sucessfully Registered!';
			header("Location: register.php");
		}
	}
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>

	
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">

	               		
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<h1 class="title">Registration Form</h1>
	               		<hr />
					<?php
								echo $success;
							?>
							<br/>
					<form class="form-horizontal" method="post" action="register.php">
						
						<div class="form-group">
							<?php
								echo $error_name;
							?>
							<br>
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<?php
								echo $error_email;
							?>
							<br>
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<?php
								echo $error_username;
							?>
							<br>
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="mobile" class="cols-sm-2 control-label">Mobile</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="mobile" id="mobile"  placeholder="Enter your Mobile no"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<?php
								echo $error_pass;
							?>
							<br>
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<?php
								echo $error_conf_pass;
							?>
							<br>
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
						</div>
						<div class="login-register">
				            <a href="login.php">Login</a>
				         </div>
					</form>
				</div>
			</div>
<?php
		
?>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>