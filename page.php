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
		?>
		<table align="center" id="header" height="100" width="1166">
			<tr>
				<td width="5%" align="center">
					<img id="title" src="image/logo.png" width="100" height="100">
				</td>
				<td >
					<a id="title" href="index.php"><font size="7">Conio Gaming</font></a>
				</td>
			</tr>
		</table>

		<table align="center" id="menu" width="1130">
			<tr align="center" height="50">
				<td align="left">
					<a href="index.php"><img id="menu" src="image/menu_all.png"></a>
					<a href="index.php?category=pc"><img id="menu" src="image/menu_pc.png"></a>
					<a href="index.php?category=ps4"><img id="menu" src="image/menu_ps4.png"></a>
					<a href="index.php?category=xone"><img id="menu" src="image/menu_xboxone.png"></a>
					<a href="index.php?category=wiiu"><img id="menu" src="image/menu_wiiu.png"></a>
					<a href="index.php?category=vita"><img id="menu" src="image/menu_psvita.png"></a>
					<a href="index.php?category=mobile"><img id="menu" src="image/menu_mobile.png"></a>
				</td>
				<td id="search" width="170">
						<input style="border:none; width:100" type="text" placeholder="Search">
						<input type="image" src="image/search.png" style="vertical-align: middle;" height="20px" width="20px"></a>
				</td>
			</tr>
		</table>

		<table  align="center" id="ads" width="1130">
			<tr align="center" height="100">
				<td><a href="https://play.google.com/store/apps/dev?id=6535736138875075681"><img src="image/banner.gif"></a></td>
			</tr>
		</table>
		
		<table align="center" id="posted" width="1130">
			<tr align="center">
				<td width="750"><p id="title" align="center">
					<?php
						while($data=mysql_fetch_array($query)){
							echo $data['title'].'<br>';
							echo '<img id="postedin" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'">';
							echo '<p align="justify">'.$data['isi'].'<br>';
						}
					?>
				</td>
				<td>&nbsp</td>
			</tr>
		</table>

		<table  align="center" id="copyright" height="50" width="1130">
			<tr align="center">
				<td height="50">Copyright by Cogame.com.<br>All Right Reserved.</td>
			</tr>
		</table>
	</body>
</html>
