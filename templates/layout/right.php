<?php
	
	if(isset($_POST['ok-mail']))
	{	
		$email_khachhang=$_POST['email_khachhang'];
		$hoten_khachhang=$_POST['hoten_khachhang'];
		$diachi_khachhang=$_POST['diachi_khachhang'];
		$dienthoai_khachhang=$_POST['dienthoai_khachhang'];

		$email_khachhang = trim(strip_tags($email_khachhang));
		$email_khachhang = mysql_real_escape_string($email_khachhang);

		$hoten_khachhang = trim(strip_tags($hoten_khachhang));
		$hoten_khachhang = mysql_real_escape_string($hoten_khachhang);

		$diachi_khachhang = trim(strip_tags($diachi_khachhang));
		$diachi_khachhang = mysql_real_escape_string($diachi_khachhang);

		$dienthoai_khachhang = trim(strip_tags($dienthoai_khachhang));
		$dienthoai_khachhang = mysql_real_escape_string($dienthoai_khachhang);


		if($email_khachhang!='' && $hoten_khachhang!='' && $diachi_khachhang!='' && $dienthoai_khachhang!=''){
			$data['ten'] = magic_quote($hoten_khachhang);
			$data['diachi'] = magic_quote($diachi_khachhang);
			$data['dienthoai'] = magic_quote($dienthoai_khachhang);
			$data['email'] = magic_quote($email_khachhang);
			$data['tieude'] = 'Ký gửi nhà đất';
						
			if($_FILES['filedinh']['name']!=''){
				$file['name'] = $_FILES['filedinh']['name'];
				$file['type'] = $_FILES['filedinh']['type'];
				$file['tmp_name'] = $_FILES['filedinh']['tmp_name'];
				$file['error'] = $_FILES['filedinh']['error'];
				$file['size'] = $_FILES['filedinh']['size'];
			    $file_name = images_name($_FILES['filedinh']['name']);
				$photo = upload_photos($file, 'jpg|png|gif|PNG|GIF|JPG|JPEG|jpeg|doc|DOC|DOCX|docx|xlsx|XLSX|zip|ZIP|rar|RAR|pdf|PDF', _upload_hinhanh_l,$file_name);
				$data['photo'] = $photo;
			}


			$data['ngaytao'] = time();
			$d->setTable('contact');
			if($d->insert($data)){
				echo '<script language="javascript"> alert("Đã ký gửi thành công, chúng tôi sẽ kiểm duyệt trong thời gian sớm nhất") </script>';
			}
		}else{
			if($hoten_khachhang==''){
				echo '<script language="javascript"> alert("Họ tên không được rỗng") </script>';
			} else if($email_khachhang==''){
				echo '<script language="javascript"> alert("Email không được rỗng") </script>';
			}else if($diachi_khachhang==''){
				echo '<script language="javascript"> alert("Địa chỉ không được rỗng") </script>';
			}else if($dienthoai_khachhang==''){
				echo '<script language="javascript"> alert("Điện thoại không được rỗng") </script>';
			}
		}
	}
?>
<div class="left-item w-100  mt-20">
	<div class="title-left">
		<h2>Ký gửi nhà đất</h2>
	</div>
	<div class="desc-left clearfix">
		<form class=" w-100 o-hidden" name="nhanemail"  enctype="multipart/form-data" id="nhanemail" method="post" action="index.php">
	        <input type="text" class="text-mail" name="email_khachhang" id="email_khachhang" placeholder="Nhập địa chỉ email..."/>
	        <input type="text" class="text-mail" name="hoten_khachhang" id="hoten_khachhang" placeholder="Nhập họ tên..."/>
	        <input type="text" class="text-mail" name="diachi_khachhang" id="diachi_khachhang" placeholder="Nhập địa chỉ..."/>
	        <input type="text" class="text-mail" name="dienthoai_khachhang" id="dienthoai_khachhang" placeholder="Nhập điện thoại..."/>
	        <input type="file" name="filedinh" id="filedinh">
	        <input type="hidden" name="ok-mail" id="ok-mail" />
	        <div id="btn-mail" class="btn-mail mt-10" onclick="submitMail()">
	        	<i class="fa fa-send"></i>&nbsp;Gửi ngay
	        </div>
	    </form>
	</div>
