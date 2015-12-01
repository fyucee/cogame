<html>
	<head>
		<title>Loading...</title>
</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION['admin'])){
				echo "<script>window.location='login.php?process=failed';</script>";
			}
			else{
				if($_SESSION['admin']=='1'){
					include("../config.php");

					$query=mysql_query("delete from posted where id = '".$_GET['id']."'");

					echo "<script>alert('Delete Successfull');
								window.location='index.php';</script>";
				}else{
					echo "<script>window.location='login.php?process=failed';</script>";
				}
			}
		?>
	</body>
</html>
