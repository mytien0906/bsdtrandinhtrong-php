<?php
	$mstt=get_stt_type('product',$type);

	function get_level($i,$id,$idl)
	{
		global $d;

		(int)$i;

		if($i>0)
		{
			$ssql=" and id_lv".($i-1)."='$idl'";
		}

		$d->reset();
		$sql="select id,ten_vi as ten from #_product_list where level='$i' and type='".$_GET['type']."' $ssql order by stt,id desc";
		$d->query($sql);
		$res=$d->result_array();

		
		$str='<select name="data[id_lv'.$i.']" id="level'.$i.'" class="level_change form-control" style="max-width:100%;" data-lv="'.$i.'">';
		$str.='<option value="">Chọn danh mục cấp '.($i+1).'</option>';
		for ($i=0; $i < count($res); $i++) { 
			if($res[$i]['id']==$id)
			{
				$sl='selected="selected"';
			}
			$str.='<option value="'.$res[$i]['id'].'" '.$sl.'>'.$res[$i]['ten'].'</option>';
			$sl='';
		}
		$str.='</select>';		
		return $str;
	}

    function get_main_thuonghieu($id)
    {
        global $d;

        $d->reset();
        $sql="select id,ten_vi as ten from #_product_thuonghieu order by stt,id desc";
        $d->query($sql);
        $res=$d->result_array();

        
        $str='<select name="data[id_thuonghieu]" class="form-control" style="max-width:100%;">';
        $str.='<option value="">Chọn thương hiệu</option>';
        for ($i=0; $i < count($res); $i++) { 
            if($res[$i]['id']==$id)
            {
                $sl='selected="selected"';
            }
            $str.='<option value="'.$res[$i]['id'].'" '.$sl.'>'.$res[$i]['ten'].'</option>';
            $sl='';
        }
        $str.='</select>';      
        return $str;
    }
?>

<section class="content-header">
  <h1>Thêm sản phẩm</h1>
