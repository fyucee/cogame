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
							echo '<a id="open" href="">'.substr($data['title'],0,44).' ...</a>';
							echo substr($data['isi'], 0,300).' ...</p>';
						}
					?>
				</td>
				<td width="376"><p align="center">
					<?php
						$query=mysql_query("select * from posted where id=2");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="">'.substr($data['title'],0,44).' ...</a>';
							echo substr($data['isi'], 0,300).' ...</p>';
						}
					?>
				</td>
				<td width="376"><p align="center">
					<?php
						$query=mysql_query("select * from posted where id=3");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="">'.substr($data['title'],0,44).' ...</a>';
							echo substr($data['isi'], 0,300).' ...</p>';
						}

						mysql_close();
					?>
				</td>
			</tr>
			<tr align="left">
				<td>
				</td>
				<td>
				</td>
				<td>
				</td>
			</tr>
		</table>

	</body>
</html>