</div>
<div class="left-item w-100  mt-20">
	<?php for($i=0;$i<count($quangcao);$i++){ ?>
	<div class="img-qc">
		 <a href="<?=$quangcao[$i]['link']?>" title="<?=$quangcao[$i]['ten']?>"><img src="<?=_upload_hinhanh_l.$quangcao[$i]['photo']?>" alt="<?=$quangcao[$i]['ten']?>"/></a>
	</div>
	<?php } ?>
</div>
<div class="left-item w-100  mt-20">
	<div class="title-left">
		<h2>Tin tức xem nhiều</h2>
	</div>
	<div class="desc-left clearfix">
		<div class="dichvu-desc">
          <?php for($i=0;$i<count($tintuc_view);$i++){ ?>
	        <div class="dichvu-item">
	          <div class="img">
	            <a href="tin-tuc/<?=$tintuc_view[$i]['tenkhongdau']?>" title="<?=$tintuc_view[$i]['ten_'.$lang]?>">
	              <img src="resize/90x90/1/<?=_upload_baiviet_l.$tintuc_view[$i]['photo']?>" alt="<?=$tintuc_view[$i]['ten_'.$lang]?>">
	            </a>
	          </div>
	          <div class="desc t-left">
	            <h5><a class="cl-black" href="tin-tuc/<?=$tintuc_view[$i]['tenkhongdau']?>" title="<?=$tintuc_view[$i]['ten_'.$lang]?>">
	              <?=$tintuc_view[$i]['ten_'.$lang]?>
	            </a></h5>
	            <p class="cl-black">
	              <?=catchuoi(strip_tags($tintuc_view[$i]['mota_'.$lang]),100)?>
	            </p>
	          </div>
	        </div>
          <?php } ?>
        </div>
	</div>
</div>



