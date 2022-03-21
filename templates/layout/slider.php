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
                <div class="autoplay">
                    <?php for ($i = 0; $i < count($slider); $i++) { ?>
                        <div>
                            <img data-u="image" src="resize/1200x596/1/<?= _upload_hinhanh_l . $slider[$i]['photo'] ?>" alt="<?= $slider[$i]['ten'] ?>" />
                        </div>
                    <?php } ?>
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
                data: {
                    id: id,
                    type: 1
                },
                success: function(data) {
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
        });*/ ?>
        $('#id_city').change(function(event) {
            var id = $(this).val();
            $.ajax({
                url: 'ajax/load_quan.php',
                type: 'POST',
                data: {
                    id: id,
                    loai: 1
                },
                success: function(data) {
                    $('#id_dist').html(data);
                }
            });
        });
        $('.autoplay').slick({
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            centerMode: false,
            centerPadding: 0,
            responsive: [{
                    breakpoint: 768,
                    infinite: true,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        centerMode: true,
                        centerPadding: 0,
                    }
                },
                {
                    breakpoint: 500,
                    infinite: true,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        centerPadding: 0,
                    }
                },
            ]

        });
    });
</script>