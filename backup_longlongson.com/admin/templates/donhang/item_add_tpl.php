<?php
	function tinhtrang($i=0)
	{
		$sql="select * from table_tinhtrang order by id";
		$stmt=mysql_query($sql);
		$str='
			<select id="id_tinhtrang" name="id_tinhtrang" class="form-control" style="margin-top:5px;">					
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
  <h1>Thông tin đơn hàng</h1>
</section>
<section class="content">
	<div class="row">
		<form name="frm" method="post" action="index.php?com=order&act=save" enctype="multipart/form-data" class="form-horizontal">
        <div class="col-md-6">
        	<div class="box box-info">
                <div class="box-header with-border">
                	<h3 class="box-title">Thông tin cá nhân</h3>
                </div>
                <div class="box-body">
            		<label class="col-md-3">
            			Mã đơn hàng
            		</label>
					<div class="col-md-9">
						<?=@$item['madonhang']?>
					</div>
					<div class="clearfix"></div>
					<label class="col-md-3">
            			Họ tên
            		</label>
					<div class="col-md-9">
						<?=@$item['hoten']?>
					</div>
					<div class="clearfix"></div>
					<label class="col-md-3">
            			Điện thoại
            		</label>
					<div class="col-md-9">
						<?=@$item['dienthoai']?>
					</div>
					<div class="clearfix"></div>
					<label class="col-md-3">
            			Email
            		</label>
					<div class="col-md-9">
						<?=@$item['email']?>
					</div>
					<div class="clearfix"></div>
					<label class="col-md-3">
            			Địa chỉ
            		</label>
					<div class="col-md-9">
						<?=@$item['diachi']?>
					</div>
					<div class="clearfix"></div>
					<label class="col-md-3">
            			Yêu cầu
            		</label>
					<div class="col-md-9">
						<?=$item['noidung']?>
					</div>
					<div class="clearfix"></div>
                </div>
            </div><!-- /.box -->
		</div>
		<div class="col-md-6">
        	<div class="box box-info">
                <div class="box-header with-border">
                	<h3 class="box-title">Ghi chú</h3>
                </div>
                <div class="box-body">
            		<label class="col-md-3">
            			Ghi chú
            		</label>
					<div class="col-md-9">
						<textarea name="ghichu" cols="50" rows="5" id="ghichu" class="form-control"><?=@$item['ghichu']?></textarea>
					</div>
					<div class="clearfix"></div>
					<label class="col-md-3" style="margin-top:5px;">
            			Tình trạng
            		</label>
					<div class="col-md-9">
						<p>
							<?=tinhtrang($item['trangthai'])?>
						</p>
					</div>
					<div class="clearfix"></div>
					<label class="col-md-3" style="margin-top:5px;">
            			
            		</label>
					<div class="col-md-9">
						<p>
							<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
							<input type="submit" value="Lưu" class="btn btn-info" />
							<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=order&act=man'" class="btn btn-danger" />
						</p>
					</div>
					<div class="clearfix"></div>
                </div>
            </div><!-- /.box -->
		</div>
		<div class="clearfix"></div>
		<div class="col-md-12">
			<div class="box box-info">
                <div class="box-header with-border">
                	<h3 class="box-title">Thông tin đặt hàng</h3>
                </div>
                <div class="box-body">
            		<?=$item['donhang']?>
                </div>
            </div><!-- /.box -->
		</div>
		<div class="clearfix"></div>
	</form>
	</div>
</section>