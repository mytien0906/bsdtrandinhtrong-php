<section class="content-header">
  <h1>Cập nhật background</h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-body">
                <form name="frm" method="post" action="index.php?com=<?=$_GET['com']?>&act=save" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ảnh hiện tại</label>
                        <div class="col-sm-10">
                            <p>
                                <img src="<?=_upload_hinhanh.$item['bg']?>" alt="" onError="this.src='dist/img/no_image.png';" style="border:1px solid #CCC;max-width:100%;" />
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Background</label>
                        <div class="col-sm-10">
                            <p>
                                <input type="file" name="bg" class="form-control" />
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Hiển thị</label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="hienthi" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tùy chọn lặp</label>
                        <div class="col-sm-10">
                            <select name="data[rp]" class="form-control">
                                <option value="">Repeat</option>
                                <option value="no-repeat" <?php if($item['rp']=="no-repeat"){echo 'selected="selected"';}?>>No-repeat</option>
                                <option value="repeat-x" <?php if($item['rp']=="repeat-x"){echo 'selected="selected"';}?>>Repeat-x</option>
                                <option value="repeat-y" <?php if($item['rp']=="repeat-y"){echo 'selected="selected"';}?>>Repeat-y</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tùy chọn dọc</label>
                        <div class="col-sm-10">
                            <select name="data[y]" class="form-control">
                                <option value="">Normal</option>
                                <option value="top" <?php if($item['y']=="top"){echo 'selected="selected"';}?>>Top</option>
                                <option value="bottom" <?php if($item['y']=="bottom"){echo 'selected="selected"';}?>>Bottom</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tùy chọn ngang</label>
                        <div class="col-sm-10">
                            <select name="data[x]" class="form-control">
                                <option value="">Normal</option>
                                <option value="center" <?php if($item['x']=="center"){echo 'selected="selected"';}?>>Center</option>
                                <option value="left" <?php if($item['x']=="left"){echo 'selected="selected"';}?>>Left</option>
                                <option value="right" <?php if($item['x']=="right"){echo 'selected="selected"';}?>>Right</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tùy chọn cố định</label>
                        <div class="col-sm-10">
                            <select name="data[fix]" class="form-control">
                                <option value="">Normal</option>
                                <option value="fixed" <?php if($item['fix']=="fixed"){echo 'selected="selected"';}?>>Fixed</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Chọn màu</label>
                        <div class="col-sm-9">
                            <div class="input-group my-colorpicker2 colorpicker-element">
                                <input type="text" class="form-control" name="data[color]" value="<?=$item['color']?>">
                                <div class="input-group-addon">
                                    <i style="background-color: rgb(135, 68, 68);"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Hiển thị</label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="hienthi1" <?=(!isset($item['hienthi1']) || $item['hienthi1']==1)?'checked="checked"':''?>>
                        </div>
                    </div>
                    
                    <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" value="Cập nhật" class="btn btn-info" />
                        </div>
                    </div>
                </form>
                </div>
            </div><!-- /.box -->
        </div>
    </div>
</section>
