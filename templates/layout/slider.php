<?php
    $d->reset();
    $sql = "select photo_vi as photo, mota_$lang as mota, link,ten_$lang as ten from #_photo where hienthi=1 and com='slider' order by stt asc,id desc";
    $d->query($sql);
    $slider = $d->result_array();
?>
<section id="slider-top" class="clearfix">
    <div class="container">
        <div class="box-slider">
            <div class="slider-left" id="searchid">
                <div class="head-search">
                    <h4>Công cụ tìm kiếm</h4>
                </div>
                <div class="tab-search">
                    <span class="active" data-id="65">Nhà đất <br/> bán</span>
                    <span data-id="60">Nhà đất <br/> cho thuê</span>
                </div>
                <div class="box-searchnc">
                    <form name="box-search" id="box-search" method="get" action="index.php">
                        <input type="hidden" name="com" value="search">
                        <input type="text" name="keyword" id="keyword" class="text-search input-control f-left bx-border" value="<?=$_GET['keyword']?>" placeholder="<?=_search?>">
                        <?php /* <select name="id_list" id="id_list">
                            <option value="0">Danh mục cấp 1</option>
                            <?php foreach ($sanpham_menu as $k => $v) { ?>
                            <option value="<?=$v['id']?>" <?=($_GET['id_list']==$v['id']) ? 'selected':''?>><?=$v['ten']?></option>
                            <?php } ?>
                        </select>*/?>
                        <?php
                            if(!empty($_GET['id_cat'])){
                                $sanpham_catsearch = get_result_array("select tenkhongdau,id,ten_$lang as ten,type,checkgia from #_baiviet_cat where hienthi=1 and id_list='".(int)$_GET['id_list']."' and type='san-pham' order by stt asc,id desc");
                            }
                        ?>
                        <select name="id_cat" id="id_cat">
                            <option value="0">Chọn loại nhà đất</option>
                            <?php if(!empty($_GET['id_cat'])){ foreach ($sanpham_catsearch as $k => $v) { ?>
                            <option value="<?=$v['id']?>" <?=($_GET['id_cat']==$v['id']) ? 'selected':''?>><?=$v['ten']?></option>
                            <?php } } ?>
                        </select>
                        <?php /*<?php
                            if(!empty($_GET['id_item'])){
                                $sanpham_itemsearch = get_result_array("select tenkhongdau,id,ten_$lang as ten,type,checkgia from #_baiviet_item where hienthi=1 and id_cat='".(int)$_GET['id_cat']."' and type='san-pham' order by stt asc,id desc");
                            }
                        ?>
                        <select name="id_item" id="id_item">
                            <option value="0">Danh mục cấp 3</option>
                            <?php if(!empty($_GET['id_item'])){ foreach ($sanpham_itemsearch as $k => $v) { ?>
                            <option value="<?=$v['id']?>" <?=($_GET['id_item']==$v['id']) ? 'selected':''?>><?=$v['ten']?></option>
                            <?php } } ?>
                        </select>*/?>
                        <select name="id_city" id="id_city">
                            <option value="0">Tỉnh / thành</option>
                            <?php foreach ($tinh_binhdinh as $k => $v) { ?>
                            <option value="<?=$v['id']?>" <?=($_GET['id_city']==$v['id'] || $v['id']==14) ? 'selected':''?>><?=$v['ten']?></option>
                            <?php } ?>
                        </select>
                        <select name="id_dist" id="id_dist">
                            <option value="0">Quận / huyện</option>
                            <?php 
                            if(!empty($_GET['id_city'])){
                                $sanpham_dist = get_result_array("select tenkhongdau,id,ten from #_place_dist where hienthi=1 and id_city='".(int)$_GET['id_city']."' order by id desc");
                            }else{
                                $sanpham_dist = get_result_array("select tenkhongdau,id,ten from #_place_dist where hienthi=1 and id_city='14' order by id desc");
                            }
                            foreach ($sanpham_dist as $k => $v) { ?>
                            <option value="<?=$v['id']?>" <?=($_GET['id_dist']==$v['id'] || $v['id']==168) ? 'selected':''?>><?=$v['ten']?></option>
                            <?php } ?>
                        </select>
                        <select name="id_huongnha" id="id_huongnha">
                            <option value="0">Chọn hướng nhà</option>
                            <?php foreach ($config['dangtin']['huongnha'] as $k => $v) { ?>
                            <option value="<?=$k?>" <?=($_GET['id_huongnha']==$k) ? 'selected':''?>><?=$v?></option>
                            <?php } ?>
                        </select>
                        <select name="id_area" id="id_area">
                            <?php foreach ($config['dangtin']['dientich'] as $k => $v) { ?>
                            <option value="<?=$k?>" <?=($_GET['id_area']==$k) ? 'selected':''?>><?=$v?></option>
                            <?php } ?>
                        </select>
                        <div class="row-search">
                            <button type="submit" class="btn-searchnc f-right"><i class="fa fa-search"></i> Tìm kiếm</button>
                        </div>
                        <div class="row-search">
                            <p class="t-center">Có <span class="cl-red"><?=number_format($count_tin['dem'],0, ',', '.')?></span> tin đăng đã được duyệt</p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="slider-right">
                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1200px;height:596px;overflow:hidden;visibility:hidden;">
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1200px;height:596px;overflow:hidden;">
                        <?php for($i=0;$i<count($slider);$i++){ ?>
                        <div data-b="0">
                            <img data-u="image" src="resize/1200x596/1/<?=_upload_hinhanh_l.$slider[$i]['photo']?>" alt="<?=$slider[$i]['ten']?>"/>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:16px;height:16px;">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                        </svg>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function() {

        $('.tab-search span').click(function(event) {
            $('.tab-search span').removeClass('active');
            $(this).addClass('active');
            var id = $(this).data('id');
            $.ajax({
                url: 'ajax/load_list.php',
                type: 'POST',
                data: {id: id, type: 1},
                success: function(data){
                    $('#id_cat').html(data);
                }
            });
        });
        $('.tab-search span:first').trigger('click');
        <?php /*
        $('#id_cat').change(function(event) {
            var id = $(this).val();
            $.ajax({
                url: 'ajax/load_list.php',
                type: 'POST',
                data: {id: id, type: 2},
                success: function(data){
                    $('#id_item').html(data);
                }
            });
        });*/?>
        $('#id_city').change(function(event) {
            var id = $(this).val();
            $.ajax({
                url: 'ajax/load_quan.php',
                type: 'POST',
                data: {id: id, loai: 1},
                success: function(data){
                    $('#id_dist').html(data);
                }
            });
        });
    });
</script>