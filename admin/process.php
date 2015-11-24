<html>
	<body>
	<?php
		session_start();
		include("../config.php");
	
		$query=mysql_query("select * from admin
						where user = '".$_POST['user']."'
						and pw = '".$_POST['pw']."'");

		$check=mysql_num_rows($query);
		
		if($check > 0){
			echo "<script>alert('Login Successfull');
			window.history.back();
			</script>";
		}
		else{
			echo "<script>window.location='index.php?page=login';</script>";
		}
	?>
	</body>
</html>