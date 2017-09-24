<?php
try{


	include ('connection.php');

	if(isset($_POST['submit']))
	{
		$username = $_POST['login_name'];
		$password = $_POST['password'];
		
		$db_pass = '';
		$user_no = '';
		$sql = "select * from sec_users where login_name= '$username' limit 1";
		$result = mysqli_query($connection, $sql);
		if (mysqli_num_rows($result) > 0) {
    	// output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
	        	$db_pass = $row["login_pass"];
				$user_no = $row["user_no"];
				
				if (password_verify($password, $db_pass)) {
				    $sql = "call SEC_USER_LOGONS_INSERT($user_no,1,null,null,null);";
					$result = mysqli_query($connection, $sql);
					while($row = mysqli_fetch_assoc($result)) {
						$user_no = $row["user_no"];
						session_start();
						$_SESSION["user_no"] = $user_no;
						$_SESSION["logon_no"] = $user_no;
					}
					header("Location: home.php");
				}

			}
		}
		else{
			echo "username doesnot found!";
		}
		/*if ($connection->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $connection->error;
		}*/
		/*if($name == '')
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
			

			$sql = "select * from sec_users where login_name=";

			//echo $sql;

			$result = mysqli_query($connection,$sql);
			$success = 'Thanks, Sucessfully Registered!';
			header("Location: register.php");
		}*/
	}
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>

<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" action="login.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input name="login_name" type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <!-- <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label> -->
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" name="submit" type="submit">Sign in</button>
            </form><!-- /form -->
            <!-- <a href="#" class="forgot-password">
                Forgot the password?
            </a> -->
        </div><!-- /card-container -->
    </div><!-- /container -->

 <script type="text/javascript" src="assets/js/bootstrap.js"></script>