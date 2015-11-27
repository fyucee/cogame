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
								<td>id</td>
								<td align="left">title</td>
								<td>postdate</td>
								<td>view</td>
								<td><a href=""><img src="../image/view.png" title="View"></a> / 
									<a href=""><img src="../image/edit.png" title="Edit"></a> / 
									<a href=""><img src="../image/delete.png" title="Delete"></a></td>
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
