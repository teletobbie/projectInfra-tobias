<?php
	session_start();
   	require_once("config.php");
   	require_once("login.php");
   	
   	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
		header("Location: dashboard.php");
	}
	if(isset($_POST["logout"]) && $_POST["logout"]) {
		$_SESSION['loggedin'] = false;
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome @ Dean Environmental Research Facility</title>
	<link rel="stylesheet" type="text/css" href="resources/css/main.css">
	<script type="text/javascript" src="resources/javascript/main.js"></script>
</head>
<?php
include 'functions/head.php';
?>
<body>
	<header>
	</header>
	<!--<div class="row">-->
	<div class="container">
	</div>
	<h1>Please login to continue</h1>
	<?php if(!empty($error))  echo '<p style=color:red;>'. $error .'</p>';    ?>
		<form action="index.php" method="post">
			<div class="container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>

				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>

				<button type="submit">Login</button>
			</div>
		</form>
</body>
</html>