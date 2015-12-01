<html>
	<head>
		<title>
			<?php
				echo $_GET['title'];
			?>
		</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel='shortcut icon' type='image/x-icon' href='image/favicon.ico'>
	</head>
	<body>
		<?php
			include('config.php');
			include('header.html');
			$x=0;
		?>
		<table align="center" id="posted" width="1130">
			<tr align="center">
				<td rowspan="9" colspan="2" width="750"><p id="title" align="center">
					<?php
						$query=mysql_query("select * from posted where id='".$_GET['index']."'");

						while($data=mysql_fetch_array($query)){
							echo $data['title'].'<br>';
							echo '<img id="postedin" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'">';
							echo '<p align="justify">'.$data['isi'].'<br>';
						
							$queryView = mysql_query("update posted set view='".($data['view']+1)."' where id='".$_GET['index']."'");
						}
					?>
				</td>
				<td colspan="2" height="50" width="380"><p id="title" align="center">Popular Post</p></td>
			</tr>
			<?php
				$query=mysql_query("select * from posted order by view desc, postdate desc limit ".$x.",1");
			
				while($data=mysql_fetch_array($query)){echo
					'<tr>
						<td height="50"><p align="right"><a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="page" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a></td>
						<td width="220"><a id="page" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a></td>
					</tr>';
					$x+=1;
				}
			
				$query=mysql_query("select * from posted order by view desc, postdate desc limit ".$x.",1");
			
				while($data=mysql_fetch_array($query)){echo
					'<tr>
						<td height="50"><p align="right"><a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="page" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a></td>
						<td width="220"><a id="page" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a></td>
					</tr>';
					$x+=1;
				}
			
				$query=mysql_query("select * from posted order by view desc, postdate desc limit ".$x.",1");
			
				while($data=mysql_fetch_array($query)){echo
					'<tr>
						<td height="50"><p align="right"><a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="page" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a></td>
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
						<td height="50"><p align="right"><a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="page" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a></td>
						<td width="220"><a id="page" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a></td>
					</tr>';
					$x+=1;
				}
				
				$query=mysql_query("select * from posted order by postdate desc limit ".$x.",1");
				
				while($data=mysql_fetch_array($query)){echo
					'<tr>
						<td height="50"><p align="right"><a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="page" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a></td>
						<td width="220"><a id="page" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a></td>
					</tr>';
					$x+=1;
				}
			
				$query=mysql_query("select * from posted order by postdate desc limit ".$x.",1");
				
				while($data=mysql_fetch_array($query)){echo
					'<tr>
						<td height="50"><p align="right"><a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="page" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a></td>
						<td width="220"><a id="page" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a></td>
					</tr>';
					$x+=1;
				}
			?>
			<tr>
				<td colspan="2" rowspan="6">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;<font size="6">&nbsp;Comment :</td>
				<form action="comment.php" method="post">
					<tr>
						<td width="120"><font size="5">&nbsp;&nbsp;Name</td>
						<td><input name="name" type="text" style="width:423" maxlength="58" placeholder="Type your name here"></input>
							<?php	
								echo'<input name="id" type="hidden" value="'.$_GET['index'].'">';
								echo'<input name="title" type="hidden" value="'.$_GET['title'].'">';
							?>
						</td>
					</tr>
					<tr>
						<td width="80"><font size="5">&nbsp;&nbsp;Email</td>
						<td><input name="mail" type="text" style="width:423" maxlength="58" placeholder="Type your email address here"></input></td>
					</tr>
					<tr>
						<td height="20" width="80"><font size="5">&nbsp;&nbsp;Comment</td>
						<td rowspan="2"><textarea id="comment" name="comment" placeholder="Type your comment here" maxlength="311"></textarea></input></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td></td>
						<td align="center" colspan="2">
							<input type="submit" value="Submit"></input>
						</td>
					</tr>
				</form>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<tr>
		</table>

		<table  align="center" id="copyright" height="50" width="1130">
			<tr align="center">
				<td height="50">Copyright by Cogame.com.<br>All Right Reserved.</td>
			</tr>
		</table>
	</body>
</html>
