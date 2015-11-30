<html>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION['admin'])){
				echo "<script>window.location='login.php?process=failed';</script>";
			}
			else{
				if($_SESSION['admin']=='1'){
					include("../config.php");

					$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));

					date_default_timezone_set('Asia/Jakarta');
					$date = date('Y-m-d h:i:s', time());

					$query=mysql_query("insert into posted values('','".$_POST['title']."','".$_POST['isi']."','".$_POST['cat']."','$image','$date','')");

					//echo "<script>window.location='index.php';</script>";
				}else{
					echo "<script>window.location='login.php?process=failed';</script>";
				}
			}
		?>
	</body>
</html>
