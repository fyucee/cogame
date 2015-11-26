<html>
	<head>
		<title>Cogame</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			include('header.html');
		?>
		
		<table  align="center" id="posted" width="1130">
			<?php
				if(!isset($_GET['category'])){
					include('all.php');
				}
				else{
					include('category.php');
				}
			?>
		</table>

		<table  align="center" id="copyright" height="50" width="1130">
			<tr align="center">
				<td height="50">Copyright by Cogame.com.<br>All Right Reserved.</td>
			</tr>
		</table>
	</body>
</html>
