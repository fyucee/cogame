<html>
	<body>
		<?php
			include("config.php");
		?>
			<tr align="left">
				<td width="376">
					<?php
						$query=mysql_query("select * from posted");

						while($data=mysql_fetch_array($query)){
							echo $data['title'];
							echo $data['isi'];
						}
						
						mysql_close();
					?>
				</td>
				<td width="376">
				</td>
				<td width="376">
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
