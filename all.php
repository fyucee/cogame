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
							echo '<a id="open" href="">'.$data['title'].'</a>';
							echo $data['isi'];
						}
					?>
				</td>
				<td width="376"><p align="center">
					<?php
						$query=mysql_query("select * from posted where id=2");

						while($data=mysql_fetch_array($query)){
							$title=mysql_fetch_lengths($query);
							echo '<a id="open" href="">';

							for(int i=0;i<100;i++){
								echo $title[i]; 
							}

							echo '</a>';
							echo $data['isi'];
						}
					?>
				</td>
				<td width="376"><p align="center">
					<?php
						$query=mysql_query("select * from posted where id=3");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="">'.$data['title'].'</a>';
							echo $data['isi'];
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
