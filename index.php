<?php
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<title>AIM Lab</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css_strona.css">
</head>
<body>
	<div class="login-box">
		<form method="POST" action="aimlab.php">
			<input type="text" name="username" autocomplete="off" placeholder="Podaj login">
		</form>
	</div>
</body>
</html>
