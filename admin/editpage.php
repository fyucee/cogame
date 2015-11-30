<html>
	<head>
		<title>
			Cogame ++: Edit Post
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
					include("../config.php");

					$query=mysql_query("select * from posted where id = '".$_GET['id']."'");
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
							<form action="createprocess.php?mode=edit" method="post" enctype="multipart/form-data">
								<tr><td height="15"></td></tr>
								<tr align="center">
									<td colspan="3"><font size="6"><b>Edit Post</b></font></td>';
								</tr>
								<?php
									while($data=mysql_fetch_array($query)){
										echo'
									<tr>
										<td width="110" rowspan="5"></td>
										<td height="50">&nbsp;<font size="5"><b>Title</b></font></td>
										<td><input name="title" type="text" style="width:800" value="'.$data['title'].'"></td>
									</tr>
									<tr>
										<td>&nbsp;<font size="5"><b>Content</b></font></td>
										<td><textarea name="isi"></textarea></td>
									</tr>
									<tr>
										<td>&nbsp;<font size="5"><b>Category</b></font></td>
										<td><input name="cat" type="text" style="width:800" value="'.$data['cat'].'"></input></td>
									</tr>
									<tr>
										<td></td>
										<td><font size="2"><b>&nbsp;Note: If more than one, separate that by space.</b></font></td>
									</tr>
									<tr>
										<td height="50">&nbsp;<font size="5"><b>Image</b></font></td>
										<td><input name="image" type="file"></input></td>
									</tr>
									<tr>
									';
								?>
									<td align="center" height="50" colspan="4">
										<input type="submit" value="Submit"></input>
									</td>
								</tr>
							</form>
						</table>
						<?php
				}else{
					echo "<script>window.location='login.php?process=failed';</script>";
				}
			}
		?>
	</body>
</html>
