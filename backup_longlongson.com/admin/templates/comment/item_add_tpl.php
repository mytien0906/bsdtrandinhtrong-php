<?php
$mstt=get_stt('comment');
?>

<section class="content-header">
  <h1>Thông tin bình luận</h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-body">
                    <form name="frm" method="post" action="index.php?com=comment&act=save&curPage=<?=$_REQUEST['curPage']?>" enctype="multipart/form-data" class="nhaplieu form-horizontal">
                        <h3>Thông tin bình luận</h3>
                        <div class="tab-content">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Họ tên</label>
                                <div class="col-sm-10">
                                 <?=@$item['hoten']?>
                             </div>
                         </div>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                             <?=@$item['email']?>
                         </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Nội dung</label>
                        <div class="col-sm-10">
                         <?=@$item['noidung']?>
                     </div>
                 </div>
                 <br />
                 <h3>Trả lời</h3>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Họ tên</label>
                    <div class="col-sm-10">
                        <input type="text" name="hoten" class="form-control" value="Admin" />

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nội dung</label>
                    <div class="col-sm-10">
                        <textarea  name="noidung" class="form-control "  rows="5"></textarea>
                    </div>
                </div>
            </div>

            <div style="display:none;">  
               <b>Số thứ tự</b> <input type="text" name="stt" value="<?=isset($item['stt'])?$item['stt']:$mstt?>" style="width:30px"><br>
               <b>Hiển thị tin</b> <input type="checkbox" name="hienthi" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>><br /><br /></div>
           
            
            <input type="hidden" name="pid" id="id" value="<?=@$item['id']?>" />
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    
                    <input type="submit" value="Lưu" class="btn" />
                    <input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=comment&act=man'" class="btn" />
                </div>
            </div>
        </form>
    </div>
</div><!-- /.box -->
</div>
</div>
</section>
