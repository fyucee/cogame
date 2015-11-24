<html>
	<body>
		<?php
			if($_SESSION['admin']!=0){
		?>
		<a href="logout.php">Logout</a>
		<?php
			}else{
		?>
		You must login first.
		<?php
			}
		?>
	</body>
</html>
