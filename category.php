<html>
	<body>
		<?php
			include("config.php");
		?>
			<tr align="left">
				<td width="376"><p align="center">
					<?php
						$query_total=mysql_query("select * from posted where cat like '%".$_GET['category']."%'");
						
						$row=mysql_num_rows($query_total);
						$pageTotal=ceil($row/6);

						if(!isset($_GET['page'])){
							$page=1;	
						}else if($_GET['page']<1){
							$page=1;
						}else if ($_GET['page']>$pageTotal){
							$page=$pageTotal;
						}else{
							$page=$_GET['page'];
						}
						$x=$page*6;

						$query=mysql_query("select * from posted where cat like '%".$_GET['category']."%' order by postdate desc limit ".($x-6).",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a><br>';
							echo '<p align="justify">'.substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="page.php?title='.$data['title'].'&index='.$data['id'].'">Read more >><a/></p>';
							$x+=1;
						}
					?>
				</td>
				<td width="376"><p align="center">
					<?php
						$query=mysql_query("select * from posted where cat like '%".$_GET['category']."%' order by postdate desc limit ".($x-5).",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a><br>';
							echo '<p align="justify">'.substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="page.php?title='.$data['title'].'&index='.$data['id'].'">Read more >><a/></p>';
							$x+=1;
						}
					?>
				</td>
				<td width="376"><p align="center">
					<?php
						$query=mysql_query("select * from posted where cat like '%".$_GET['category']."%' order by postdate desc limit ".($x-4).",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a><br>';
							echo '<p align="justify">'.substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="page.php?title='.$data['title'].'&index='.$data['id'].'">Read more >><a/></p>';
							$x+=1;
						}
					?>
				</td>
			</tr>
			<?php
				if($row>3){
					echo '<tr><td height="25" colspan="3"></td></tr>';
				}
			?>
			<tr align="left">
				<td width="376"><p align="center">
					<?php
						$query=mysql_query("select * from posted where cat like '%".$_GET['category']."%' order by postdate desc limit ".($x-3).",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a><br>';
							echo '<p align="justify">'.substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="page.php?title='.$data['title'].'&index='.$data['id'].'">Read more >><a/></p>';
							$x+=1;
						}
					?>
				</td>
				<td width="376"><p align="center">
					<?php
						$query=mysql_query("select * from posted where cat like '%".$_GET['category']."%' order by postdate desc limit ".($x-2).",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a><br>';
							echo '<p align="justify">'.substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="page.php?title='.$data['title'].'&index='.$data['id'].'">Read more >><a/></p>';
							$x+=1;
						}
					?>
				</td>
				<td width="376"><p align="center">
					<?php
						$query=mysql_query("select * from posted where cat like '%".$_GET['category']."%' order by postdate desc limit ".($x-1).",1");

						while($data=mysql_fetch_array($query)){
							echo '<a id="open" href="page.php?title='.$data['title'].'&index='.$data['id'].'">'.substr($data['title'],0,60).' ...</a>';
							echo '<a href="page.php?title='.$data['title'].'&index='.$data['id'].'"><img id="posted" src="data:image/jpeg;base64,'.base64_encode( $data['image'] ).'"/></a><br>';
							echo '<p align="justify">'.substr($data['isi'], 0,300).' ...</p><p align="right"><a id="next" href="page.php?title='.$data['title'].'&index='.$data['id'].'">Read more >><a/></p>';
						}
					?>
				</td>
			</tr>
			<tr>
				<td><p align="left">
					<?php
						if($page>1){
							echo "<a id='title' href='index.php?category=".$_GET['category']."&page=".($page-1)."'><font size='7'>Back</font></a>";
						}
					?>
				</td>
				<td></td>
				<td><p align="right">
					<?php
						if($page<$pageTotal){
							echo "<a id='title' href='index.php?category=".$_GET['category']."&page=".($page+1)."'><font size='7'>Next</font></a>";
						}
					?>
				</td>
			</tr>
		</table>

	</body>
</html>
