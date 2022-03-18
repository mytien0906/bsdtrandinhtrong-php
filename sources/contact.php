<?php if(!defined('_source')) die("Error");

		$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$_GET['idl'].'">'.$bread.'</a></li>
              </ul>';

		$d->reset();
		$sql = "select noidung_$lang,title,keywords,description from #_company where type='lienhe' ";
		$d->query($sql);
		$row_detail = $d->fetch_array();

		if(!empty($_POST)){
			include_once "phpMailer/class.phpmailer.php";
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->Host       = $config_ip;
			$mail->SMTPAuth   = true;
			$mail->Username   = $config_email;
			$mail->Password   = $config_pass;
			$mail->SetFrom($config_email,$row_setting['ten_'.$lang]);
			$mail->AddAddress($row_setting['email'],$row_setting['ten_'.$lang]);
			$mail->Subject    = $_POST['tieude']." - ".$company_mail['title_'.$lang];
			$mail->IsHTML(true);
			$mail->CharSet = "utf-8";

			$body = '<table>';
			$body .= '
				<tr>
					<th colspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="2">Thư liên hệ từ website <a href="http://'.$company_mail['website'].'">'.$company_mail['website'].'</a></th>
				</tr>
				<tr>
					<th colspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th>Họ tên :</th><td>'.$_POST['hoten'].'</td>
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
					<th>Tiêu đề :</th><td>'.$_POST['tieude'].'</td>
				</tr>
				<tr>
					<th>Nội dung :</th><td>'.$_POST['noidung'].'</td>
				</tr>';
			$body .= '</table>';

			$mail->Body = $body;
			$data['ten'] = magic_quote($_POST['hoten']);
			$data['diachi'] = magic_quote($_POST['diachi']);
			$data['dienthoai'] = magic_quote($_POST['dienthoai']);
			$data['email'] = magic_quote($_POST['email']);
			$data['tieude'] = magic_quote($_POST['tieude']);
			$data['noidung'] = magic_quote($_POST['noidung']);

			$data['ngaytao'] = time();
			$d->setTable('contact');
			if($_SESSION['count-contact']>=3){
				transfer("Bạn đã gửi quá 3 lần cho phép.", "http://$config_url");
			}
			// $d->insert($data);
			$mail->Body = $body;
			if($mail->Send() && $d->insert($data))
			{
				$_SESSION['count-contact'] = $_SESSION['count-contact'] + 1;
				transfer("Thông tin liên hệ được gửi.<br>Cảm ơn.", "http://$config_url");
			} else {
				transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại.", "lien-he.html");
			}
		}

?>
