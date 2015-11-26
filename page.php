<html>
	<head>
		<title>
			<?php
				echo $_GET['title'];
			?>
		</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			include('config.php');
			include('header.html');
			$x=0;
		?>
		<table align="center" id="posted" width="1130">
			<tr align="center">
				<td rowspan="9" width="750"><p id="title" align="center">
					<?php

						$query=mysql_query("select * from posted where id='".$_GET['index']."'");

						while($data=mysql_fetch_array($query)){
							echo $data['title'].'<br>';
							echo '<img id="postedin" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'">';
							echo '<p align="justify">'.$data['isi'].'<br>';
						}
					?>
				</td>
				<td colspan="2" height="50" width="380"><p id="title" align="center">Popular Post</p></td>
			</tr>
			<?php
				$query=mysql_query("select * from posted order by view, postdate desc limit ".$x.",1");
			
				while($data=mysql_fetch_array($query)){echo
					'<tr>
						<td height="70"><a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="page" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a></td>
						<td width="220"><a id="page" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a></td>
					</tr>';
					$x+=1;
				}
			
				$query=mysql_query("select * from posted order by view, postdate desc limit ".$x.",1");
			
				while($data=mysql_fetch_array($query)){echo
					'<tr>
						<td height="70"><a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="page" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a></td>
						<td width="220"><a id="page" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a></td>
					</tr>';
					$x+=1;
				}
			
				$query=mysql_query("select * from posted order by view, postdate desc limit ".$x.",1");
			
				while($data=mysql_fetch_array($query)){echo
					'<tr>
						<td height="70"><a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="page" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a></td>
						<td width="220"><a id="page" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a></td>
					</tr>';
					$x+=1;
				}
			?>
			<tr>
				<td colspan="2" height="50" width="380"><p id="title" align="center">Recent Post</p></td>
			</tr>
			<?php
				$x=0;
				$query=mysql_query("select * from posted order by postdate desc limit ".$x.",1");
				
				while($data=mysql_fetch_array($query)){echo
					'<tr>
						<td height="70"><a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="page" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a></td>
						<td width="220"><a id="page" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a></td>
					</tr>';
					$x+=1;
				}
				
				$query=mysql_query("select * from posted order by postdate desc limit ".$x.",1");
				
				while($data=mysql_fetch_array($query)){echo
					'<tr>
						<td height="70"><a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="page" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a></td>
						<td width="220"><a id="page" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a></td>
					</tr>';
					$x+=1;
				}
			
				$query=mysql_query("select * from posted order by postdate desc limit ".$x.",1");
				
				while($data=mysql_fetch_array($query)){echo
					'<tr>
						<td height="70"><a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="page" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a></td>
						<td width="220"><a id="page" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a></td>
					</tr>';
					$x+=1;
				}
			?>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
		</table>

		<table  align="center" id="copyright" height="50" width="1130">
			<tr align="center">
				<td height="50">Copyright by Cogame.com.<br>All Right Reserved.</td>
			</tr>
		</table>
	</body>
</html>
