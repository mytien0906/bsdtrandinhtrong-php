<h3><a href="index.php?com=user&act=add">Thêm thành viên</a></h3>

<table class="blue_table">
	<tr>
		<th>Stt</th>
		<th>Tên tài khoản</th>
		<th>Email</th>
        <th>Chức năng</th>
		<th>Hiển thị</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php for($i=0, $count=count($items); $i<$count; $i++){?>
	<tr>
		<td style="width:5%;"><?=$i+1?></td>
		<td style="width:40%;"><?=$items[$i]['username']?></td>
		<td style="width:20%;"><?=$items[$i]['email']?></td>
        <td style="width:20%;">
		<?php
		$sql_danhmuc1="select ten from table_user_group where id='".$items[$i]['role']."'";
		$result=mysql_query($sql_danhmuc1);
	 	$item_danhmuc1 =mysql_fetch_array($result);
	 	echo @$item_danhmuc1['ten'];
		?></td>
		<td style="width:5%;"><?php if(@$items[$i]['hienthi']){?><img src="media/images/active_1.png" /><? }?></td>
		<td style="width:5%;"><a href="index.php?com=user&act=edit&id_group=<?=$items[$i]['role']?>&id=<?=$items[$i]['id']?>"><img src="media/images/edit.png" /></a></td>
		<td style="width:5%;"><?php if($items[$i]['username']=="admin"){?>No<?php }else{?><a href="index.php?com=user&act=delete&id=<?=$items[$i]['id']?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" /></a><?php }?></td>
	</tr>
	<?php	}?>
</table>
<a href="index.php?com=user&act=add"><img src="media/images/add.jpg" border="0"  /></a>
<div class="paging"><?=$paging['paging']?></div>