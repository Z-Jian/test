<?php 
	session_start();
	
	if(isset($_POST['submit']))
	{
		// if((isset($_POST['email']) && $_POST['email'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))
		if((isset($_POST['password']) && $_POST['password'] !=''))
		{
			// $email = trim($_POST['email']);
			$password = trim($_POST['password']);

			// password at least 10 characters
				if(strlen($password) >= 10){
					$fp = '10-million-password-list-top-1000.txt'
					$conents_arr   = explode("\r\n",file_get_contents($fp)) ;

					// Check password is not compromised
					if(in_array($password, $conents_arr)){
					$_SESSION['user_id'] = 'Chang Zhi Jian';
					
					header('location:home.php');
					exit;
					}

				}
			
			$errorMsg = "Login failed";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page | PHP Login and logout example with session</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	
	<div class="container">
		<h1>PHP Login and Logout with Session</h1>
		<?php 
			if(isset($errorMsg))
			{
				echo "<div class='error-msg'>";
				echo $errorMsg;
				echo "</div>";
				unset($errorMsg);
			}
			
			if(isset($_GET['logout']))
			{
				echo "<div class='success-msg'>";
				echo "You have successfully logout";
				echo "</div>";
			}
		?>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<!-- <div class="field-container">
				<label>Email</label>
				<input type="email" name="email" required placeholder="Enter Your Email">
			</div> -->
			<div class="field-container">
				<label>Password</label>
				<input type="password" name="password" required placeholder="Enter Your Password">
			</div>
			<div class="field-container">
				<button type="submit" name="submit">Submit</button>
			</div>
			
		</form>
	</div>
</body>
</html>