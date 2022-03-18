<div class="content w-100 mt-10 clearfix">
   <div class="nav-account f-left">
   		<?php include_once _template."user/left_account.php"; ?>
   </div>
   <div class="right-account f-right">
   		<div class="title bx-border w-100">
			<h4 class="t-uppercase ds-inline-block p-relative"><a href="dang-tin.html" title="Đăng tin">Đăng tin</a></h4>
		</div>
		<div class="content w-100 mt-10 clearfix">
			<form method="post" id="frm-dangtin" name="frm-dangtin" action="dang-tin.html" enctype="multipart/form-data">
				<div class="box-account f-left w-100 bx-border bg-white">
					<div class="left-count w-100-i f-left">
						<?php if($message!=''){ ?>
						<div class="alert <?=($status==1) ? 'alert-error':'alert-success'?> row-count-post w-100 f-left mb-15">
							<?=$message?>
						</div>
						<?php } ?>
						<div class="row-count-post-group mb-15">
							<div class="row-count-post w-100 f-left mb-15">
								<label class="text-label">Tiêu đề tin đăng</label>
								<p class="text">Tiêu đề ngắn gọn mang đầy đủ thông tin làm tỷ lệ mua hàng cao hơn, có ít nhất 20 ký tự.</p>
								<div class="row-in-post">
									<input type="text" name="data[ten_vi]" class="input-count" id="ten_vi" value="<?=$_POST['data']['ten_vi']?>" placeholder="">
									<p class="error-text cl-red"></p>
								</div>
							</div>
							<div class="row-count-post w-100 f-left">
								<label class="text-label">Danh mục tin đăng</label>
								<div class="row-in-post">
									<div class="row-post-2">
										<select name="data[id_list]" class="input-count" id="id_list_dt">
											<option value="0">Chọn loại bất động sản</option>
											<?php foreach ($sanpham_menu as $k => $v) { ?>
											<option value="<?=$v['id']?>" data-id="<?=$v['checkgia']?>" <?=($_GET['id_list']==$v['id']) ? 'selected':''?>><?=$v['ten']?></option>
											<?php } ?>
										</select>
										<p class="error-text cl-red"></p>
									</div>
									<div class="row-post-2">
										<select name="data[id_cat]" class="input-count" id="id_cat_dt">
											<option value="0">Chọn loại nhà đất</option>
										</select>
										<p class="error-text cl-red"></p>
									</div>
									<div class="row-post-3 ds-none">
										<select name="data[id_item]" class="input-count f-right mr-0" id="id_item_dt">
											<option value="0">Chọn loại hình BĐS</option>
										</select>
										<p class="error-text cl-red"></p>
									</div>
								</div>
							</div>
						</div>
						
						<?php /*<div class="row-count-post w-100 f-left mb-15">
							<div class="row-in-post">
								<div class="row-post-2">
									<label class="text-label">Loại tin đăng</label>
									<select name="data[id_type]" class="input-count" id="id_type">
										<?php foreach($config['dangtin']['type'] as $k => $v){ ?>
										<option value="<?=$k?>"><?=$v?></option>
										<?php } ?>
									</select>
									<p class="error-text cl-red"></p>
								</div>
								<div class="row-post-2">
									<label class="text-label">Trạng thái tin đăng</label>
									<select name="data[id_status]" class="input-count f-right mr-0" id="id_status">
										<?php foreach($config['dangtin']['status'] as $k => $v){ ?>
										<option value="<?=$k?>"><?=$v?></option>
										<?php } ?>
									</select>
									<p class="error-text cl-red"></p>
								</div>
							</div>
						</div>*/?>

						<div class="row-count-post-group mb-15">
							<label class="text-label-act">Chọn khu vực đăng tin</label>
							<div class="row-count-post w-100 f-left mb-15">
								<div class="row-in-post">
									<div class="row-post-2">
										<!-- <label class="text-label">Tỉnh / thành</label> -->
										<select name="data[id_city]" class="input-count" id="id_city_td">
											<option value="0">Tỉnh / thành</option>
											<?php foreach ($tinh_binhdinh as $k => $v) { ?>
					                        <option value="<?=$v['id']?>" <?=($_GET['id_city']==$v['id'] || $v['id']==14) ? 'selected':''?>><?=$v['ten']?></option>
					                        <?php } ?>
										</select>
										<p class="error-text cl-red"></p>
									</div>
									<div class="row-post-2">
										<?php 
											$quan_binhdinh = get_result_array("select tenkhongdau,id,ten from #_place_dist where hienthi=1 and id_city='14' order by id desc");
										?>
										<!-- <label class="text-label">Quận / huyện</label> -->
										<select name="data[id_dist]" class="input-count" id="id_dist_td">
											<option value="0">Quận / huyện</option>
											<?php foreach ($quan_binhdinh as $k => $v) { ?>
					                        <option value="<?=$v['id']?>" <?=($_GET['id_dist']==$v['id'] || $v['id']==168) ? 'selected':''?>><?=$v['ten']?></option>
					                        <?php } ?>
										</select>
										<p class="error-text cl-red"></p>
									</div>
								</div>
							</div>
							<div class="row-count-post w-100 f-left">
								<div class="row-in-post">
									<div class="row-post-2">
										<!-- <label class="text-label">Phường / xã</label> -->
										<select name="data[id_ward]" class="input-count" id="id_ward_td">
											<option value="0">Phường / xã</option>
											<?php foreach ($phuong_quynhon as $k => $v) { ?>
											<option value="<?=$v['id']?>" <?=($_GET['id_ward']==$v['id']) ? 'selected':''?>><?=$v['ten']?></option>
											<?php } ?>
										</select>
										<p class="error-text cl-red"></p>
									</div>
									<div class="row-post-2">
										<!-- <label class="text-label">Đường / phố</label> -->
										<?php /*<select name="data[id_street]" class="input-count" id="id_street_td">
											<option value="0">Đường / phố</option>
											<?php foreach ($duong_quynhon as $k => $v) { ?>
											<option value="<?=$v['id']?>" <?=($_GET['id_street']==$v['id']) ? 'selected':''?>><?=$v['ten']?></option>
											<?php } ?>
										</select>
										<p class="error-text cl-red"></p>*/?>
										<input type="text" name="data[duongpho]" class="input-count" id="duongpho" value="<?=$_POST['data']['duongpho']?>" placeholder="vd: số 10 Bành Văn Trân">
										<p class="error-text cl-red"></p>
									</div>
								</div>
							</div>
						</div>
						<div class="row-count-post-group mb-15">
							<div class="row-count-post w-100 f-left mb-15">
								<div class="row-post-2">
									<label class="text-label">Giá tiền</label>
									<div class="row-in-post">
										<input type="text" name="data[giaban]" class="input-count" id="giaban" value="<?=$_POST['data']['giaban']?>" placeholder="vd: 2.5">
										<p class="error-text cl-red"></p>
									</div>
								</div>
								<div class="row-post-2">
									<label class="text-label">Đơn vị tính</label>
									<div class="row-in-post">
										<select name="data[donvi]" class="input-count" id="donvi_td">
											<?php foreach ($config['dangtin']['donvi'] as $k => $v) { ?>
								            <option value="<?=$k?>_<?=$v?>" <?=($v=='Tỷ') ? 'selected':''?>><?=$v?></option>  
								            <?php } ?>
										</select>
										<p class="error-text cl-red"></p>
									</div>
								</div>
							</div>
							<div class="row-count-post w-100 f-left mb-15">
								<div class="row-post-2 ds-none">
									<label class="text-label">Giá tính trên</label>
									<div class="row-in-post">
										<select name="data[giatinh]" class="input-count t-none" id="giatinh_td">
											<?php foreach ($config['dangtin']['giatinh'] as $k => $v) { ?>
								            <option value="<?=$k?>_<?=$v?>"><?=$v?></option>  
								            <?php } ?>
										</select>
										<p class="error-text cl-red"></p>
									</div>
								</div>
								<div class="row-post-2">
									<label class="text-label">Diện tích (m2)</label>
									<div class="row-in-post">
										<input type="text" name="data[dientich]" class="input-count" id="dientich" value="<?=$_POST['data']['dientich']?>" placeholder="vd: 200">
										<p class="error-text cl-red"></p>
									</div>
								</div>
							</div>
							
							<div class="row-count-post w-100 f-left mb-15">
								<div class="row-post-2">
									<label class="text-label">Pháp lý</label>
									<div class="row-in-post">
										<select name="data[id_phaply]" class="input-count" id="id_phaply_td">
											<?php foreach ($config['dangtin']['phaply'] as $k => $v) { ?>
								            <option value="<?=$k?>"><?=$v?></option>  
								            <?php } ?>
										</select>
										<p class="error-text cl-red"></p>
									</div>
								</div>
								<div class="row-post-2">
									<label class="text-label">Hướng nhà</label>
									<div class="row-in-post">
										<select name="data[id_huongnha]" class="input-count" id="id_huongnha_td">
											<?php foreach ($config['dangtin']['huongnha'] as $k => $v) { ?>
								            <option value="<?=$k?>"><?=$v?></option>  
								            <?php } ?>
										</select>
										<p class="error-text cl-red"></p>
									</div>
								</div>
							</div>
							
							<?php /*<div class="row-count-post w-100 f-left mb-15">
								<div class="row-post-2">
									<label class="text-label">Mặt tiền(m)</label>
									<div class="row-in-post">
										<input type="text" name="data[mattien]" class="input-count" id="mattien" value="<?=$_POST['data']['mattien']?>" placeholder="vd: 10">
										<p class="error-text cl-red"></p>
									</div>
								</div>
								<div class="row-post-2">
									<label class="text-label">Đường vào(m)</label>
									<div class="row-in-post">
										<input type="text" name="data[duongvao]" class="input-count" id="duongvao" value="<?=$_POST['data']['duongvao']?>" placeholder="vd: 10">
										<p class="error-text cl-red"></p>
									</div>
								</div>
							</div>

							<div class="row-count-post w-100 f-left mb-15">
								<div class="row-post-2">
									<label class="text-label">Số tầng</label>
									<div class="row-in-post">
										<input type="text" name="data[sotang]" class="input-count" id="sotang" value="<?=$_POST['data']['sotang']?>" placeholder="vd: 10">
										<p class="error-text cl-red"></p>
									</div>
								</div>
								<div class="row-post-2">
									<label class="text-label">Số phòng ngủ</label>
									<div class="row-in-post">
										<input type="text" name="data[phongngu]" class="input-count" id="phongngu" value="<?=$_POST['data']['phongngu']?>" placeholder="vd: 10">
										<p class="error-text cl-red"></p>
									</div>
								</div>
							</div>

							<div class="row-count-post w-100 f-left mb-15">
								<div class="row-post-2">
									<label class="text-label">Số tolet</label>
									<div class="row-in-post">
										<input type="text" name="data[tolet]" class="input-count" id="tolet" value="<?=$_POST['data']['tolet']?>" placeholder="vd: 10">
										<p class="error-text cl-red"></p>
									</div>
								</div>
								<div class="row-post-2">
									
								</div>
							</div>
							
							<div class="row-count-post w-100 f-left mb-15">
								<label class="text-label">Nội thất</label>
								<div class="row-in-post">
									<textarea name="data[noithat_vi]" class="input-count input-count-h" id="noithat_vi"><?=$_POST['data']['noithat_vi']?></textarea>
									<p class="error-text cl-red"></p>
								</div>
							</div>*/?>

						</div>
						<div class="row-count-post w-100 f-left mb-15">
							<label class="text-label">Tải ảnh</label>
							<div class="message-info">
								<ul class="list">
									<li><p>Hình ảnh đẹp sẽ giúp tin đăng của bạn thu hút người mua</p></li>
									<li><p>Không sử dụng ảnh có (hoặc in chìm) số điện thoại, địa chỉ website hay các thông tin liên hệ khác</p></li>
									<li><p>Không sử dụng ảnh tải về trên mạng</p></li>
									<li><p>Tin đăng của bạn có thể bị từ chối nếu không đáp ứng đủ các tiêu chuẩn về hình ảnh</p></li>
								</ul>
							</div>
							<div class="row-in-post">
								<a class="file_input" data-jfiler-name="files" data-jfiler-extensions="jpg, jpeg, png, gif">
					      			<div class="jFiler jFiler-theme-dragdropbox"><div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Upload files here</h3></div><span class="jFiler-input-choose-btn btn-custom blue-light">Browse Files</span></div></div></div>
					      		</a>
							</div>
						</div>

						
						<div class="row-count-post-group mb-15">
							<div class="row-count-post w-100 f-left mb-15">
								<label class="text-label">Thông tin liên hệ</label>
								<p class="text">
									Số điện thoại mà bạn thường xuyên sử dụng, Khách hàng có thể liên lạc với bạn nhanh nhất.
								</p>
								<div class="row-in-post">
									<div class="row-post-2">
										<input type="text" name="data[hoten]" class="input-count" id="hoten" value="<?=$_SESSION['logging']['hoten']?>" placeholder="Họ tên liên hệ...">
										<p class="error-text cl-red"></p>
									</div>
									<div class="row-post-2">
										<input type="text" name="data[dienthoai]" class="input-count" id="dienthoai" value="<?=$_SESSION['logging']['dienthoai']?>" placeholder="Điện thoại liên hệ...">
										<p class="error-text cl-red"></p>
									</div>
								</div>
							</div>
							<div class="row-count-post w-100 f-left mb-15">
								<div class="row-in-post">
									<input type="text" name="data[email]" class="input-count t-none" id="email" value="<?=$_SESSION['logging']['email']?>" placeholder="Email liên hệ...">
								</div>
							</div>
						</div>

						<div class="row-count-post-group mb-15">
							<div class="row-count-post w-100 f-left">
								<label class="text-label">Nội dung chi tiết</label>
								<div class="message-info">
									<p>
										Nội dung chi tiết tin đăng của bạn. Sẽ giúp bạn tiếp cận nhanh hơn khách hàng tiềm năng
									</p>
								</div>
								<div class="row-in-post">
									<textarea name="data[noidung_vi]" class="input-count" id="noidung_vi"><?=$_POST['data']['noidung_vi']?></textarea>
									<p class="error-text cl-red"></p>
								</div>
							</div>
						</div>
						<div class="row-count-post w-100 f-left">
							<div class="checkbox">
								<input type="checkbox" name="agree" id="cb_agree">
								<label for="cb_agree">Tôi đồng ý với <a href="quy-dinh-va-dieu-khoan-su-dung" target="_blank">[ điều khoản sử dụng của website ]</a></label>
								<p class="error-text cl-red"></p>
							</div>
							<div class="btn-right ds-inline-block f-right">
								<input type="hidden" name="data[type]" value="san-pham">
								<input class="button bg-primary cl-white t-uppercase" type="reset" id="btn-submit-exit" value="Nhập lại"/>
								<input class="button bg-success bd-success cl-white t-uppercase" type="button" id="btn-submit-update" value="Chấp nhận"/>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
   </div>
