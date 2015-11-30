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
								<td height="50"><a href="index.php" id="open">Post</a></td>
								<td><a id="open" href="index.php?sub=comment">Comment</a></td>
								<td><a id="open" href="logout.php">Logout</a></td>
								<td width="800">&nbsp;</td>
								<td align="right"><a href="" id="title">+ New Post</a></td>
							</tr>
							<tr>
								<td colspan="4" align="center">
									<?php
										if($_GET['sub']=='comment'){
											include('comment.php');
										}
										else{
											include('post.php');
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
