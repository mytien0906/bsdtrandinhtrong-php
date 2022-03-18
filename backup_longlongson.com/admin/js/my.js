$(document).ready(function() {
	$('.hienthi').click(function(event) {
		var id=$(this).attr('data-id');
		var com=$(this).attr('data-com');
		var list=$(this).attr('data-list');
		var $this=$(this);
		$.ajax({
			url: 'ajax/hienthi.php',
			type: 'POST',
			dataType: 'html',
			data: {id: id,com:com,list:list},
			success:function(res)
			{
				if(res==1)
				{
					$this.removeClass('fa-square-o');
					$this.addClass('fa-check-square-o');
				}
				else
				{
					$this.addClass('fa-square-o');
					$this.removeClass('fa-check-square-o');
				}
			}
		})
	});

	$('.tinhtrang').click(function(event) {
		var id=$(this).attr('data-id');
		var com=$(this).attr('data-com');
		var list=$(this).attr('data-list');
		var $this=$(this);
		$.ajax({
			url: 'ajax/tinhtrang.php',
			type: 'POST',
			dataType: 'html',
			data: {id: id,com:com,list:list},
			success:function(res)
			{
				$this.html(res);
			}
		})
	});

	$('.noibat').click(function(event) {
		var id=$(this).attr('data-id');
		var com=$(this).attr('data-com');
		var list=$(this).attr('data-list');
		var col=$(this).attr('data-col');
		var $this=$(this);
		$.ajax({
			url: 'ajax/noibat.php',
			type: 'POST',
			dataType: 'html',
			data: {id: id,com:com,list:list,col:col},
			success:function(res)
			{
				if(res==1)
				{
					$this.removeClass('fa-star-o');
					$this.addClass('fa-star');
				}
				else
				{
					$this.addClass('fa-star-o');
					$this.removeClass('fa-star');
				}
			}
		})
	});

	$('.change_stt').dblclick(function(){
		$(this).children().removeAttr('disabled');	
		$(this).children().focus();
	})

	$('.change_stt').focusout(function(){
		var id=$(this).children().attr('data-id');
		var com=$(this).children().attr('data-com');
		var list=$(this).children().attr('data-list');
		var stt=parseInt($(this).children().val());
		$this=$(this).children();
		$.ajax({
			type:'POST',
			url:'ajax/stt.php',
			data:{id:id,com:com,stt:stt,list:list},
			success: function()
			{
				$this.val(stt);
			}
				
		})
		$(this).children().attr("disabled","disabled");
	})
	
	$('.change_stt').keypress(function(evt){
		if(evt.keyCode == 13 || evt.which == 13){
			var id=$(this).children().attr('data-id');
			var com=$(this).children().attr('data-com');
			var list=$(this).children().attr('data-list');
			var stt=parseInt($(this).children().val());
			$this=$(this).children();
			$.ajax({
				type:'POST',
				url:'ajax/stt.php',
				data:{id:id,com:com,stt:stt,list:list},
				success: function()
				{
					$this.val(stt);
				}
					
			})
			$(this).children().attr("disabled","disabled");
		}	
	})
});