<html>
	<head>
		<title>Loading...</title>
	</head>
	<body>
		<?php
			include('config.php');

			date_default_timezone_set('Asia/Jakarta');
			$date = date('Y-m-d H:i:s', time());
			
			$query=mysql_query("insert into comment values('".$_POST['id']."',null,'".$_POST['name']."','".$_POST['mail']."','".$_POST['comment']."','$date')");

		?>
	</body>
</html>
