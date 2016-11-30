<?php
include '../konfig.php';

$username = $_POST['username'];
$password = $_POST['password'];

$ubah = mysqli_query($konek, "UPDATE admin SET username = 'adminku' AND password = '$password' WHERE username = '$username'");

?>