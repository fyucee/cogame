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
									$query_total=mysql_query("select * from posted");
						
									$row=mysql_num_rows($query_total);
									$pageTotal=ceil($row/20);

									if(!isset($_GET['page'])){
										$page=1;	
									}else if($_GET['page']<1){
										$page=1;
									}else if ($_GET['page']>$pageTotal){
										$page=$pageTotal;
									}else{
										$page=$_GET['page'];
									}
									$x=($page-1)*20;

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
												<a href="deleteprocess.php?id='.$data['id'].'" onClick=\"javascript: return confirm('Please confirm deletion');\"><img src="../image/delete.png" title="Delete"></a></td></tr>';
									}
								?>
						</table>
						<table>
							<tr>
								<td>&nbsp;
								</td>
							</tr>
						</table>
						<table align="center" width="1130">
							<tr>
								<td><p align="left">
									<?php
										if($page>1){
											if(!isset($_GET['order'])){
												echo "<a id='title' href='index.php?page=".($page-1)."'><font size='7'>Back</font></a>";
											}else{
												echo "<a id='title' href='index.php?order=".$_GET['order']."&page=".($page-1)."'><font size='7'>Back</font></a>";
											}
										}
									?>
								</td>
								<td></td>
								<td><p align="right">
									<?php
										if($page<$pageTotal){
											if(!isset($_GET['order'])){
												echo "<a id='title' href='index.php?page=".($page+1)."'><font size='7'>Next</font></a>";
											}else{
												echo "<a id='title' href='index.php?order=".$_GET['order']."&page=".($page+1)."'><font size='7'>Next</font></a>";
											}
										}
									?>
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
