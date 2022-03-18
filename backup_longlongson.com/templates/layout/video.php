<div class="slick-video">
    <?php for ($i=0; $i < count($video); $i++) { ?>
        <div>
            <div class="box-video">
                <a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?=get_youtube_link($video[$i]['link'])?>?autoplay=1">
                    <img src="<?=_upload_hinhanh_l.$video[$i]['thumb']?>" alt="Video" />
                    <img src="img/i-play.png" alt="Play" class="video-play" />
                </a>
            </div>
        </div>
    <?php } ?>
</div>