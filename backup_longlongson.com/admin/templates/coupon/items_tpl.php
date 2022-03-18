<script type="text/javascript">
function doEnter(evt){
	// IE					// Netscape/Firefox/Opera
	var key;
	if(evt.keyCode == 13 || evt.which == 13){
		onSearch(evt);
	}
}
function onSearch(evt) {	
		var keyword = document.getElementById("keyword").value;		
		//var encoded = Base64.encode(keyword);
		location.href = "index.php?com=coupon&act=man&keyword="+keyword;
		loadPage(document.location);
			
}

</script>
<script>
$(document).ready(function() {
	$("#chonhet").click(function(){
		var status=this.checked;
		$("input[name='chon']").each(function(){this.checked=status;})
	});

	$("#xoahet").click(function(){
		var listid="";
		$("input[name='chon']").each(function(){
			if (this.checked) listid = listid+","+this.value;
	    	})
		listid=listid.substr(1);	 //alert(listid);
		if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}
		hoi= confirm("Bạn có chắc chắn muốn xóa?");
		if (hoi==true) document.location = "index.php?com=coupon&act=delete&listid=" + listid;
	});

	$('#btnnm').click(function(event) {
		var nm=parseInt($('#nm').val());
		if(nm>100)
		{
			hoi= confirm("Số lượng mã trên 100 bạn có chắc chắn cần tạo không?");
			if (hoi==true)
			{
				window.location.href="index.php?com=coupon&act=add&nm="+nm;	
			}
		}
		else
		{
			window.location.href="index.php?com=coupon&act=add&nm="+nm;	
		}
		
	});
});
</script>
<h3><a href="index.php?com=coupon&act=add">Tạo mã giảm giá</a></h3>
<div style="margin-bottom:5px">
	<input type="number" id="nm" placeHolder="Nhập số lượng mã cần tạo"><input type="button" id="btnnm" value="Tạo" />
</div>
<table class="blue_table">
	<tr>
    <th style="width:5%" align="center"><input type="checkbox" name="chonhet" id="chonhet" /></th>
		<th style="width:20%;">Mã</th>
        <th style="width:20%;">Giảm</th>
        <th style="width:20%;">Ngày bắt đầu</th>
        <th style="width:20%;">Ngày kết thúc</th>
        <th style="width:5%;">Tình trạng</th>
        <th style="width:5%;">Xóa</th>
	</tr>
    
	<?php for($i=0, $count=count($items); $i<$count; $i++){?>
	<tr>
    <td style="width:5%;" align="center"><input type="checkbox" name="chon" id="chon" value="<?=$items[$i]['id']?>" class="chon" /></td>
	
    <td style="width:20%;" align="center"><?=$items[$i]['ma']?></td>
    
    <td style="width:20%;" align="center">
    		<?php
    			## Cap nhat tinh trang het han
    			if($items[$i]['ketthuc']<time())
    			{
    				update_cp_st($items[$i]['id'],3);
    			}

    			if($items[$i]['loai']==0)
    			{
    				echo $items[$i]['phantram'].'%';	
    			}
    			else
    			{
    				echo number_format($items[$i]['phantram'],0,'',',').' VNĐ';
    			}
    		?>
    	
    </td>

    <td style="width:20%;" align="center"><?=date('d-m-Y',$items[$i]['batdau'])?></td>

    <td style="width:20%;" align="center"><?=date('d-m-Y',$items[$i]['ketthuc'])?></td>

    <td style="width:20%;" align="center">
    	<strong>
		<?php
			if($items[$i]['tinhtrang']==0)
			{
				echo '<span style="color:#087111">Chưa sử dụng</span>';	
			}
			elseif($items[$i]['tinhtrang']==1)
			{
				echo '<span style="color:#F00">Đã sử dụng</span>';
			}
			elseif($items[$i]['tinhtrang']==2)
			{
				echo '<span style="color:#F00">Hết hạn</span>';
			}
			else
			{
				echo '<span style="color:#087111">Đã gửi</span>';	
			}
		?>
		</strong>
    </td>
         
	<td style="width:5%;"><a href="index.php?com=coupon&act=delete&id=<?=$items[$i]['id']?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" border="0" /></a></td>
	</tr>
	<?php	}?>
</table>
<a href="index.php?com=coupon&act=add"><img src="media/images/add.jpg" border="0"  /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" id="xoahet"><img src="media/images/delete.jpg" border="0"  /></a>

<div class="paging"><?=$paging['paging']?></div>