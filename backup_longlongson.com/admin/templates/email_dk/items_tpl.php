<script type="text/javascript" language="javascript"> 
function setCheckboxes() {
  var act = document.getElementById('checkall').checked;
  var e = document.getElementsByTagName('input');
  var elts_cnt  = (typeof(e.length) != 'undefined') ? e.length : 0;
  if (!elts_cnt) {
    return;
  }
  for (var i = 0; i < elts_cnt; i++) {
    if((e[i].type) == 'checkbox') {
      e[i].checked = (act == 1 || act == 0) ? act : (e[i].checked ? 0 : 1);
    }
  }
}
</script> 

<section class="content-header">
  <h1>Email đăng ký nhận tin</h1>
</section>
<form name="frm_email" method="post" action="index.php?com=email_dk&act=man" enctype="multipart/form-data" class="form-horizontal">
<section class="content">
	<div class="row">
        <div class="col-md-12">
        	<div class="box box-info">
                <div class="box-body">
                	<table class="table table-bordered">
						<tbody>
							<tr>
								<th style="width: 10px">
									<input type="checkbox" name="chonhet" id="chonhet" />
								</th>
								<th style="min-width:150px;">Email</th>
								<th style="min-width:150px;">Tin đăng ký</th>
								<th style="width:30px;">Sửa</th>
								<th style="width:30px;">Xóa</th>
							</tr>
							<?php for($i=0, $count=count($items); $i<$count; $i++){
								$d->reset();
								$sql="select id,ten_vi as ten,tenkhongdau_vi as tenkhongdau,thumb,photo,ngaytao from #_tintuc where hienthi=1 and type='duan' and id=".$items[$i]['chude']." order by stt,id desc limit 0,1";
								$d->query($sql);
								$baiviet=$d->fetch_array();
							?>
							<tr>
								<td>
									<input type="checkbox" name="chon" id="chon" value="<?=$items[$i]['id']?>" class="chon" />
								</td>
								<td>
									<a href="index.php?com=<?=$_GET['com']?>&act=edit&id=<?=$items[$i]['id']?>">
										<?=$items[$i]['email']?>
									</a> 
								</td>
								<td>
									<a href="index.php?com=tintuc&act=edit&type=duan&id=<?=$items[$i]['chude']?>">
										<?=$baiviet['ten']?>
									</a> 
								</td>
								<td>
									<a href="index.php?com=<?=$_GET['com']?>&act=edit&id=<?=$items[$i]['id']?>">
										<i class="fa fa-pencil"></i>
									</a>
								</td>
								<td>
									<a href="index.php?com=email_dk&act=delete&id=<?=$items[$i]['id']?>" onClick="if(!confirm('Xác nhận xóa')) return false;">
										<i class="fa fa-times" style="color:#F00;"></i>
									</a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
	              	</table>
	            </div>
            </div><!-- /.box -->
            <div class="paging"><?=$paging['paging']?></div>
            <div class="box box-info">
                <div class="box-body">
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Tiêu đề</label>
                		<div class="col-sm-10">
                			<input type="text" name="tieude" class="form-control"/>
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">File đính kèm</label>
                		<div class="col-sm-10">
                			<input type="file" name="file" class="form-control" />
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Nội dung</label>
                		<div class="col-sm-10">
                			<textarea name="noidung_email" class="ck_editor" id="noidung_email"></textarea>
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label"></label>
                		<div class="col-sm-10">
                			<input type="submit" name="show_email" id="show_email" value="Gửi" class="btn btn-info" />
	                    </div>
                	</div>
	            </div>
            </div><!-- /.box -->
		</div>
	</div>
</section>
</form>


