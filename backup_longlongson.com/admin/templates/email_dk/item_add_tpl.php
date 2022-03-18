<?php
  $d->reset();
  $sql="select id,ten_vi as ten,tenkhongdau_vi as tenkhongdau,thumb,photo,ngaytao from #_tintuc where hienthi=1 and type='duan' and id=".$item['chude']." order by stt,id desc limit 0,1";
  $d->query($sql);
  $baiviet=$d->fetch_array();
?>

  <section class="content-header">
    <h1>Quản lý Email</h1>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-body">
            <form name="frm" method="post" action="index.php?com=<?=$_GET['com']?>&act=save&type=<?=$type?>" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-2 control-label">Họ & Tên</label>
                <div class="col-sm-10">
                  <input type="text" name="data[ten]" class="form-control" value="<?=@$item['ten']?>"/>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" name="data[email]" class="form-control" value="<?=@$item['email']?>"/>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Điện thoại</label>
                <div class="col-sm-10">
                  <input type="text" name="data[dienthoai]" class="form-control" value="<?=@$item['dienthoai']?>"/>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Tin nhận</label>
                <div class="col-sm-10">
                  <input type="text" name="data[dienthoai]" class="form-control" value="<?=$baiviet['ten']?>"/>
                </div>
              </div>
              <!-- <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
              <input type="hidden" name="data[type]" value="<?=$type?>" />
              <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                  <input type="submit" value="Lưu" class="btn btn-info" />
                  <input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=<?=$_GET['com']?>&act=man&type=<?=$type?>'" class="btn btn-danger" />
                </div>
              </div> -->
            </form>
          </div>
        </div><!-- /.box -->
      </div>
    </div>
  </section>
