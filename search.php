<html>
	<head>
		<title>Cogame: Search</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			if($_POST['search']!=""){
				include('config.php');
			}
			include('header.html');
		?>
		<table  align="center" id="posted" width="1130">
			<tr align="left">
				<?php
					echo '<td colspan="3" height="50"><font size="6"><b>&nbsp;&nbsp;Search result with keyword: "'.$_POST['search'].'"</b></font></td>';
				?>
			</tr>
			<tr align="left">
				<td width="376"><p align="center">
					<?php
						if(!isset($x)){
							$x=0;	
						}

						$query_total=mysql_query("select * from posted where title like '%".$_POST['search']."%'");
						
						while($data=mysql_fetch_array($query_total)){
							$y+=1;
						}

						if($y==0){
							echo'<font size="5"><p align="left">&nbsp;&nbsp;Not found.</p></font>';
						}

						$query=mysql_query("select * from posted where title like '%".$_POST['search']."%' order by postdate desc limit ".$x.",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a><br>';
							echo '<p align="justify">'.substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="page.php?title='.$data['title'].'&index='.$data['id'].'">Read more >><a/></p>';
							$x+=1;
						}
					?>
				</td>
				<td width="376"><p align="center">
					<?php
						$query=mysql_query("select * from posted where title like '%".$_POST['search']."%' order by postdate desc limit ".$x.",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a><br>';
							echo '<p align="justify">'.substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="page.php?title='.$data['title'].'&index='.$data['id'].'">Read more >><a/></p>';
							$x+=1;
						}
					?>
				</td>
				<td width="376"><p align="center">
					<?php
						$query=mysql_query("select * from posted where title like '%".$_POST['search']."%' order by postdate desc limit ".$x.",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a><br>';
							echo '<p align="justify">'.substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="page.php?title='.$data['title'].'&index='.$data['id'].'">Read more >><a/></p>';
							$x+=1;
						}
					?>
				</td>
			</tr>
			<?php
				if($y>0){
					echo '<tr><td height="25" colspan="3"></td></tr>';
				}
			?>
			<tr align="left">
				<td><p align="center">
					<?php
						$query=mysql_query("select * from posted where title like '%".$_POST['search']."%' order by postdate desc limit ".$x.",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a><br>';
							echo '<p align="justify">'.substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="page.php?title='.$data['title'].'&index='.$data['id'].'">Read more >><a/></p>';
							$x+=1;
						}
					?>
				</td>
				<td><p align="center">
					<?php
						$query=mysql_query("select * from posted where title like '%".$_POST['search']."%' order by postdate desc limit ".$x.",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a><br>';
							echo '<p align="justify">'.substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="page.php?title='.$data['title'].'&index='.$data['id'].'">Read more >><a/></p>';
							$x+=1;
						}
					?>
				</td>
				<td><p align="center">
					<?php
						$query=mysql_query("select * from posted where title like '%".$_POST['search']."%' order by postdate desc limit ".$x.",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a><br>';
							echo '<p align="justify">'.substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="page.php?title='.$data['title'].'&index='.$data['id'].'">Read more >><a/></p>';
						}
					?>
				</td>
			</tr>
			<tr>
				<td colspan="3"><p align="right">
					<?php
						$z=0;
						if($z>0){
							echo '<a href="">Back</a>';
						}
						if($y-$x>1){
							echo ' <a href="">Next</a>';
						}
					?>
				</td>
			</tr>
		</table>

		<table  align="center" id="copyright" height="50" width="1130">
			<tr align="center">
				<td height="50">Copyright by Cogame.com.<br>All Right Reserved.</td>
			</tr>
		</table>
	</body>
</html>
