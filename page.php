<html>
	<head>
		<title>
			<?php
				echo $_GET['title'];
			?>
		</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			include('config.php');
			include('header.html');
		?>
		<table align="center" id="posted" width="1130">
			<tr align="center">
				<td width="750"><p id="title" align="center">
					<?php

						$query=mysql_query("select * from posted where id='".$_GET['index']."'");

						while($data=mysql_fetch_array($query)){
							echo $data['title'].'<br>';
							echo '<p align="left">Posted at '.$data['postdate'].'</p>';
							echo '<img id="postedin" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'">';
							echo '<p align="justify">'.$data['isi'].'<br>';
						}
					?>
				</td>
				<td>&nbsp</td>
			</tr>
		</table>

		<table  align="center" id="copyright" height="50" width="1130">
			<tr align="center">
				<td height="50">Copyright by Cogame.com.<br>All Right Reserved.</td>
			</tr>
		</table>
	</body>
</html>
