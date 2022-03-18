<?php if(!defined('_source')) die("Error");
	if(!empty($_POST)){
		include_once _lib."C_email.php";

		// $captcha = strtolower($_POST['captcha']);
		// if(strtolower($_SESSION['captcha_code']) != $captcha ){
		// 	transfer(_maxacnhansai, "lien-he.html");
		// }

		$data['ten'] = $_POST['ten'];
		$data['diachi'] = $_POST['diachi'];
		$data['dienthoai'] = $_POST['dienthoai'];
		$data['email'] = $_POST['email'];
		$data['tieude'] = $_POST['tieude1'];
		$data['noidung'] = $_POST['noidung'];
		$data['ngaytao'] = time();


		$subject = "Thư liên hệ từ ".$row_setting['title'];
		$body = '<table>';
		$body .= '
			<tr>
			<th colspan="2">&nbsp;</th>
			</tr>
			<tr>
			<th colspan="2">Thư liên hệ từ website http://'.$config_url.'/</th>
			</tr>
			<tr>
			<th colspan="2">&nbsp;</th>
			</tr>
			<tr>
			<th>Họ tên :</th><td>'.$_POST['ten'].'</td>
			</tr>
			<tr>
			<th>Địa chỉ :</th><td>'.$_POST['diachi'].'</td>
			</tr>
			<tr>
			<th>Điện thoại :</th><td>'.$_POST['dienthoai'].'</td>
			</tr>
			<tr>
			<th>Email :</th><td>'.$_POST['email'].'</td>
			</tr>

			<tr>
			<th>Chủ đề :</th><td>'.$_POST['tieude1'].'</td>
			</tr>
			<tr>
			<th>Nội dung :</th><td>'.$_POST['noidung'].'</td>
			</tr>' ;

		$body .= '</table>';

		include_once "phpmailer/class.phpmailer.php";
		//Khởi tạo đối tượng
		$mail = new PHPMailer();
		//Thiet lap thong tin nguoi gui va email nguoi gui
		$mail->IsSMTP(); // Gọi đến class xử lý SMTP
		$mail->SMTPAuth   = true;                  // Sử dụng đăng nhập vào account
		$mail->Host       = $config['email']['host'];     // Thiết lập thông tin của SMPT
		$mail->Username   = $config['email']['email']; // SMTP account username
		$mail->Password   = $config['email']['pass'];            // SMTP account password
		$mail->SetFrom($row_setting['email'],$row_setting['ten']);

		//Thiết lập thông tin người nhận
		$mail->AddAddress($row_setting['email'],$row_setting['ten']);

		//Thiết lập email nhận email hồi đáp
		//nếu người nhận nhấn nút Reply
		$mail->AddReplyTo($row_setting['email'],$row_setting['ten']);

		/*=====================================
		* THIET LAP NOI DUNG EMAIL
		*=====================================*/

		//Thiết lập tiêu đề
		$mail->Subject    = "Thông tin liên hệ";

		//Thiết lập định dạng font chữ
		$mail->CharSet = "utf-8";

		$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";

		//Thiết lập nội dung chính của email
		$mail->MsgHTML($body);

		if(!$mail->Send())
		{
			transfer( "Có lỗi xảy ra!","http://".$config_url."/");
		} 
		else
		{
			transfer("Gửi liên hệ thành công!<br/>", "http://".$config_url."/");	
		}	
	}

	$d->reset();
	$sql="select title_$lang as title,keywords_$lang as keywords,description_$lang as description,noidung_$lang as noidung from #_baiviet where type='lienhe'";
	$d->query($sql);
	$company_contact=$d->fetch_array();
		
	if($company_contact['title']!="")
	{
		$tit_c=$company_contact['title'];
	}
	else
	{
		$title_bar="Liên hệ - ";	
	}

	$keywords_c=$product_detail['keywords'];
	$description_c=$product_detail['description'];
	
?>