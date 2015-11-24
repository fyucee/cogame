<html>
	<body>
		<?php
			if(!isset($_SESSION['admin'])){
				include('login.php');
			}
			else{
				if($_SESSION['admin']==0){
					include('login.php');
				}else{
					echo 'session = '.$_SESSION['admin'];
				}
			}
		?>
	</body>
</html>
