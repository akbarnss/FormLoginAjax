<style type="text/css">
	#error {
		background-color: #e74c3c;
		font-size: 44px;
		text-align: center;
		line-height: 125px;
		font-weight: bold;
		font-family: sans-serif;
		color: #fff;
		position: absolute;
		top:0px;left: 0px;right: 0px;bottom: 0px;
		padding-top: 169px;
	}
	.exit {
		background-color: #2ecc71;
		color: #fff;
		font-weight: bold;
		font-family: sans-serif;
		font-size: 34px;
		width: 424px;
		border:none;
		border-radius: 5px;
		line-height: 81px;
	}
	.exit:hover {
		background-color: #27ae60;
		cursor: pointer;
	}
	.exit:active {
		background-color: #3498db;
	}
</style>
<?php
error_reporting(1);
$host = "localhost"; // HOST DB MySQL
$user = "root"; // Username DB
$pass = ""; // Password DB
$nama = "login"; // Nama DB Yang Dipilih

$konek = mysqli_connect($host,$user,$pass,$nama);
if(!$konek) {
	die('<div id="error">Gagal Terhubung ke Server Database :(<br /><button class="exit">Keluar</button></div>');
}
?>