<?php /*

<div class="left-item mt-20 mb-20 w-100">
	<div class="title-left">
		<h2>Hỗ trợ trực tuyến</h2>
	</div>
	<div class="desc-left">
		<div class="icon2_hotro">
			<?php for($i=0, $count=count($yahoo); $i<$count;$i++){?>
			<p class="t-uppercase t-weight-bold fotx">
				<span class="fotx"><?=$yahoo[$i]['ten']?></span>
			</p>
			<p>
				<img src="images/icon-hotline.png" align="absmiddle" alt="<?=$yahoo[$i]['dienthoai']?>"> <span>Điện thoại: <?=$yahoo[$i]['dienthoai']?></span>
			</p>
			<p>
				<img src="images/icon-email.png" align="absmiddle" alt="<?=$yahoo[$i]['email']?>"> <span>Email: <?=$yahoo[$i]['email']?></span>
			</p>
			<?php if($i!=count($yahoo)-1){ ?>
			<div class="line"></div>
			<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>
<div class="left-item w-100  mt-20">
	<div class="title-left">
		<h2>Video</h2>
	</div>
	<div class="desc-left clearfix">
		<div id="video_load"></div>
   	<div class="select_video">
     		<select name="" id="list_video">
            <?php for($i=0; $i<count($video_na); $i++){ ?>
            <option value="<?=youtobi($video_na[$i]['links'])?>"><?=$video_na[$i]['ten_'.$lang]?></option>
            <?php } ?>
        </select>
   	</div>
	</div>
</div>
<div class="left-item w-100  mt-20">
	<div class="title-left">
		<h2>Thống kê</h2>
	</div>
	<div class="desc-left clearfix">
		<div class="thongke f-left mt-0 w-100">
	        <p><img src="images/tt-dangonline.png" alt="<?=_online?>: <?php $count = count_online(); echo $count['dangxem'];?>"> <?=_online?>: <span><?php $count = count_online(); echo $count['dangxem'];?></span></p>
	        <p><img src="images/tt-homnay.png" alt="<?=_today?>: <?=$today_visitors?>"> <?=_today?>: <span><?=$today_visitors?></span></p>
	        <p><img src="images/tt-trongthang.png" alt="<?=_month?>: <?=$month_visitors?>"> <?=_month?>: <span><?=$month_visitors?></span></p>
	        <p><img src="images/tt-tongtruycap.png" alt="<?=_visited?>: <?=$all_visitors?>"> <?=_visited?>: <span><?=$all_visitors?></span></p>
	    </div>
	    <div class="content f-left w-100 mt-10 clearfix">
          <select class="select-lkw" onchange="window.open(this.value,'_blank');">
            <option value="">Liên kết web</option>
			<?php
			$lkw = explode(',',$row_setting['lienketweb']);
			?>
			<?php for($i=0;$i<count($lkw);$i++){ ?>
			<option value="<?=$lkw[$i]?>"><?=$lkw[$i]?></option>
			<?php } ?>
          </select>
        </div>
	</div>
</div>

<div class="left-item w-100  mt-20">
	<div class="title-left">
		<h2>Tin tức</h2>
	</div>
	<div class="desc-left clearfix">
		<div class="box-tintuc slickTinTuc">
          <?php for($i=1;$i<count($tintuc_view);$i++){ ?>
          <div>
            <div class="box-tintuc-item">
              <div class="img">
                <a href="tin-tuc/<?=$tintuc_view[$i]['tenkhongdau']?>.html" title="<?=$tintuc_view[$i]['ten_'.$lang]?>">
                  <img src="resize/90x90/1/<?=_upload_baiviet_l.$tintuc_view[$i]['photo']?>" alt="<?=$tintuc_view[$i]['ten_'.$lang]?>">
                </a>
              </div>
              <div class="desc t-left">
                <h5><a class="cl-black" href="tin-tuc/<?=$tintuc_view[$i]['tenkhongdau']?>.html" title="<?=$tintuc_view[$i]['ten_'.$lang]?>">
                  <?=$tintuc_view[$i]['ten_'.$lang]?>
                </a></h5>
                <p class="cl-black">
                  <?=catchuoi(strip_tags($tintuc_view[$i]['mota_'.$lang]),30)?>
                </p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
	</div>
</div>
<div class="tt-leftsub-dm">
	<div class="tt-title-left">
		<h2><?=_support?></h2>
	</div>
	<div class="tt-desc-left bgx">
		<div class="icon1_hotro">
			<img src="images/hotrott-min.png" alt="Hỗ trợ">
			<p class="m1s"><span>Hotline:</span> <?=$row_setting['hotline']?></p>
		</div>
		<div class="icon2_hotro">
			<?php for($i=0, $count=count($yahoo); $i<$count;$i++){?>
			<p>
				<img src="images/ht1.png" align="absmiddle" alt="<?=$yahoo[$i]['dienthoai']?>"> <span><?=$yahoo[$i]['ten']?></span>
			</p>
			<p style="line-height: 25px; color: #FF0000;">
				<img src="images/ht2.png" align="absmiddle" alt="<?=$yahoo[$i]['dienthoai']?>"> <span><?=$yahoo[$i]['dienthoai']?></span>
			</p>
			<p style="line-height: 26px;">
				<img src="images/ht3.png" align="absmiddle" alt="<?=$yahoo[$i]['email']?>"> <span><?=$yahoo[$i]['email']?></span>
			</p>
			<?php if($i!=count($yahoo)-1){ ?>
			<hr>
			<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>
<div class="tt-leftsub-dm">
	<div class="tt-title-left">
		<h2>Video clips</h2>
	</div>
	<div class="tt-desc-left">

	</div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#video_load').load("ajax/video_load.php?id="+"<?=youtobi($video_na[0]['links'])?>");
    $('#list_video').change(function() {
      var id = $(this).val();
      $.ajax({
        url: 'ajax/video_load.php',
        type: 'POST',
        data: {id: id},
        success: function(msg){
           $('#video_load').html(msg);
        }
      })
    });
  });
</script>
*/?>
