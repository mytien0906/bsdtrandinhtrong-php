$(window).on('load resize',function(event) {
	if($('.menu-l').outerHeight()>$('#slide').outerHeight())
	{
		$('#slide').css('margin-bottom', $('.menu-l').outerHeight()-$('#slide').outerHeight());	
	}
});
$(document).ready(function(e) {
    // Back top
	$('#back-top,.go-top').click(function(){
		$('html, body').animate({
			scrollTop:0	
		},800)	
	})

	// Menu mobile
	$('.i-menu').click(function(){
		$('#menus').slideToggle();	
	})

	$('.box-tab-tit div').click(function(event) {
		if(!$(this).hasClass('active'))
		{
			$(this).parent('.box-tab-tit').children('div').not($(this)).removeClass('active');
			$(this).addClass('active');
			var i=parseInt($(this).index())+1;
			$(this).parent('.box-tab-tit').next().find('.box-tab-con').hide();
			$(this).parent('.box-tab-tit').next().find('.box-tab-con:nth-child('+i+')').show();
		}
	});

	$('.giohang-cl').click(function(event) {
		$('#giohang').removeClass('active');
	});

	$('.tbl-giohang').on('change', '.ajax_soluong', function(event) {
		// ajax cap nhat so luong
		var id=$(this).attr('data-key');
		var sl=$(this).val();
		if(sl<1)
		{
			sl=1;
		}
		$this=$(this);
		$.ajax({
			url: 'ajax/soluong.php',
			type: 'POST',
			dataType: 'json',
			data: {id: id,sl:sl},
			success:function(res){
				$this.parent().next().html(res.thanhtien);
				$('.giohang-thanhtien span').html(res.tongtien);
			}
		})
	});

	$('.tbl-giohang').on('click', '.del-cart', function(event) {
		// Xoa san pham khoi gio hang
		var id=$(this).attr('data-key');
		$this=$(this);
		$.ajax({
			url: 'ajax/delcart.php',
			type: 'POST',
			dataType: 'json',
			data: {id: id},
			success:function(res){
				$('.giohang-thanhtien span').html(res.thanhtien);
				$('.giohang-tit span,.banner-ab-gh span').html(res.soluong);
				$this.parents('.tr').remove();
			}
		})
		return false;
	});
});

$(window).on('scroll',function(){
	$pageY=$(window).scrollTop();
	if($pageY>300)
	{
		$('#back-top').fadeIn();
	}
	else
	{
		$('#back-top').fadeOut();
	}

})
