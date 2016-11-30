<?php
include '../konfig.php';

$id = rand(11111,99999);
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$terdaftar = time();

$masukkan = mysqli_query($konek, "INSERT INTO user VALUES('$id','$nama','$email','$password','0','$terdaftar')");
?>