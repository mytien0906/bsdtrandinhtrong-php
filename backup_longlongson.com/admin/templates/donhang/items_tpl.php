<?php

	function get_main_tv()
	{
		$sql="select * from table_thanhvien order by id desc";
		$stmt=mysql_query($sql);
		$str='
			<select id="id_tv" name="id_tv" class="main_font" onchange="select_onchange()" style="max-width:150px;">
			<option>Chọn thành viên</option>			
			';
		while ($row=@mysql_fetch_array($stmt)) 
		{
			if($row["id"]==(int)@$_REQUEST["id_tv"])
				$selected="selected";
			else 
				$selected="";
			$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten"].' ['.$row["username"].']</option>';			
		}
		$str.='</select>';
		return $str;
	}	
?>

<script language="javascript">
	function select_onchange()
	{				
		var a=document.getElementById("id_tv");
		window.location ="index.php?com=order&act=man&id_tv="+a.value;	
		return true;
	}
			function displayWin(url,name,width,height) {
				var _left = (screen.width - width)/2;
				var _top = (screen.height - height)/2;
				newWin = window.open(url,name,'width=' + width + ',height=' + height + ',left=' + _left + ',top=' + _top + ',location=no,menubar=no,resizable=1,scrollbars=1,status=no,toolbar=0');
				if (newWin) newWin.focus();
			}								
</script>
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
		var price = document.getElementById("price").value;
		var tinhtrang = document.getElementById("id_tinhtrang").value;
		var ngaytao = document.getElementById("ngaytao").value;
		//var encoded = Base64.encode(keyword);
		location.href = "index.php?com=order&act=man&keyword="+keyword+"&price="+price+"&tinhtrang="+tinhtrang+"&ngaytao="+ngaytao;
		loadPage(document.location);
			
}

</script>
<?php
	function tinhtrang($i=0)
	{
		$sql="select * from table_tinhtrang order by id";
		$stmt=mysql_query($sql);
		$str='
			<select id="id_tinhtrang" name="id_tinhtrang" class="form-control"><option value="0">Chọn tình trạng</option>					
			';
		while ($row=@mysql_fetch_array($stmt)) 
		{
			if($row["id"]==$i)
				$selected="selected";
			else 
				$selected="";
			$str.='<option value='.$row["id"].' '.$selected.'>'.$row["trangthai"].'</option>';			
		}
		$str.='</select>';
		return $str;
	}
?>
<section class="content-header">
  <h1>Quản lý đơn hàng</h1>
</section>
<div class="col-md-12" style="margin:10px 0px;">
	<div class="col-md-2">
		<input name="keyword" id="keyword" type="text" value="<?=$_GET['keyword']?>" onkeypress="doEnter(event)" class="form-control" placeHolder="Nhập từ khóa..." />
	</div>
	<div class="col-md-3">
		<?=tinhtrang((int)$_GET['tinhtrang'])?>
	</div>
	<div class="col-md-2">
		<select name="price" id="price" class="form-control">
			<option value="0">Chọn mức tiền</option>
		    <option value="1" <?php if($_GET['price']==1){echo 'selected';}?>>0 - 3.000.000 VNĐ</option>
		    <option value="2"<?php if($_GET['price']==2){echo 'selected';}?>>3.000.000 VNĐ - 7.000.000 VNĐ</option>
		    <option value="3"<?php if($_GET['price']==3){echo 'selected';}?>>7.000.000 VNĐ - 10.000.000 VNĐ</option>
		    <option value="4"<?php if($_GET['price']==4){echo 'selected';}?>>&gt; 10.000.000 VNĐ</option>
		</select> 
	</div>
	<div class="col-md-3">
		<input type="date" id="ngaytao" value="<?=$_GET['ngaytao']?>" class="form-control"/>
	</div>
	<div class="col-md-2">
		<input type="button" value="Tìm"  onclick="onSearch(event)" class="btn btn-success"/>
		<input type="button" value="Hủy"  onclick="window.location.href='index.php?com=order&act=man'" class="btn btn-danger"/>
	</div>
	<div class="clearfix"></div>
</div>
<section class="content">
	<div class="row">
        <div class="col-md-12">
        	<div class="box box-info">
                <table class="table table-bordered">
					<tbody>
						<tr>
							<th style="width:100px;">Mã đơn hàng</th>
							<th>Họ tên</th>
							<th>Ngày đặt</th>
							<th>Số tiền</th>
							<th>Tình trạng</th>
							<th style="width:30px;">Sửa</th>
							<th style="width:30px;">Xóa</th>
						</tr>
						<?php for($i=0, $count=count($items); $i<$count; $i++){ $tongthu=$tongthu+$items[$i]['tonggia'];?>
						<tr>
							<td>
								<a href="index.php?com=order&act=edit&id=<?=$items[$i]['id']?>">
									<?=$items[$i]['madonhang']?>
								</a>
							</td>
							<td>
								<a href="index.php?com=order&act=edit&id=<?=$items[$i]['id']?>">
									<?=$items[$i]['hoten']?>
								</a>
							</td>
							<td>
								<a href="index.php?com=order&act=edit&id=<?=$items[$i]['id']?>">
									<?=date('d/m/Y',$items[$i]['ngaytao'])?>
								</a>
							</td>
							<td>
								<a href="index.php?com=order&act=edit&id=<?=$items[$i]['id']?>">
									<?=number_format($items[$i]['tonggia'],0, ',', '.')?>đ
								</a>
							</td>
							<td>
								<a href="index.php?com=order&act=edit&id=<?=$items[$i]['id']?>">
								<?php
									$d->reset(); 
							   		$sql="select trangthai from #_tinhtrang where id= '".$items[$i]['trangthai']."' ";
									$d->query($sql);
									$result=$d->fetch_array();
									if($result['trangthai']=='Mới đặt')
									{
										echo '<span style="color:#F00">'.$result['trangthai'].'</span>';
									}
									else if($result['trangthai']=='Đã giao')
									{
										echo '<span style="color:#00F">'.$result['trangthai'].'</span>';
									}
									else
									{
										echo $result['trangthai'];
									}
							   ?>
								</a>
							</td>
							<td>
								<a href="index.php?com=order&act=edit&id=<?=$items[$i]['id']?>">
									<i class="fa fa-pencil"></i>
								</a>
							</td>
							<td>
								<a href="index.php?com=order&act=delete&id=<?=$items[$i]['id']?>" onClick="if(!confirm('Xác nhận xóa')) return false;">
									<i class="fa fa-times" style="color:#F00;"></i>
								</a>
							</td>
						</tr>
						<?php } ?>
						<tr>
							<td colspan="3" style="text-align:right;">
								<strong>Tổng giá trị danh sách</strong>
							</td>
							<td colspan="4">
								<strong><?=number_format ($tongthu,0,",",".")."đ";?></strong>
							</td>
						</tr>
					</tbody>
              	</table>
            </div><!-- /.box -->
            <div class="paging"><?=$paging['paging']?></div>
		</div>
	</div>
</section>
