<?php
include '../konfig.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$login = mysqli_query($konek, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
$ada = mysqli_num_rows($login);
$row = mysqli_fetch_array($login);
if($ada != 0) {
	$ubah = mysqli_query($konek, "UPDATE user SET total_login = total_login+1 WHERE email = '$email'");
	session_start();
	$_SESSION['namasesi']=$email;
	header("location: ../home.php");
}else {
	setcookie('notif','salah',time() + 22);
	header("location: index.php");
}
?>
