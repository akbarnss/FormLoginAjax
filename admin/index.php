<?php
include 'session_admin.php';
include '../konfig.php';
error_reporting(1);
$ya = mysqli_query($konek, "SELECT * FROM admin");
$ro = mysqli_fetch_array($ya);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale = 1.0">
<title>Halaman Admin</title>
<link href="style.css" rel="stylesheet">
<script type="text/javascript" src="../inc/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="../inc/jquery-2.2.3.js"></script>
<script type="text/javascript" src="script.js"></script>
</head>
<body>
<div class="atasAdm">
	<div class="judulAdm">Halaman Admin</div>
	<button class="plusUser">Tambah User</button>
	<button class="plusUser2">Ganti Info Admin</button>
</div>

<div class="kontenAdm">
	<div class="loadUser">&nbsp;</div>
</div>

<div class="bg">&nbsp;</div>
<div class="tambahUser">
	<div class="judTamUser">Tambahkan User</div>
	<form action="" method="post" class="formTambah">
		<input type="text" name="nama" class="tambah-box" id="nama" placeholder="Nama User..."><br />
		<input type="email" name="email" class="tambah-box" id="emaila" placeholder="E-Mail User..."><br />
		<input type="text" name="password" class="tambah-box" id="passa" placeholder="Password User..."><br />
		<input type="submit" name="tambah" class="tblTambah" value="Tambahkan">
	</form>
</div>
<div class="infoAdmin">
	<div class="judTamUser">Ganti Info Login Admin</div>
	<form action="" method="post" class="formTambah">
		<input type="text" name="nama" class="tambah-box" id="username" value="<?php echo $ro['username']; ?>"><br />
		<input type="password" name="password" class="tambah-box" id="password" value="<?php echo $ro['password']; ?>"><br />
		<button class="ubahInfo">Ubah</button>
	</form>
</div>
<div class="notif">
	<div class="judNot">Notifikasi</div>
	<div class="isiNotif">Ini adalah isi notif</div>
	<div class="xNotif">Oke</div>
</div>

</body>
</html>