</div>


<script type="text/javascript">
	$(document).ready(function() {
		$('#id_city_td').change(function(event) {
            var id = $(this).val();
            $.ajax({
                url: 'ajax/load_quan.php',
                type: 'POST',
                data: {id: id, loai: 1},
                success: function(data){
                    $('#id_dist_td').html(data);
                }
            });
        });

		$('#id_dist_td').change(function(event) {
            var id = $(this).val();
            $.ajax({
                url: 'ajax/load_quan.php',
                type: 'POST',
                data: {id: id, loai: 2},
                success: function(data){
                    $('#id_ward_td').html(data);
                }
            });

            $.ajax({
                url: 'ajax/load_quan.php',
                type: 'POST',
                data: {id: id, loai: 3},
                success: function(data){
                    $('#id_street_td').html(data);
                }
            });
            
        });

		<?php /*$('#id_list_dt').on("change",function(){
		    var dataid = $("#id_list_dt option:selected").attr('data-id');
		    if(dataid==0){
		    	$('.checkgia').removeClass('ds-none');
		    }else{
		    	$('.checkgia').addClass('ds-none');
		    }
		   	
		});*/?>
	});
</script>
<script type="text/javascript">
	function validateEmail($email) {
	  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	  return emailReg.test( $email );
	}
	function validatePhone($phone) {
	    var filter = /^[0-9-+]{10,11}$/;
	    return filter.test($phone);
	}
	
	$(document).ready(function() {
		
		$('#id_list_dt').change(function(event) {
			var id = $(this).val();
			$.ajax({
				url: 'ajax/load_list.php',
				type: 'POST',
				data: {id: id, type: 1},
				success: function(data){
					$('#id_item_dt').html('<option value="0">Chọn Loại Hình BĐS</option>');
					$('#id_cat_dt').html(data);
				}
			});
			
		});

		$('#id_cat_dt').change(function(event) {
			var id = $(this).val();
			$.ajax({
				url: 'ajax/load_list.php',
				type: 'POST',
				data: {id: id, type: 2},
				success: function(data){
					$('#id_item_dt').html(data);
				}
			});
			
		});


		$('#btn-submit-update').click(function() {
			error = false;

			var ten_vi = $('#ten_vi').val();
			var noidung_vi = $('#noidung_vi').val();
			var id_list_dt = $('#id_list_dt').val();
			var dienthoai = $('#dienthoai').val();
			var id_city_td = $('#id_city_td').val();
			var id_dist_td = $('#id_dist_td').val();
			var id_ward_td = $('#id_ward_td').val();
			<?php /*
			var id_type = $('#id_type').val();
			var id_status = $('#id_status').val();
			*/?>

			if(ten_vi==''){
				error = true;
				$('#ten_vi').addClass('has-error');
				$('#ten_vi').focus();
				$('#ten_vi').next('p').html('Quý khách chưa nhập tiêu đề tin đăng');
				return false;
			}else{
				error = false;
				$('#ten_vi').removeClass('has-error');
				$('#ten_vi').next('p').html('');
			}

			if(id_list_dt==0){
				error = true;
				$('#id_list_dt').addClass('has-error');
				$('#id_list_dt').focus();
				$('#id_list_dt').next('p').html('Quý khách chưa chọn danh mục tin đăng');
				return false;
			}else{
				error = false;
				$('#id_list_dt').removeClass('has-error');
				$('#id_list_dt').next('p').html('');
			}

			if(id_city_td==0){
				error = true;
				$('#id_city_td').addClass('has-error');
				$('#id_city_td').focus();
				$('#id_city_td').next('p').html('Quý khách chưa chọn khu vực tin đăng');
				return false;
			}else{
				error = false;
				$('#id_city_td').removeClass('has-error');
				$('#id_city_td').next('p').html('');
			}

			if(id_dist_td==0){
				error = true;
				$('#id_dist_td').addClass('has-error');
				$('#id_dist_td').focus();
				$('#id_dist_td').next('p').html('Quý khách chưa chọn khu vực tin đăng');
				return false;
			}else{
				error = false;
				$('#id_city_td').removeClass('has-error');
				$('#id_city_td').next('p').html('');
			}

			if(id_ward_td==0){
				error = true;
				$('#id_ward_td').addClass('has-error');
				$('#id_ward_td').focus();
				$('#id_ward_td').next('p').html('Quý khách chưa chọn khu vực tin đăng');
				return false;
			}else{
				error = false;
				$('#id_ward_td').removeClass('has-error');
				$('#id_ward_td').next('p').html('');
			}

			<?php /*if(id_type==0){
				error = true;
				$('#id_type').addClass('has-error');
				$('#id_type').focus();
				$('#id_type').next('p').html('Quý khách chưa chọn loại tin đăng');
				return false;
			}else{
				error = false;
				$('#id_type').removeClass('has-error');
				$('#id_type').next('p').html('');
			}

			if(id_status==0){
				error = true;
				$('#id_status').addClass('has-error');
				$('#id_status').focus();
				$('#id_status').next('p').html('Quý khách chưa chọn trạng thái tin đăng');
				return false;
			}else{
				error = false;
				$('#id_status').removeClass('has-error');
				$('#id_status').next('p').html('');
			}*/?>

			if(hoten==''){
				error = true;
				$('#hoten').addClass('has-error');
				$('#hoten').focus();
				$('#hoten').next('p').html('Quý khách chưa nhập họ tên');
				return false;
			}else{
				error = false;
				$('#hoten').removeClass('has-error');
				$('#hoten').next('p').html('');
			}

			if(dienthoai==''){
				error = true;
				$('#dienthoai').addClass('has-error');
				$('#dienthoai').focus();
				$('#dienthoai').next('p').html('Quý khách chưa nhập điện thoại');
				return false;
			}else{
				if(!validatePhone(dienthoai)){
					error = true;
					$('#dienthoai').addClass('has-error');
					$('#dienthoai').focus();
					$('#dienthoai').next('p').html('Điện thoại không đúng định dạng');
					return false;
				}else{
					error = false;
					$('#dienthoai').removeClass('has-error');
					$('#dienthoai').next('p').html('');
				}
			}

			if(noidung_vi==''){
				error = true;
				$('#noidung_vi').addClass('has-error');
				$('#noidung_vi').focus();
				$('#noidung_vi').next('p').html('Quý khách chưa nhập nội dung tin đăng');
				return false;
			}else{
				error = false;
				$('#noidung_vi').removeClass('has-error');
				$('#noidung_vi').next('p').html('');
			}

			if($('#cb_agree').is(':checked')){
				error = false;
			}else{
				$('#cb_agree').focus();
				$('#cb_agree').parent('.checkbox').find('p').html('Quý khách chưa đồng ý với điều khoản đăng tin');
				error = true;
			}
			
			if(error == false){
				$('#frm-dangtin').submit();
			}else{
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
                                    </div>\<input type="text" name="stthinh[]" class="stthinh" placeholder="Số thứ tự..." />\
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
                                    </div>\<input type="text" name="stthinh[]" class="stthinh" placeholder="Số thứ tự..." />\
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
