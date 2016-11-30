<?php
include '../konfig.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale = 1">
<title>Login Admin</title>
<link href="style.css" rel="stylesheet">
<script type="text/javascript" src="../inc/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="../inc/jquery-2.2.3.js"></script>
<script type="text/javascript" src="script.js"></script>
</head>
<body>

<div class="kontenLogin">
	<div class="judulLogin">Login Admin</div>
	<form action="login.php" method="post" class="formLogin">
		<input type="text" name="username" class="login-box" id="username" placeholder="Username..."><br />
		<input type="password" name="password" class="login-box" id="password" placeholder="Password..."><br />
		<input type="submit" name="login" class="tblLogin" value="Login">
	</form>
	<?php
	if(isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = mysqli_query($konek, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
	$login = mysqli_num_rows($sql);
	if($login != 0) {
		session_start();
		$_SESSION['sesiadminlogin']=$username;
		header("location: index.php");
	}else {
		echo '<div style="text-align:center;">Username / Password salah</div>';
	}
}
	?>
</div>

</body>
</html>