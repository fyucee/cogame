<html>
	<body>
	<?php
		session_start();
		$_SESSION['admin']=0;
		echo "<script>window.location='index.php?logout=success';</script>";
	?>
	</body>
</html>