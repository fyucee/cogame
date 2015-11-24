<html>
	<head>
		<title>Cogame</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
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
				<td id="search" width="170">
					<form action="search.php" method="get">
						<input style="border:none; width:100" type="text" placeholder="Search">
						<input type="image" src="image/search.png" style="vertical-align: middle;" height="20px" width="20px"></a>
					</form>
				</td>
			</tr>
		</table>

		<table  align="center" id="ads" width="1130">
			<tr align="center" height="100">
				<td><a href="https://play.google.com/store/apps/dev?id=6535736138875075681"><img src="image/banner.gif"></a></td>
			</tr>
		</table>
		
		<table  align="center" id="posted" width="1130">
			<?php
				if(!isset($_GET['search'])){
					if(!isset($_GET['category'])){
						include('all.php');
					}
					else{
						include('category.php');
					}
				}
				else{
					include('search.php');
				}
			?>
		</table>

		<table  align="center" id="copyright" height="50" width="1130">
			<tr align="center">
				<td height="50">Copyright by Cogame.com.<br>All Right Reserved.</td>
			</tr>
		</table>
	</body>
</html>
