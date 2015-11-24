<html>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION['admin'])){
				include('login.php');
			}
			else{
				if($_SESSION['admin']=='0'){
					echo "You have login as Admin";
				}else{
					include('login.php');
				}
			}
		?>
	</body>
</html>
