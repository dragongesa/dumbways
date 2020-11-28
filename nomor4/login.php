<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<div class="login">
	<br/>
		<form action="ceklogin.php" method="post" onSubmit="return validasi()">
			<div>
				<label>email:</label>
				<input type="text" name="email" id="email" />
			</div>
				
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>