<?php
session_start();
if(empty($_SESSION['sesiadminlogin'])) {
	header("location: login.php");
}
?>