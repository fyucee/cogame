<html>
	<head>
		<title>
			Cogame ++
		</title>
		<link rel='shortcut icon' type='image/x-icon' href='../image/favicon.ico'>
	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION['admin'])){
				include('login.php');
			}
			else{
				if($_SESSION['admin']=='1'){
					include('master.php');
				}else{
					include('login.php');
				}
			}
		?>
	</body>
</html>
