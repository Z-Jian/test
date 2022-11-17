<?php 
	session_start();
		
	if(!isset($_SESSION['user_id']))
	{
		header('location:index.php');
		exit;
	}
	

?>

<!DOCTYPE html>
<html>
<head>
<title>Home | PHP Login and logout example with session</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container-dashboard">
		Welcome to the home! <span class="user-name"><?php echo ucwords($_SESSION['user_id'])?> </span> 
		<br>
		
		<a href="logout.php?logout=true" class="logout-link">Logout</a>
	</div>
</body>
</html>