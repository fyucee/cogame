<html>
	<body>
	<?php
		session_start();
		$_SESSION['admin']=0;
		echo "<script>window.location='login.php?logout=success';</script>";
	?>
	</body>
</html>
