<?php
	
	if(isset($_POST['ok-mail']))
	{
		
		$email_khachhang=$_POST['email_khachhang'];
		
		$d->reset();
		$sql_mail="SELECT email FROM table_newsletter WHERE email='".$email_khachhang."'";
		$d->query($sql_mail);
		$mail2=$d->result_array();

		if(count($mail2)>0)
		{
			$s="Gửi thất bại";
			echo '<script language="javascript"> alert("'.$s.'") </script>';
		}
		else
		{

			$email_khachhang = trim(strip_tags($email_khachhang));
			$email_khachhang = mysql_real_escape_string($email_khachhang);

			if($_SESSION['dem-moc']<3){
				$sql = "INSERT INTO  table_newsletter (email) VALUES ('$email_khachhang')";	
				if($d->query($sql)== true)
				{
					$s="Gửi thành công";
					$_SESSION['dem-moc'] = $_SESSION['dem-moc'] + 1;
					echo '<script language="javascript"> alert("'.$s.'") </script>';
				}
			}else{
				echo '<script language="javascript"> alert("Bạn không thể gửi liên lục") </script>';
			}
			
		}
		
	}
?>
<section id="mail" class="mail-top w-100 clearfix" style="background: url('<?=_upload_hinhanh_l.$bg_mail['photo']?>') no-repeat top center; background-size: cover;">
	<div class="container">
		<div class="box-mail">
			<h6>Đăng ký nhận tin</h6>
			<p>Đăng ký email để nhận được thông tin từ <?=$row_setting['ten_'.$lang]?></p>
		    <form class=" w-100 o-hidden" name="nhanemail" id="nhanemail" method="post" action="index.php">
		        <input type="text" class="text-mail " name="email_khachhang" id="email_khachhang" placeholder="Nhập địa chỉ email..."/>
		        <input type="hidden" name="ok-mail" id="ok-mail" />
		        <div id="btn-mail" class="btn-mail" onclick="submitMail()">
		        	<i class="fa fa-send"></i>
		        </div>
		    </form>
		</div>
	</div>
</section>
<!-- #search -->