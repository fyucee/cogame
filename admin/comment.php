<html>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION['admin'])){
				echo "<script>window.location='login.php?process=failed';</script>";
			}
			else{
				if($_SESSION['admin']=='1'){
					include('../config.php');
					
					$query=mysql_query("select * from posted where id='".$_GET['id']."'");

					?>
						<table align="center" width="1100" border="2">
							<tr align="center" height="50">
								<?php
									while($data=mysql_fetch_array($query)){
										echo'<td>'.$data['title'].'</td>';
									}
								?>
							</tr>
								<?php
									$queryCmt=mysql_query("select * from comment where id='".$_GET['id']."'");

									while($data=mysql_fetch_array($queryCmt)){
										echo '<tr><td>'.$data['name'].'</td></tr>';
										echo '<tr><td>'.$data['email'].'</td></tr>';
										echo '<tr><td>'.$data['comment'].'</td></tr>';
									}
								?>
						</table>
					<?php
				}else{
					echo "<script>window.location='login.php?process=failed';</script>";
				}
			}
		?>
	</body>
</html>