</section>
<section class="content">
	<div class="row">
        <div class="col-md-12">
        	<div class="box box-info">
                <div class="box-body">
                <form name="frm" method="post" action="index.php?com=<?=$_GET['com']?>&act=save&type=<?=$type?>" enctype="multipart/form-data" class="form-horizontal">
                	<div class="form-group">
                        <label class="col-sm-2 control-label">Thương hiệu</label>
                        <div class="col-sm-10">
                            <p>
                                <?=get_main_thuonghieu($item['id_thuonghieu'])?>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
						<?php for ($i=0; $i < $config['type'][$type]['level']; $i++) {?>
						<label class="col-sm-2 control-label">Danh mục cấp <?=$i+1?></label>
						<div class="col-sm-10">
							<p>
								<?=get_level($i,$item['id_lv'.$i],$item['id_lv'.($i-1)])?>
							</p>
						</div>
						<?php } ?>
                	</div>
                    <?php if($config['type'][$type]['photo'] || $config['type'][$type]['thumb']){ ?>
					<div class="form-group">
                		<label class="col-sm-2 control-label">Ảnh hiện tại</label>
                		<div class="col-sm-10">
                			<p>
	                        	<img src="<?=_upload_product.$item['thumb']?>" alt="" onError="this.src='dist/img/no_image.png';" style="border:1px solid #CCC;" />
	                        </p>
	                    </div>
                	</div>
                	<div class="form-group">
                		<label class="col-sm-2 control-label">Chọn ảnh</label>
                		<div class="col-sm-6">
                			<p>
	                        	<input type="file" name="file" class="form-control" />
	                        </p>
	                    </div>
                        <div class="col-sm-4">
                            <p>
                                Tỉ lệ: <strong><?=$config['type'][$type]['thumb_width']?>px</strong> x <strong><?=$config['type'][$type]['thumb_height']?>px</strong>
                            </p>
                        </div>
	                </div>
                    <?php } ?>
	                <?php if($config['type'][$type]['multi_photo']==true){ ?>
					<div class="form-group">
                		<label class="col-sm-2 control-label">Album ảnh</label>
                		<div class="col-sm-10">
                			<a class="file_input" data-jfiler-name="files" data-jfiler-extensions="jpg, jpeg, png, gif"><i class="fa fa-paperclip"></i> Thêm hình ảnh</a>                
	                    </div>
	                </div>
	                <?php if($act=='edit'){?>
				      <?php if(count($list_trichdoan)!=0){?>
					      <div class="form-group">
	                		<label class="col-sm-2 control-label">Album hiện tại</label>
	                		<div class="col-sm-10">
	                			<div class="clearfix">
	                			<?php for($i=0;$i<count($list_trichdoan);$i++){?>
					              <div class="item_trich trich<?=$list_trichdoan[$i]['id']?>">
					                  <img class="img_trich"  src="<?=_upload_product.$list_trichdoan[$i]['thumb']?>" />
					                  <a href="javascript:void(0)" class="icon-jfi-trash jFiler-item-trash-action change_stt" rel="<?=$list_trichdoan[$i]['id']?>"></a>
					                  <div id="loader<?=$list_trichdoan[$i]['id']?>" class="loader_trich"><img src="../img/loader.gif" /></div>
					              </div>
					            <?php }?>
					            </div>
		                    </div>
		                </div>
				      <?php }?>
				    <?php }?>
	                <?php } ?>
                    <?php if($type!='duan'){ ?>
                    <div class="form-group">
                		<label class="col-sm-2 control-label">Giá</label>
                		<div class="col-sm-10">
                			<input type="text" name="data[gia]" class="form-control" value="<?=$item['gia']?>" />
	                    </div>
	                </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Giá khuyến mãi</label>
                        <div class="col-sm-10">
                            <input type="text" name="data[giakm]" class="form-control" value="<?=$item['giakm']?>" />
                        </div>
                    </div>
	                <div class="form-group">
                		<label class="col-sm-2 control-label">Mã sản phẩm</label>
                		<div class="col-sm-10">
                			<input type="text" name="data[masp]" class="form-control" value="<?=$item['masp']?>" />
	                    </div>
	                </div>
                    <?php } ?>
                    <?php if($type!='product'){ ?>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Link</label>
                        <div class="col-sm-10">
                            <input type="text" name="data[link]" class="form-control" value="<?=$item['link']?>" />
                        </div>
                    </div>
                    <?php } ?>
					
                	<ul class="nav nav-tabs" style="margin-left:0px; margin-bottom:15px;">
                		<?php $i=1; foreach ($config['use_lang'] as $key => $value) {?>
							<li <?=($i==1)?'class="active"':''?>>
								<a href="#tab<?=$i?>" data-toggle="tab" aria-expanded="true">
									<?=$config['name_lang'][$key]?>
								</a>
							</li>		
						<?php $i++;} ?>
	                </ul>
	                <div class="tab-content">
	                	<?php $i=1; foreach ($config['use_lang'] as $key => $value) {?>
                        <div class="tab-pane <?php if($i==1){echo ' active';} ?>" id="tab<?=$i?>">
							<div class="form-group">
		                		<label class="col-sm-2 control-label">Tên<?=$value?></label>
		                		<div class="col-sm-10">
		                			<input type="text" name="data[ten_<?=$key?>]" class="form-control" value="<?=@$item['ten_'.$key]?>"/>
			                    </div>
		                	</div>
                            <?php if($type!='gachmen' && $type!='mamau' && $type!='phuongphapphoimau'){ ?>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Title<?=$value?></label>
		                		<div class="col-sm-10">
	                		    	<input type="text" name="data[title_<?=$key?>]" class="form-control" value="<?=@$item['title_'.$key]?>"/>
			                    </div>
		                	</div>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Keywords<?=$value?></label>
		                		<div class="col-sm-10">
		                			<input type="text" name="data[keywords_<?=$key?>]" class="form-control" value="<?=@$item['keywords_'.$key]?>"/>
			                    </div>
		                	</div>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Description<?=$value?></label>
		                		<div class="col-sm-10">
		                			<input type="text" name="data[description_<?=$key?>]" class="form-control" value="<?=@$item['description_'.$key]?>"/>
			                    </div>
		                	</div>
                            <?php if($type=='product'){ ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Xuất xứ<?=$value?></label>
                                <div class="col-sm-10">
                                    <input type="text" name="data[congdung_<?=$key?>]" class="form-control" value="<?=@$item['congdung_'.$key]?>"/>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="form-group">
		                		<label class="col-sm-2 control-label">Mô tả<?=$value?></label>
		                		<div class="col-sm-10">
		                			<textarea name="data[mota_<?=$key?>]" class="form-control ck_editor" rows="5" id="ckm<?=$i?>"><?=@$item['mota_'.$key]?></textarea>
			                    </div>
		                	</div>
		                	<div class="form-group">
		                		<label class="col-sm-2 control-label">Nội dung<?=$value?></label>
		                		<div class="col-sm-10">
		                			<textarea id="noidung_<?=$key?>" name="data[noidung_<?=$key?>]" class="form-control ck_editor" id="ck<?=$i?>" rows="5"><?=@$item['noidung_'.$key]?></textarea>
			                    </div>
		                	</div>
                            <?php } ?>
						</div>
	                    <?php $i++;} ?>
                    </div>
                    <div class="form-group">
                		<label class="col-sm-2 control-label">Số thứ tự</label>
                		<div class="col-sm-10">
                			<input type="text" name="data[stt]" value="<?=isset($item['stt'])?$item['stt']:$mstt?>" class="form-control" style="width:40px; text-align:center;">
	                    </div>
                	</div>
                    <div class="form-group">
                		<label class="col-sm-2 control-label">Hiển thị</label>
                		<div class="col-sm-10">
    						<input type="checkbox" name="hienthi" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>>
	                    </div>
                	</div>

	                <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
					<input type="hidden" name="data[type]" value="<?=$type?>" />
                    <input type="hidden" name="data[tinhtrang]" value="1" />
					<div class="form-group">
                		<label class="col-sm-2 control-label"></label>
                		<div class="col-sm-10">
    						<input type="submit" value="Lưu" class="btn btn-info" />
							<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=<?=$_GET['com']?>&act=man&type=<?=$type?>'" class="btn btn-danger" />
	                    </div>
                	</div>
				</form>
                </div>
            </div><!-- /.box -->
		</div>
	</div>
</section>

<script type="text/javascript">
	$('.level_change').change(function(event) {
		var max_c=<?=$config['type'][$type]['level']?>;
		var lv=parseInt($(this).attr('data-lv'));
		var id=$(this).val();
		var lv1=lv+1;
		if(lv<(max_c-1))
		{
			$('#level'+lv1).load('ajax/load_level.php?com=<?=$_GET['com']?>&level=<?=$config['type'][$type]['level']?>&type=<?=$_GET['type']?>&id='+id+'&lv='+lv);	
		}
	});
</script>

<script>
    $(document).ready(function() {
      $(".change_stt").click(function(event) {
          var r = confirm("Are you sure you want to remove this file ?");
          if (r == true) {
              var id=$(this).attr("rel");
              $('#loader'+id).css('display', 'block');
              jQuery.ajax({
                type: 'POST',
                url: 'ajax/ajax_al.php',
                data: {'id':id},
                success: function(data) {
                  $('#loader'+id).css('display', 'none');
                  jQuery('.trich'+id).remove();
                }
              });
          } else {
              return false;
          }
          
      });
    });
</script>
<script>
  $(document).ready(function() {
    $('.file_input').filer({
            showThumbs: true,
            templates: {
                box: '<ul class="jFiler-item-list"></ul>',
                item: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li><span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span></li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
                itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: true,
                removeConfirmation: true,
                _selectors: {
                    list: '.jFiler-item-list',
                    item: '.jFiler-item',
                    progressBar: '.bar',
                    remove: '.jFiler-item-trash-action',
                }
            },
            addMore: true
        });
  });
</script>
<style>
    .file_input{
        display: inline-block;
        padding: 10px 16px;
        outline: none;
        cursor: pointer;
        text-decoration: none;
        text-align: center;
        white-space: nowrap;
        font-family: sans-serif;
        font-size: 11px;
        font-weight: bold;
        border-radius: 3px;
        color: #008BFF;
        border: 1px solid #008BFF;
        vertical-align: middle;
        background-color: #fff;
        margin-bottom: 10px;
        box-shadow: 0px 1px 5px rgba(0,0,0,0.05);
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        transition: all 0.2s;
    }
    .file_input:hover,
    .file_input:active {
        background: #008BFF;
        color: #fff;
        text-decoration: none;
    }
	.item_trich{ height:100px; float:left; margin-right:5px; border:1px solid #CCC; padding:5px; position:relative; margin-bottom:5px;}
	.item_trich img{ height: 100%;}
	.change_stt{ position:absolute; bottom:0px; right:0px; z-index:999; background:#FFF; padding:5px;}
	.loader_trich{ display:none; position:absolute; top:37px; left:37px;}
</style>