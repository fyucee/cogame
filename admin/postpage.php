<html>
	<head>
		<title>
			Cogame ++: New Post
		</title>
		<link rel='shortcut icon' type='image/x-icon' href='../image/favicon.ico'>
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
						<table align="center" id="posted" width="1130" border="5">
							<tr><td height="15"></td></tr>
							<tr align="center">
								<?php
									if(!isset($_GET['mode'])){
										echo '<td colspan="4"><font size="6"><b>New Post</b></font></td>';
									}else{
										echo '<td colspan="4"><font size="6"><b>Edit Post</b></font></td>';
									}
								?>
							</tr>
							<tr>
								<td width="110" rowspan="4"></td>
								<td height="50">&nbsp;<font size="5"><b>Title</b></font></td>
								<td>:</td>
								<td><input name="title" type="text" style="width:800"></td>
							</tr>
							<tr>
								<td>&nbsp;<font size="5"><b>Content</b></font></td>
								<td>:</td>
								<td><textarea name="isi"></textarea></td>
							</tr>
							<tr>
								<td>&nbsp;<font size="5"><b>Category</b></font></td>
								<td>:</td>
								<td><input name="title" type="text" style="width:800"></td>
							</tr>
							<tr>
								<td height="50"></td>
								<td></td>
								<td><font size="2"><b>Note: If more than one, separate that by space.</b></font></td>
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
