<?php
session_start();
$sesi = $_SESSION['namasesi'];
if(empty($sesi)) {
	header("location: index.php");
}
include 'konfig.php';
$sql = mysqli_query($konek, "SELECT * FROM user WHERE email = '$sesi'");
$row = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Laman Dasbor</title> <!-- Bisa Diganti Dengan Selera Anda -->
<link href="inc/style.css" rel="stylesheet">
<script type="text/javascript" src="inc/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="inc/jquery-2.2.3.js"></script>
<script type="text/javascript" src="inc/script.js"></script>
<style type="text/css">
	body {
		background: url(gambar/bg.jpg);
		background-size: cover;
	}
</style>
</head>
<body>

<div class="bgKontenHome">&nbsp;</div>
<div align="center" class="kontenHome">
<h2 class="welcome">Selamat Datang, <?php echo $row['nama']; ?></h2>
<button class="logout">Logout</button>

</div>
</body>
</html>