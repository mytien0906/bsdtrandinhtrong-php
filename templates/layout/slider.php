<?php
    $d->reset();
    $sql = "select photo_vi as photo, mota_$lang as mota, link,ten_$lang as ten from #_photo where hienthi=1 and com='slider' order by stt asc,id desc";
    $d->query($sql);
    $slider = $d->result_array();
?>
<section id="slider-top" class="clearfix">
    <div class="container">
        <div class="box-slider">
            
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