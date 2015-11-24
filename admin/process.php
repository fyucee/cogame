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
			$_SESSION['admin']=1;
			echo "<script>window.location='index.php';</script>";
		}
		else{
			echo "<script>window.location='login.php?login=failed';</script>";
		}
	?>
	</body>
</html>
