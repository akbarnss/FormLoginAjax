$("document").ready(function() {
	$(".loginBtn").click(function() {
		var email = $("#email").val();
		var password = $("#password").val();
		var dataString = 'email='+email+'&password='+password;
		if(email == '' || password == '') {
			$(".error2").fadeIn(380);
		}else {
			$.ajax({
				type: "POST",
				url: "inc/login.php",
				data: dataString,
				success: function(html) {
					$(".loginBtn").val('Logging in...');
					document.location = 'home.php';
				}
			});
		}
		return false;
	});
	$(".logout").click(function() {
		document.location = 'logout.php';
	});
	$(".xerror").click(function() {
		$(".error,.error2").hide(450);
	});
});