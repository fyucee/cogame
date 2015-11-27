<html>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION['admin'])){
				echo "<script>window.location='login.php?process=failed';</script>";
			}
			else{
				if($_SESSION['admin']=='1'){
					?>
						<table align="center" width="1100" border="2">
							<tr align="center" height="50">
								<td width="50"><font size="4"><a href=""><i>Index</a></td>
								<td><font size="4"><a href=""><i>Title</a></td>
								<td width="150"><font size="4"><a href=""><i>Last Update</a></td>
								<td width="100"><font size="4"><a href=""><i>Viewer</a></td>
								<td width="200"><font size="4" color="lightblue"><b><i>Option</td>
							</tr>
							<tr align="center" height="30">
								<?php
									include('../config.php');
									if(!isset($x)){
										$x=10;	
									}
									$y=0;

									$query_total=mysql_query("select * from posted");
						
									while($data=mysql_fetch_array($query_total)){
										$y+=1;
									}

									$query=mysql_query("select * from posted order by index desc limit ".$x.",1");

									while($data=mysql_fetch_array($query)){
										echo '<td>'.$data['id'].'</td>';
										echo '<td align="left">'.$data['title'].'</td>';
										echo '<td>'.$data['postdate'].'</td>';
										echo '<td>'.$data['view'].'</td>';
										echo '<td><a href=""><img src="../image/view.png" title="View"></a> / 
												<a href=""><img src="../image/edit.png" title="Edit"></a> / 
												<a href=""><img src="../image/delete.png" title="Delete"></a></td>';
										$x+=1;
									}
								?>
							</tr>
						</table>
						<table>
							<tr>
								<td>&nbsp;
								</td>
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
