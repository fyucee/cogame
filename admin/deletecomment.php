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

					$query=mysql_query("delete from comment where id_cmt = '".$_GET['id']."'");

					echo "<script>alert('Delete Successfull');
								window.history.back();</script>";
				}else{
					echo "<script>window.location='login.php?process=failed';</script>";
				}
			}
		?>
	</body>
</html>
