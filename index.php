<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta name="author" content="Riyan Satria">
<meta name="description" content="Form Login PHP Ajax by Riyan Satria">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Form Login by Riyan Satria</title> <!-- Bisa Diganti Dengan Selera Anda -->
<link href="inc/style.css" rel="stylesheet">
<script type="text/javascript" src="inc/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="inc/jquery-2.2.3.js"></script>
<script type="text/javascript" src="inc/script.js"></script>
</head>
<body>

<div class="konten">
	<div class="judulKonten">Login</div>
	<img src="gambar/gembok.png" class="gembok"><br />
	<form>
		<input type="email" name="email" class="login-box" id="email" placeholder="Masukkan E-Mail Anda..."><br />
		<input type="password" name="password" class="login-box" id="password" placeholder="Masukkan Password Anda..."><br />
		<input type="button" class="loginBtn" value="Login">
	</form>	
</div>

<div class="error2">
	<div class="kiriError">&nbsp;</div>
	E-Mail dan Password Harus Diisi!
	<div class="xerror">x</div>
</div>

</body>
</html>