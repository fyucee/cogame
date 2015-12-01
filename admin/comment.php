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
						<table align="center" width="1100">
							<tr align="center" height="50">
								<?php
									while($data=mysql_fetch_array($query)){
										echo'<td><font size="6"><b>'.$data['title'].'</b></font></td>';
									}
								?>
							</tr>
								<?php
									$queryTot=mysql_query("select * from comment where id='".$_GET['id']."'") or die(mysql_error());

									$row=mysql_fetch_row($queryTot);

									$queryCmt=mysql_query("select * from comment where id='".$_GET['id']."'") or die(mysql_error());

									while($data=mysql_fetch_array($queryCmt)){
										echo '<tr><td><font size="5">'.$data['name'].'</font> (<i>'.$data['mail'].'</i>)</td></tr>';
										echo '<tr><td>'.$data['comment'].'</td></tr>';
										echo '<tr><td><a href="deletecomment.php?id='.$data['id_cmt'].'"><img src="../image/delete.png"> Delete Comment</a></td></tr>';
									}

									if($row==0){
										echo '<tr><td align="center"><font size="5">No Comment</font></td></tr>';
									}
								?>
								<tr>
									<td>&nbsp;</td>
								</tr>
						</table>
					<?php
				}else{
					echo "<script>window.location='login.php?process=failed';</script>";
				}
			}
		?>
	</body>
</html>
