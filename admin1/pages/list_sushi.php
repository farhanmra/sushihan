<?php
if($_GET['kd']==1){
	$sql_query="SELECT * FROM barang WHERE jenis = 'standar'";
}else if($_GET['kd']==2){
	$sql_query="SELECT * FROM barang WHERE jenis = 'large'";
}else{
$sql_query="SELECT * FROM barang";
}
$result_set=mysql_query($sql_query);
while($row=mysql_fetch_row($result_set))
{
	$no++
?>
		<tr>
		<td align = "center"><?php echo $no; ?></td>
		<td align = "center"><img src = "../../<?php echo $row[3]; ?>"  width="80px" height="80px" ></td>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
		<td align="center"><a href="javascript:edit1_id('<?php echo $row[0]; ?>')"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>&nbsp;<a href="javascript:delete1_id('<?php echo $row[0]; ?>')"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></td>
		</tr>
		<?php
}
?>
