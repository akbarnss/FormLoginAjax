$("document").ready(function() {
	$(".plusUser").click(function() {
		$(".bg").fadeIn(200);
		$(".tambahUser").fadeIn(365);
	});
	$(".plusUser2").click(function() {
		$(".bg").fadeIn(200);
		$(".infoAdmin").fadeIn(350);
	});
	$(".xNotif").click(function() {
		$(".bg,.notif").fadeOut(300);
	});
	$(".bg").click(function() {
		$(".bg,.tambahUser,.infoAdmin,.notif").fadeOut(235);
	});
	$(".loadUser").load("load_user.php");
	$(".tblTambah").click(function() {
		var nama = $("#nama").val();
		var email = $("#emaila").val();
		var password = $("#passa").val();
		var dataString = 'nama='+nama+'&email='+email+'&password='+password;
		if(nama == '' || email == '' || password == '') {
			alert('Semua bidang tidak boleh kosong!');
		}else {
			$.ajax({
				type: "POST",
				url: "tambah_user.php",
				data: dataString,
				success: function(html) {
					$("#nama,#emaila,#passa").val('');
					$(".bg,.tambahUser").fadeOut(235);
					$(".loadUser").load("load_user.php");
				}
			});
		}
		return false;
	});
	$(".ubahInfo").click(function() {
		var username = $("#username").val();
		var password = $("#password").val();
		var dataStringku = 'username='+username+'&password='+password;
		if(username == '' || password == '') {
			alert('Username / Password tidak boleh kosong!');
		}else {
			$.ajax({
				type: "POST",
				url: "ubah_info.php",
				data: dataStringku,
				success: function(html) {
					$(".infoAdmin").fadeOut(145);
					$(".notif").fadeIn(300);
					$(".isiNotif").html('Info Login Admin berhasil diubah!');
				}
			});
		}
		return false;
	});
});