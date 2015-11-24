<html>
	<body>
		<?php
			if($_SESSION['admin']!=0){
		echo "<a href="logout.php">Logout</a>";
			}else{
		echo "You must login first.";
			}
		?>
	</body>
</html>
