<html>
	<head>
		<title>Searching... <?php echo $_POST['search']; ?></title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			include('config.php');
		?>
		<table align="center" id="header" height="100" width="1166">
			<tr>
				<td width="5%" align="center">
					<img id="title" src="image/logo.png" width="100" height="100">
				</td>
				<td>
					<a id="title" href="index.php"><font size="7">Conio Gaming</font></a>
				</td>
			</tr>
		</table>

		<table align="center" id="menu" width="1130">
			<tr align="center" height="50">
				<td align="left">
					<a id="menu" href="index.php"><img id="menu" src="image/menu_all.png"></a>
					<a id="menu" href="index.php?category=pc"><img id="menu" src="image/menu_pc.png"></a>
					<a id="menu" href="index.php?category=ps4"><img id="menu" src="image/menu_ps4.png"></a>
					<a id="menu" href="index.php?category=xone"><img id="menu" src="image/menu_xboxone.png"></a>
					<a id="menu" href="index.php?category=wiiu"><img id="menu" src="image/menu_wiiu.png"></a>
					<a id="menu" href="index.php?category=vita"><img id="menu" src="image/menu_psvita.png"></a>
					<a id="menu" href="index.php?category=mobile"><img id="menu" src="image/menu_mobile.png"></a>
				</td>
				<form action="search.php" method="post">
					<td id="search" width="170">
						<input name="search" style="border:none; width:100" type="text" placeholder="Search">
						<input type="image" src="image/search.png" style="vertical-align: middle;" height="20px" width="20px"></a>
					</td>
				</form>
			</tr>
		</table>

		<table  align="center" id="ads" width="1130">
			<tr align="center" height="100">
				<td><a href="https://play.google.com/store/apps/dev?id=6535736138875075681"><img src="image/banner.gif"></a></td>
			</tr>
		</table>

		<table  align="center" id="posted" width="1130">
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
			<tr><td height="25" colspan="3"></td></tr>
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
