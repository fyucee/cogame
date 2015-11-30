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

					if($_GET['mode']=='new'){
						$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));

						date_default_timezone_set('Asia/Jakarta');
						$date = date('Y-m-d H:i:s', time());

						$query=mysql_query("insert into posted values(null,'".$_POST['title']."','".$_POST['isi']."','".$_POST['cat']."','$image','$date','0')");

						if(!$query){
							echo "<script>alert('Posting Failed');
								window.history.back();</script>";
						}else{
							echo "<script>alert('Posting Successfull');
								window.location='index.php';</script>";
						}
					}
					else if($_GET['mode']=='edit'){
						$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));						

						date_default_timezone_set('Asia/Jakarta');
						$date = date('Y-m-d H:i:s', time());

						echo $_GET['id'];

						if(!isset($image){
							$query=mysql_query("update posted set title='".$_POST['title']."', isi='".$_POST['isi']."', cat='".$_POST['cat']."', image='$image', date='$date' where id='".$_GET['id']."'");
						}else{
							$query=mysql_query("update posted set title='".$_POST['title']."', isi='".$_POST['isi']."', cat='".$_POST['cat']."', date='$date' where id='".$_GET['id']."'");
						}

						if(!$query){
							echo "<script>alert('Editing Failed');
								window.history.back();</script>";
						}else{
							echo "<script>alert('Editing Successfull');
								window.location='index.php';</script>";
						}
					}
				}else{
					echo "<script>window.location='login.php?process=failed';</script>";
				}
			}
		?>
	</body>
</html>
