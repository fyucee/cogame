<html>
	<head>
		<title>
			Cogame ++
		</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION['admin'])){
				echo "<script>window.location='login.php?process=failed';</script>";
			}
			else{
				if($_SESSION['admin']=='1'){
					?>
						<table align="center" id="header" height="100" width="1166">
							<tr>
								<td width="5%" align="center">
									<img id="title" src="../image/logo.png" width="100" height="100">
								</td>
								<td>
									<a id="title" href="index.php"><font size="7">Conio Gaming ++</font></a>
								</td>
							</tr>
						</table>
						<table align="center" id="posted" width="1130">
							<tr align="center">
								<td align="left"><a href="postpage.php" id="title"><font size="5">&nbsp;&nbsp;&nbsp;+ New Post</font></a></td>
								<td align="right"><a id="title" href="logout.php"><font size="5">Logout</font></a></td>
								<td width="20"></td>
							</tr>
							<tr>
								<td colspan="5" align="center">
									<?php
										include('post.php');
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
