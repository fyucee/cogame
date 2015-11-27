<html>
	<body>
	<?php
		session_start();
		if($_SESSION['admin']==1){
			$_SESSION['admin']=0;
			echo "<script>window.location='login.php?logout=success';</script>";
		}
		else{
			echo "<script>window.location='login.php?process=failed';</script>";
		}
	?>
	</body>
</html>
