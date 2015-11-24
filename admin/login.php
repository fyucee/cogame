<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
		<table align="center" height="100">
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table>
		<table align="center" height="200">
			<tr>
				<td align="center"><img id="title" src="../image/logo.png" width="100" height="100"><br>
					<a id="title" href="../index.php"><font color="black" size="7"><b>Conio Gaming</font></a>
					<br><font color="black" size="5">Admin
				</td>
			</tr>
		</table>
		<table align="center" id="posted" width="300">
			<form action="process.php" method="post">
				<tr align="center" height="50">
					<td>Username</td>
					<td>:</td>
					<td><input name="user" type="text"></td>
				</tr>
				<tr align="center" height="50">
					<td>Password</td>
					<td>:</td>
					<td><input name="pw" type="password"></td>
				</tr>
				<tr align="center" height="50">
					<td colspan="3"><input type="submit" value="Login"></td>
				</tr>
			</form>
		</table>
		<?php
			if($_GET['login']=='failed'){
		?>
			<table bgcolor="red" align="center" width="300">
				<tr align="center">
					<td>Invalid Username or Password</td>
				</tr>
			</table>
		<?php
			}
			if($_GET['logout']=='success'){
		?>
			<table bgcolor="green" align="center" width="300">
				<tr align="center">
					<td>You've been logout</td>
				</tr>
			</table>
		<?php
			}
		?>
	</body>
</html>
