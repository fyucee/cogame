<html>
	<body>
		<?php
			include("config.php");
		?>
			<tr align="left">
				<td width="376"><p align="center">
					<?php
						$query=mysql_query("select * from posted where id=1");

						while($data=mysql_fetch_array($query)){
							echo '<a href=""><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a>';
							echo '<a id="open" href="">'.substr($data['title'],0,60).' ...</a>';
							echo substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="">Read more >><a/></p>';
						}
					?>
				</td>
				<td width="376"><p align="center">
					<?php
						$query=mysql_query("select * from posted where id=2");

						while($data=mysql_fetch_array($query)){
							echo '<a href=""><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a>';
							echo '<a id="open" href="">'.substr($data['title'],0,60).' ...</a>';
							echo substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="">Read more >><a/></p>';
						}
					?>
				</td>
				<td width="376"><p align="center">
					<?php
						$query=mysql_query("select * from posted where id=3");

						while($data=mysql_fetch_array($query)){
							echo '<a href=""><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a>';
							echo '<a id="open" href="">'.substr($data['title'],0,60).' ...</a>';
							echo substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="">Read more >><a/></p>';
						}
					?>
				</td>
			</tr>
			<tr align="left">
				<td><p align="center">
					<?php
						$query=mysql_query("select * from posted where id=4");

						while($data=mysql_fetch_array($query)){
							echo '<a href=""><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a>';
							echo '<a id="open" href="">'.substr($data['title'],0,60).' ...</a>';
							echo substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="">Read more >><a/></p>';
						}
					?>
				</td>
				<td><p align="center">
					<?php
						$query=mysql_query("select * from posted where id=5");

						while($data=mysql_fetch_array($query)){
							echo '<a href=""><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a>';
							echo '<a id="open" href="">'.substr($data['title'],0,60).' ...</a>';
							echo substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="">Read more >><a/></p>';
						}
					?>
				</td>
				<td><p align="center">
					<?php
						$query=mysql_query("select * from posted where id=6");

						while($data=mysql_fetch_array($query)){
							echo '<a href=""><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a>';
							echo '<a id="open" href="">'.substr($data['title'],0,60).' ...</a>';
							echo substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="">Read more >><a/></p>';
						}
					?>
				</td>
			</tr>
		</table>

	</body>
</html>
