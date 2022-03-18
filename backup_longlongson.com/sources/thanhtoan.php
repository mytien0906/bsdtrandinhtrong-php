<?php  if(!defined('_source')) die("Error");		
	// thanh tieu de
	$title_bar .= "Thanh toán - ";

	if(!empty($_POST)){
		
		$hoten=$_POST['ten'];
		$dienthoai=$_POST['dienthoai'];
		$diachi=$_POST['diachi'];
		$email=$_POST['email'];
		$noidung=$_POST['noidung'];
		$tinh=$_POST['tinh'];
		$quan=$_POST['quan'];
		$phivanchuyen=(int)$_POST['phivanchuyen'];
		$id_tinh=(int)$_POST['id_tinh'];
		$id_quan=(int)$_POST['id_quan'];
		
		//validate dữ liệu
	
	$hoten = trim(strip_tags($hoten));
	$dienthoai = trim(strip_tags($dienthoai));	
	$diachi = trim(strip_tags($diachi));	
	$email = trim(strip_tags($email));	
	$noidung = trim(strip_tags($noidung));	

	if (get_magic_quotes_gpc()==false) {
		$hoten = mysql_real_escape_string($hoten);
		$dienthoai = mysql_real_escape_string($dienthoai);
		$diachi = mysql_real_escape_string($diachi);
		$email = mysql_real_escape_string($email);
		$noidung = mysql_real_escape_string($noidung);						
	}
	$coloi=false;		
	if ($hoten == NULL) { 
		$coloi=true; $error_hoten = "Bạn chưa nhập họ tên<br>";
	} 
	if ($dienthoai == NULL) { 
		$coloi=true; $error_dienthoai = "Bạn chưa nhập điện thoại<br>";
	}
	if ($diachi == NULL) { 
		$coloi=true; $error_diachi = "Bạn chưa nhập địa chỉ<br>";
	}	
	
	if ($email == NULL) { 
		$coloi=true; $error_email = "Bạn chưa nhập email<br>";
	}elseif (filter_var($email,FILTER_VALIDATE_EMAIL)==FALSE) { 
		$coloi=true; $error_email="Bạn nhập email không đúng<br>";
	}
		
	if ($coloi==FALSE) {
										
			 $body.='<table border="0" cellpadding="5px" cellspacing="1px" style="font-size:12px; background:#FFF; width:1000px;">';
			if(is_array($_SESSION['cart']))
			{
            	$body.='<tr style="background:#274392; font-weight:bold; color:#FFF; border-left:1px solid #CCC; border-right:1px solid #CCC;"><th style="padding:5px; width:5%; text-align:center;">STT</th><th style="padding:5px; width:45%; text-align:center;">Sản phẩm</th><th style="padding:5px; width:10%; text-align:center;">Hình ảnh</th><th style="padding:5px; width:15%; text-align:center;">Giá</th><th style="padding:5px; width:10%; text-align:center;">Số lượng</th><th style="padding:5px; width:15%; text-align:center;">Tổng giá</th></tr>';
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];					
					$ppro=get_product($pid);
					$size=get_info($_SESSION['cart'][$i]['size'],'product_size');
                    $mau=get_info($_SESSION['cart'][$i]['mau'],'product_mau');
					if($q==0) continue;
					$body.='<tr style="border-left:1px solid #CCC; border-right:1px solid #CCC; border-bottom:1px solid #CCC;">';
					$body.='<td style="padding:5px; width:5%; text-align:center;">'.($i+1).'</td>';
            		$body.='<td style="padding:5px; width:45%; text-align:center;"><a href="http://'.$config_url.'/san-pham/'.$ppro['tenkhongdau'].'" target="_blank">'.$ppro['ten'].'[Size: '.$size['ten_vi'].' - Màu: '.$mau['ten_vi'].']</a></td>';
					$body.='<td style="padding:5px; width:5%; text-align:center;"><a href="http://'.$config_url.'/san-pham/'.$ppro['tenkhongdau'].'" target="_blank"><img src="http://'.$config_url.'/'._upload_product_l.$ppro['thumb'].'" alt="'.$ppro['ten'].'" width="100" /></a></td>';
					$body.='<td style="padding:5px; width:5%; text-align:center;">'.number_format(($ppro['giagiam']>0)?$ppro['giagiam']:$ppro['gia'],0,'',',').' VNĐ'.'</td>';
					$body.='<td style="padding:5px; width:5%; text-align:center;">'.$q.'</td>';
					$body.='<td style="padding:5px; width:5%; text-align:center;">'.number_format((($ppro['giagiam']>0)?$ppro['giagiam']:$ppro['gia'])*$q,0, '', ',') .'&nbsp;VNĐ</td>';
					$body.='</tr>';
				}
				$body.='<tr style="border-left:1px solid #CCC; border-right:1px solid #CCC;">';
				$body.='<td colspan="6" style="padding:5px; background:#274392; font-weight:bold; color:#FFF;">';
				$body.='<div>Phí vận chuyển: '.number_format($phivanchuyen,0, ',', '.').'&nbsp;VNĐ</div>';
				$body.='<div>Tổng giá: '.number_format(get_order_total()+$phivanchuyen,0, ',', '.').'&nbsp;VNĐ</div>';
				if($_SESSION['logging']['vip']==1 && $_SESSION['giam']['gia']>0)
				{
					$body.='<div>Thành viên <span style="color:#FF0;">VIP</span> được giảm <span style="color:#FF0;">'.$row_settingdh['vipdiscount'].'%</span>. Mã giảm giá được giảm: <span style="color:#FF0;">';
					if($_SESSION['giam']['loai']==1)
					{
						$body.=number_format($_SESSION['giam']['gia'],0,'',',').'VNĐ';
					}
					else
					{
						$body.=$_SESSION['giam']['gia'].'%';
					}
					$body.='</span>. Còn lại: <span style="color:#FF0;">';
					if($_SESSION['giam']['loai']==1)
					{ 
						$tp_cart=get_order_total()*((100-$row_settingdh['vipdiscount'])/100)-$_SESSION['giam']['gia'];
					}
					else
					{ 
						$tp_cart=get_order_total()*((100-$row_settingdh['vipdiscount'])/100)*((100-$_SESSION['giam']['gia'])/100);
					} 
					$body.=number_format($tp_cart,0, ',', '.').'&nbsp;VNĐ</span></div>';	
				}
				elseif($_SESSION['logging']['vip']==1)
				{
					$body.='<div>Thành viên <span style="color:#FF0;">VIP</span> được giảm <span style="color:#FF0;">'.$row_settingdh['vipdiscount'].'%</span>. Còn lại: <span style="color:#FF0;">'.number_format(get_order_total()*(100-$row_settingdh['vipdiscount'])/100,0, ',', '.').'&nbsp;VNĐ</span></div>';
				}
				elseif($_SESSION['giam']['gia']>0)
				{
					$body.='<div>Mã giảm giá được giảm <span style="color:#FF0;">';
					if($_SESSION['giam']['loai']==1)
					{
						$body.=number_format($_SESSION['giam']['gia'],0,'',',').'VNĐ';
					}
					else
					{
						$body.=$_SESSION['giam']['gia'].'%';
					}
					$body.='</span>. Còn lại: <span style="color:#FF0;">';
					if($_SESSION['giam']['loai']==1)
					{ 
						$tp_cart=get_order_total()-$_SESSION['giam']['gia'];
					}
					else
					{ 
						$tp_cart=get_order_total()*((100-$_SESSION['giam']['gia'])/100);
					} 
					$body.=number_format($tp_cart,0, ',', '.').'&nbsp;VNĐ</span></div>';
				}
				$body.='</td>';
                $body.='</tr>';
            }
			else{
				$body.='<tr bgColor="#FFFFFF"><td>There are no items in your shopping cart!</td></tr>';
			}
       $body.='</table>';
  			
			$mahoadon=strtoupper (ChuoiNgauNhien(6));
			$ngaydangky=time();
			if($_SESSION['logging']['vip']==1 && $_SESSION['giam']['gia']>0)
			{
				if($_SESSION['giam']['loai']==1)
				{ 
					$tp_cart=get_order_total()*((100-$row_settingdh['vipdiscount'])/100)-$_SESSION['giam']['gia'];
				}
				else
				{ 
					$tp_cart=get_order_total()*((100-$row_settingdh['vipdiscount'])/100)*((100-$_SESSION['giam']['gia'])/100);
				} 	
				$tonggia=$tp_cart;
			}
			elseif($_SESSION['logging']['vip']==1)
			{
				$tonggia=get_order_total()*(100-$row_settingdh['vipdiscount'])/100;	
			}
			elseif($_SESSION['giam']['gia']>0)
			{
				if($_SESSION['giam']['loai']==1)
				{ 
					$tp_cart=get_order_total()-$_SESSION['giam']['gia'];
				}
				else
				{ 
					$tp_cart=get_order_total()*((100-$_SESSION['giam']['gia'])/100);
				} 
				$tonggia=$tp_cart;
			}
			else
			{
				$tonggia=get_order_total();
			}
			
			$sql = "INSERT INTO  table_donhang (madonhang,hoten,dienthoai,diachi,email,httt,tonggia,noidung,donhang,ngaytao,trangthai,id_tv,tinh,quan,id_tinh,id_quan ) 
				  VALUES ('$mahoadon','$hoten','$dienthoai','$diachi','$email','$httt','$tonggia','$noidung','$body','$ngaydangky','1','".$_SESSION['logging']['id']."','$tinh','$quan','$id_tinh','$id_quan')";	
			if(mysql_query($sql))
			{
			include_once "phpmailer/class.phpmailer.php";
			
			//Khởi tạo đối tượng
			$mail = new PHPMailer();
			//Thiet lap thong tin nguoi gui va email nguoi gui
			$mail->IsSMTP(); // Gọi đến class xử lý SMTP
			$mail->SMTPAuth   = true;                  // Sử dụng đăng nhập vào account
			$mail->Host       = "127.0.0.1";     // Thiết lập thông tin của SMPT
			$mail->Username   = 'noreply@iambasix.vn'; // SMTP account username
			$mail->Password   = 'B6PI2FFiwj';            // SMTP account password
			$mail->SetFrom($row_setting['email'],$row_setting['ten']);
			
			//Thiết lập thông tin người nhận
			$mail->AddAddress($row_setting['email'],$row_setting['ten']);

			//Thiết lập thông tin người nhận
			$mail->AddAddress($_POST['email'],$_POST['ten']);

			//Thiết lập email nhận email hồi đáp
			//nếu người nhận nhấn nút Reply
			//$mail->AddReplyTo($row_setting['mail1'],$row_setting['ten']);
			
			
			/*=====================================
			* THIET LAP NOI DUNG EMAIL
			*=====================================*/
			
			//Thiết lập tiêu đề
			$mail->Subject    = "Đặt hàng - website http://iambasix.vn/";
			//Thiết lập định dạng font chữ
			$mail->CharSet = "utf-8";
			$mail->IsHTML(true);

			$bdf='<table style="width:600px;">';
			$bdf.='<tr>';
			$bdf.='<td colspan="2">MÃ ĐƠN HÀNG CỦA BẠN: <strong>'.$mahoadon.'</strong></td>';
			$bdf.='</tr><tr>';
			$bdf.='<td colspan="2">Bạn vừa mua:</td></tr>';

			$max=count($_SESSION['cart']);
			for($i=0;$i<$max;$i++){
				$pid=$_SESSION['cart'][$i]['productid'];
				$q=$_SESSION['cart'][$i]['qty'];					
				$ppro=get_product($pid);
				$size=get_info($_SESSION['cart'][$i]['size'],'product_size');
                $mau=get_info($_SESSION['cart'][$i]['mau'],'product_mau');
				if($q==0) continue;
				$bdf.='<tr><td colspan="2"><img src="http://'.$config_url.'/'._upload_product_l.$ppro['thumb'].'" width="80" alt="Sản phẩm" style="vertical-align: top;" /> '.$ppro['ten'].'[Size: '.$size['ten_vi'].' - Màu: '.$mau['ten_vi'].']</td></tr>';
			}
			$bdf.='</tr><tr>';
			$bdf.='<td colspan="2" style="height:1px; border-bottom:1px dashed #CCC;"></td>';
			$bdf.='</tr><tr>';
			$bdf.='<td><strong>Giá trị đơn hàng</strong></td><td style="text-align:right;">'.number_format(get_order_total()+$phivanchuyen,0, ',', '.').'đ</td>';
			$bdf.='</tr><tr>';
			$bdf.='<td><strong>Phí vận chuyển</strong></td><td style="text-align:right;">'.number_format($phivanchuyen,0, ',', '.').'đ</td>';
			$bdf.='</tr><tr>';
			if($_SESSION['logging']['vip']==1 && $_SESSION['giam']['gia']>0)
			{
					
			}
			elseif($_SESSION['logging']['vip']==1)
			{
				
			}
			elseif($_SESSION['giam']['gia']>0)
			{
				$bdf.='<td><strong>Mã giảm giá được giảm</strong></td>';

				if($_SESSION['giam']['loai']==1)
				{
					$bdf.='<td style="text-align:right;">'.number_format($_SESSION['giam']['gia'],0,'',',').'đ</td>';
				}
				else
				{
					$bdf.='<td style="text-align:right;">'.$_SESSION['giam']['gia'].'%</td>';
				}
			}
			$bdf.='</tr><tr>';
			$bdf.='<td><strong>Tổng cộng</strong></td>';

			if($_SESSION['giam']['loai']==1)
			{ 
				$tp_cart=get_order_total()-$_SESSION['giam']['gia'];
			}
			else
			{ 
				$tp_cart=get_order_total()*((100-$_SESSION['giam']['gia'])/100);
			} 
			$bdf.='<td style="text-align:right;">'.number_format($tp_cart,0, ',', '.').'đ</td>';
			$bdf.='</tr>';
			$bdf.='</table>';

			unset($_SESSION['cart']);
			unset($_SESSION['giam']);
			unset($_SESSION['info']);

			$body1 = '<table>';
			$body1 .= '
			<tr>
				<th colspan="2">&nbsp;</th>
			</tr>
			<tr>
				<th colspan="2">Thông tin đơn hàng</th>
			</tr>
			<tr>
				<th colspan="2">&nbsp;</th>
			</tr>
			<tr>
				<th>Họ tên :</th><td>'.$_POST['ten'].'</td>
			</tr>
			<tr>
				<th>Tỉnh/Thành phố :</th><td>'.$_POST['tinh'].'</td>
			</tr>
			<tr>
				<th>Quận/Huyện :</th><td>'.$_POST['quan'].'</td>
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
				<th>Ghi chú:</th><td>'.$_POST['noidung'].'</td>
			</tr>
			<tr>
				<th>Mã đơn hàng :</th><td><b>'.$mahoadon.'</b></td>
			</tr>';
			$body1 .= '</table>';
			
			//$body2 = $body1.$body;
			$body2 = $bdf;
			
			$mail->Body = $body2;
			
			if($mail->Send()) 
			{
				transfer("Gửi đơn hàng thành công!<br/>", "http://".$config_url."/");	
			}else
				transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại.", "http://".$config_url."/");
		}
		
		else
		{
			transfer("Có lỗi xảy ra<br/>", "http://".$config_url."/");	
		}
		
	}
}
?>