<?php
include '../konfig.php';

$iduser = $_POST['iduser'];
$hapus = mysqli_query($konek, "DELETE FROM user WHERE iduser = '$iduser'");
if($hapus) {
	echo "<script>alert('User berhasil dihapus!');document.location = 'index.php';</script>";
}
?>
