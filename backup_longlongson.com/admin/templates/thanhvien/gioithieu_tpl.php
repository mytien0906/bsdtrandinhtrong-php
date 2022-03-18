<?php $tv=get_tv($_GET['id']);?>
<h3>Danh sách thành viên đã được <span style="color:#F00;"><?=$tv['ten']?> [<?=$tv['username']?>]</span> giới thiệu.</h3>
<?php if($tv['id_gioithieu']>0){ $tv1=get_tv($tv['id_gioithieu']);?>
<h3>Thành viên đã được <span style="color:#F00;"><?=$tv1['ten']?> [<?=$tv1['username']?>]</span> giới thiệu.</h3>
<?php }?>
<table class="blue_table">
	<tr>
    	<th style="width:5%" align="center">STT</th>
        <th style="width:35%;">Tên đăng nhập</th>
        <th style="width:40%;">Họ tên</th>
        <th style="width:10%;">Điểm</th>
        <th style="width:5%;">Active</th>
        <th style="width:5%;">VIP</th>
	</tr>
	<?php for($i=0, $count=count($items); $i<$count; $i++){?>
	<tr>
    	<td style="width:5%;" align="center"><?=$i+1?></td>
        <td style="width:35%;"><a href="index.php?com=thanhvien&act=edit&id=<?=$items[$i]['id']?>" style="text-decoration:none;" target="_blank"><?=$items[$i]['username']?></a></td>
        <td style="width:40%;"><a href="index.php?com=thanhvien&act=edit&id=<?=$items[$i]['id']?>" style="text-decoration:none;" target="_blank"><?=$items[$i]['ten']?></a></td>
        <td style="width:10%;"><?=$items[$i]['diem']?></td>
        <td style="width:5%;">
		<?php 
		if(@$items[$i]['hienthi']==1)
		{
		?>
        
        <img src="media/images/active_1.png" border="0" />
		<? 
		}
		else
		{
		?>
         <img src="media/images/active_0.png"  border="0"/>
         <?php
		 }?>      
        </td>
        <td style="width:5%;">
		<?php 
		if(@$items[$i]['vip']==1)
		{
		?>
        
        <strong style="color:#F00;">VIP</strong>
		<? 
		}
		else
		{
		?>
         no
         <?php
		 }?>      
        </td>
	</tr>
	<?php	}?>
    </table>
<div class="paging"><?=$paging['paging']?></div>