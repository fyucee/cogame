<html>
	<head>
		<?php	
			if($_GET['category']=="pc"){
				echo'<title>Cogame: PC</title>';
			}
			else if($_GET['category']=="ps4"){
				echo'<title>Cogame: PS4</title>';
			}
			else if($_GET['category']=="xone"){
				echo'<title>Cogame: XBOX ONE</title>';
			}
			else if($_GET['category']=="wiiu"){
				echo'<title>Cogame: Wii U</title>';
			}
			else if($_GET['category']=="vita"){
				echo'<title>Cogame: PS VITA</title>';
			}
			else if($_GET['category']=="mobile"){
				echo'<title>Cogame: Mobile</title>';
			}else{
				echo'<title>Cogame</title>';
			}
		?>
		<link rel='shortcut icon' type='image/x-icon' href='image/favicon.ico'>
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
