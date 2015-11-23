<html>
	<body>
		<?php
			include("config.php");
		?>
			<tr align="left">
				<td width="376"><p align="center">
					<?php
						$x=0;
						$query=mysql_query("select * from posted where cat='mobile' order by postdate desc limit ".$x.",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href=""><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a>';
							echo substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="">Read more >><a/></p>';
						}
						$x+=1;
					?>
				</td>
				<td width="376"><p align="center">
					<?php
						$query=mysql_query("select * from posted where cat='mobile' order by postdate desc limit ".$x.",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href=""><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a>';
							echo substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="">Read more >><a/></p>';
						}
						$x+=1;
					?>
				</td>
				<td width="376"><p align="center">
					<?php
						$query=mysql_query("select * from posted where cat='mobile' order by postdate desc limit ".$x.",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href=""><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a>';
							echo substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="">Read more >><a/></p>';
						}
						$x+=1;
					?>
				</td>
			</tr>
			<tr><td height="25" colspan="3"></td></tr>
			<tr align="left">
				<td><p align="center">
					<?php
						$query=mysql_query("select * from posted where cat='mobile' order by postdate desc limit ".$x.",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href=""><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a>';
							echo substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="">Read more >><a/></p>';
						}
						$x+=1;
					?>
				</td>
				<td><p align="center">
					<?php
						$query=mysql_query("select * from posted where cat='mobile' order by postdate desc limit ".$x.",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href=""><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a>';
							echo substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="">Read more >><a/></p>';
						}
						$x+=1;
					?>
				</td>
				<td><p align="center">
					<?php
						$query=mysql_query("select * from posted where cat='mobile' order by postdate desc limit ".$x.",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href=""><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a>';
							echo substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="">Read more >><a/></p>';
						}
					?>
				</td>
			</tr>
		</table>

	</body>
</html>
