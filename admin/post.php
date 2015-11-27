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
								<td width="50"><font size="4"><a href="index.php"><i>Index</a></td>
								<td><font size="4"><a href="index.php?order=title"><i>Title</a></td>
								<td width="150"><font size="4"><a href="index.php?order=date"><i>Last Update</a></td>
								<td width="100"><font size="4"><a href="index.php?order=viewer"><i>Viewer</a></td>
								<td width="100"><font size="4" color="lightblue"><b><i>Option</td>
							</tr>
								<?php
									include('../config.php');
									if(!isset($x)){
										$x=0;	
									}
									$y=0;

									$query_total=mysql_query("select * from posted");
						
									while($data=mysql_fetch_array($query_total)){
										$y+=1;
									}

									if($_GET['order']=='title'){
										$query=mysql_query("select * from posted order by title limit ".$x.",20");	
									}else if($_GET['order']=='date'){
										$query=mysql_query("select * from posted order by postdate limit ".$x.",20");	
									}else if($_GET['order']=='viewer'){
										$query=mysql_query("select * from posted order by view desc limit ".$x.",20");	
									}else{
										$query=mysql_query("select * from posted order by id desc limit ".$x.",20");	
									}
									
									while($data=mysql_fetch_array($query)){
										echo '<tr align="center" height="30">';
										echo '<td>'.$data['id'].'</td>';
										echo '<td align="left">'.$data['title'].'</td>';
										echo '<td>'.$data['postdate'].'</td>';
										echo '<td>'.$data['view'].'</td>';
										echo '<td><a href="../page.php?title='.$data['title'].'&index='.$data['id'].'"><img src="../image/view.png" title="View"></a> / 
												<a href=""><img src="../image/edit.png" title="Edit"></a> / 
												<a href=""><img src="../image/delete.png" title="Delete"></a></td></tr>';
										$x+=1;
									}
								?>
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
