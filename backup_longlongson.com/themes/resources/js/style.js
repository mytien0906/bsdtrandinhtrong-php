$('.r-tabs-header li').click(function(){$(".r-tabs-header li").removeClass("is-active");$(this).addClass('is-active');});$("#formTuyendung").validate({rules:{name:{required:true,},email:{required:true,},fileCV:{required:true,},},messages:{name:{required:"Tên không được trống",},email:{required:"Email không được trống",},fileCV:{required:"File không được trống",},},});$("#submitTD").click(function(){var tmp=$("#formTuyendung").valid();if(tmp){var url="http://www.webbnc.net/themes/resources/js/index.php?page=home&sub=sendEmailTuyenDung";var data_send=new FormData($("#formTuyendung")[0]);$('.notifyTDTC').text('Đang xử lý ...');$('#submitTD').attr("disabled",true);$('#loadingsb').show();$('#submitTDHUY').hide();$.ajax({type:"POST",url:url,processData:false,contentType:false,data:data_send,success:function(data)
{$('#loadingsb').hide();$('.notifyTD').text('');if(data=='success'){$('.notifyTDTC').text('Thư ứng tuyển của bạn được gửi thành công!');$('#submitTDHUY').text('Đóng khung này');$('#submitTDHUY').show();$('#submitTD').hide();}
if(data=='emptyFile'){$('.notifyTD').text('bạn chưa đính kèm file');$('#submitTD').attr("disabled",false);}
return false;}});return false;}});