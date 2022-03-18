<?php
	function cp_rand()
	{
		$f = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVXYZabcdefghijklmnopqrstuvwxyz", 5)), 0, 3);
		$m=substr(md5(time()),0,3);
		$l=fns_Rand_digit(0,9,3);
		return $f.$m.$l;
	}
	
	function chk_cp($cp)
	{
		global $d;
		
		$d->reset();
		$sql="select id from #_coupon where ma='$cp'";
		$d->query($sql);
		$tmp=$d->fetch_array();
		
		if($tmp['id']!="")
		{
			return 1;	
		}	
		else
		{
			return 0;	
		}
	}

	if((int)$_REQUEST['nm']>0)
	{
		$nm=$_REQUEST['nm'];
	}
	else
	{
		$nm=20;
	}
?>

<h3>Mã coupon</h3>
<form name="frm" method="post" action="index.php?com=coupon&act=save&curPage=<?=$_REQUEST['curPage']?>&nm=<?=$nm?>" enctype="multipart/form-data" class="nhaplieu">	 
<?php if($_REQUEST['act']=="add"){?>
	<select name="loai">
		<option value="0">%</option>
		<option value="1">VNĐ</option>
	</select>
    <b>Loại giảm:</b> <input type="text" name="phantram" class="input" /><br /><br />
    <b>Ngày bắt đầu:</b> <input type="text" name="batdau" id="batdau" class="input" /><br /><br />
	<b>Ngày kết thúc:</b> <input type="text" name="ketthuc" id="ketthuc" class="input" /><br /><br />	<?php 
		for($i=0;$i<$nm;$i++){
			$ck=1;
			while($ck!=0)
			{
				$ma=cp_rand();
				$ck=chk_cp($ma);
			}

	?>
    	<b>Mã <?=$i+1?>:</b><strong><?=$ma?></strong><br />
    	<input type="hidden" name="ma<?=$i?>" value="<?=$ma?>"/>
    <?php }?>
<?php }elseif($_REQUEST['act']=="edit"){?>
	<b>Mã:</b><strong><?=$item['ma']?></strong><br />
	<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />	
    <b>Phần trăm giảm:</b> <input type="text" name="phantram" value="<?=@$item['phantram']?>" class="input" /><br /><br />
<?php }?>
	
   	<input type="submit" value="Lưu" class="btn" />
	<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=coupon&act=man'" class="btn" />
</form>

<script>
  $(function() {
    $( "#batdau" ).datepicker({"dateFormat": "dd-mm-yy" });
    $( "#ketthuc" ).datepicker({"dateFormat": "dd-mm-yy" });
  });
</script>