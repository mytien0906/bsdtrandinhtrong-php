<!-- Bootstrap CSS-->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!-- Font Awesome -->
<link rel="stylesheet" href="admin/css/font-awesome.min.css">

<!-- My main CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!-- JS Min -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

<!-- Bootstrap JS-->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Fancy box -->
<script type="text/javascript" src="css/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="css/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript">
	$(document).ready(function() {
		$(".various").fancybox({
			maxWidth	: 1200,
			maxHeight	: 600,
			fitToView	: false,
			width		: '80%',
			height		: '80%',
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none',
			padding		:10
		});

		$(".fancybox").fancybox({
			openEffect	: 'none',
			closeEffect	: 'none'
		});

		$(".popup").fancybox({
			openEffect	: 'none',
			closeEffect	: 'none',
			padding     : 5
		});
	});
</script>

<!-- Slick -->
<link rel="stylesheet" type="text/css" href="css/slick.css"/>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(e) {
		$('.slick-img-thumb').slick({
		  dots: false,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 4,
		  slidesToScroll: 4,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
		      }
		    }
		  ]
		});

		$('.slick-doitac').slick({
		  dots: false,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 6,
		  slidesToScroll: 1,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 5,
		        slidesToScroll: 1,
		        infinite: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
		      }
		    }
		  ]
		});

		$('.slick-duan').slick({
		  dots: false,
		  speed: 300,
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  arrows: false,
		  autoplay: true,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1,
		        infinite: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
		});
	});
</script>

<!-- Slide -->
<link rel="stylesheet" type="text/css" href="css/wow.style.css" />

<!-- Tìm kiếm -->
<script type="text/javascript">
	function doEnter(evt)
	{
		// IE					// Netscape/Firefox/Opera
		var key;
		if(evt.keyCode == 13 || evt.which == 13){
			onSearch(evt);
		}
	}
	
	function doEnters(evt)
	{
		// IE					// Netscape/Firefox/Opera
		var key;
		if(evt.keyCode == 13 || evt.which == 13){
			onSearchs(evt);
		}
	}
	
	function onSearch(evt) 
	{
		var keyword = document.getElementById("keyword").value;
		var id_list = document.getElementById("id_list").value;
		if(keyword=='')
			alert('<?=_banchuanhaptukhoa?>');
		else{
			//var encoded = Base64.encode(keyword);
			location.href = "tim-kiem/"+id_list+"/keyword="+keyword;
			loadPage(document.location);			
		}
	}	
	
	function onSearchs(evt) 
	{
		var keyword = document.getElementById("keywords").value;
		if(keyword=='')
			alert('<?=_banchuanhaptukhoa?>');
		else{
			//var encoded = Base64.encode(keyword);
			location.href = "tim-kiem/keyword="+keyword;
			loadPage(document.location);			
		}
	}	
</script>

<!-- SmartMenus core CSS (required) -->
<link href="css/sm-core-css.css" rel="stylesheet" type="text/css" />
<!-- "sm-blue" menu theme (optional, you can use your own CSS, too) -->
<link href="css/sm-blue.css" rel="stylesheet" type="text/css" />
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="js/jquery.smartmenus.js"></script>
<!-- SmartMenus jQuery init -->
<script type="text/javascript">
    $(function() {
        $('#main-menu').smartmenus({
            subMenusSubOffsetX: 1,
            subMenusSubOffsetY: -8
        });

        $('#main-menus').smartmenus({
            subMenusSubOffsetX: 1,
            subMenusSubOffsetY: -8
        });
    });
</script>

<script type="text/javascript" src="js/jquery.simplyscroll.js"></script>
<link rel="stylesheet" href="css/jquery.simplyscroll.css" media="all" type="text/css">
<script type="text/javascript">
(function($) {
	$(function() {
		$("#uscroll").simplyScroll({orientation:'vertical',customClass:'vert'});
	});
})(jQuery);
</script>

<?php if($banner['hienthi']==1 && $banner['hienthi1']==1){?>
	<style type="text/css">
		#banner{ background:url(<?=_upload_hinhanh_l.$banner['bg']?>) <?=$banner['rp']?> <?=$banner['x']?> <?=$banner['y']?>,#<?=$banner['color']?>; <?php if($banner['fix']!=''){ ?>background-attachment: fixed;<?php }?>}
	</style>
<?php }elseif($banner['hienthi']==1){?>
	<style type="text/css">
		#banner{ background:url(<?=_upload_hinhanh_l.$banner['bg']?>) <?=$banner['rp']?> <?=$banner['x']?> <?=$banner['y']?>; <?php if($banner['fix']!=''){ ?>background-attachment: fixed;<?php }?>}
	</style>
<?php }elseif($banner['hienthi1']==1){?>
	<style type="text/css">
		#banner{ background:#<?=$banner['color']?>;}
	</style>
<?php }?>

<?php if($bg['hienthi']==1 && $bg['hienthi1']==1){?>
	<style type="text/css">
		body{ background:url(<?=_upload_hinhanh_l.$bg['bg']?>) <?=$bg['rp']?> <?=$bg['x']?> <?=$bg['y']?>,<?=$bg['color']?>; <?php if($bg['fix']!=''){ ?>background-attachment: fixed;<?php }?>}
	</style>
<?php }elseif($bg['hienthi']==1){?>
	<style type="text/css">
		body{ background:url(<?=_upload_hinhanh_l.$bg['bg']?>) <?=$bg['rp']?> <?=$bg['x']?> <?=$bg['y']?>;<?php if($bg['fix']!=''){ ?>background-attachment: fixed;<?php }?>}
	</style>
<?php }elseif($bg['hienthi1']==1){?>
	<style type="text/css">
		body{ background:#<?=$bg['color']?>;}
	</style>
<?php }?>

<?php if($com=="index" || $com=='' || $com=='lien-he'){ ?>
<style type="text/css">
	.right{width: 100%;}
</style>
<?php } ?>
<?php if($com=="du-an" ){ ?>
<style type="text/css">
	.lh-con-r{width: 70%;}
</style>
<?php } ?>
<?php if($com=="nop-ho-so-truc-tuyen" ){ ?>
<style type="text/css">
	.lh-r{width: 100%; border: none; padding: 0px;}
	.lh-con-l{width: 20%;}
	.lh-con-r{width: 70%;}
</style>
<?php } ?>

<?php if($com=='' || $com=='index'){ ?>
<link rel="stylesheet" href="css/animate.css">
<script src="js/wow.min.js"></script>
<script>
	new WOW().init();
</script>
<script type="text/javascript">
	$(document).ready(function() {

		/*$(".popup").trigger('click');*/
		
		var adCookie = document.cookie.indexOf('ad_displayed');
		if(adCookie == -1) 
		{
		    $(".popup").trigger('click');
		    document.cookie = "ad_displayed=1";
		}
	});
</script>
<?php } ?>