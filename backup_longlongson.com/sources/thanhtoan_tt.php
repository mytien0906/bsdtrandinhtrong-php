<?php  if(!defined('_source')) die("Error");		
	
	$id =  addslashes($_GET['id']);
	
	switch($id){
		case 'buoc-3':
			step3();
			$template_member ="thanhtoan/step3";
		break;	

		case 'buoc-2':
			step2();
			$template_member ="thanhtoan/step2";
		break;	

		default: 
			step1();
			$template_member = "thanhtoan/step1";
			break;
	}	

	function step1()
	{
		global $d,$thongbao,$config_url;

		## Check step
		if(isset($_SESSION['logging']))
		{
			redirect('http://'.$config_url.'/thanh-toan/buoc-2');
		}

		if(!empty($_POST))
		{
			$email=$_POST['email'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			if($email!='')
			{
				$_SESSION['nologin']['email']=$email;
				redirect('http://'.$config_url.'/thanh-toan/buoc-2');
			}
			else
			{
				$d->reset();
				$sql="select * from #_thanhvien where hienthi=1 and username='".$username."' and password='".md5($password)."'";
				$d->query($sql);
				$tmp=$d->fetch_array();

				if($tmp)
				{
					$_SESSION['logging']=array();
					$_SESSION['logging']=$tmp;
					$_SESSION['logging']['vip']=0;
					redirect('http://'.$config_url.'/thanh-toan/buoc-2');
				}
				else
				{
					$thongbao="Thông tin tài khoản không chính xác!";
				}
			}
		}
	}

	function step2()
	{
		global $d,$thongbao,$config_url;

		## Check step
		if(!isset($_SESSION['logging']) && !isset($_SESSION['nologin']))
		{
			redirect('http://'.$config_url.'/thanh-toan/buoc-1');
		}

		if(!empty($_POST))
		{
			$_SESSION['thanhtoan']=$_POST['data'];
			redirect('http://'.$config_url.'/thanh-toan/buoc-3');
		}
	}

	function step3()
	{
		global $d,$thongbao,$config_url,$config,$row_setting;

		## Check step
		if(!isset($_SESSION['thanhtoan']))
		{
			redirect('http://'.$config_url.'/thanh-toan/buoc-1');
		}

		if(!empty($_POST))
		{
			## Xu ly thanh toan don hang
			$body.='<table border="0" cellpadding="5px" cellspacing="1px" style="font-size:12px; background:#FFF; width:1000px;">';
			if(is_array($_SESSION['cart']))
			{
            	$body.='<tr style="background:#e904d0; font-weight:bold; color:#FFF; border-left:1px solid #CCC; border-right:1px solid #CCC;"><th style="padding:5px; width:5%; text-align:center;">STT</th><th style="padding:5px; width:45%; text-align:center;">Sản phẩm</th><th style="padding:5px; width:10%; text-align:center;">Hình ảnh</th><th style="padding:5px; width:15%; text-align:center;">Giá</th><th style="padding:5px; width:10%; text-align:center;">Số lượng</th><th style="padding:5px; width:15%; text-align:center;">Tổng giá</th></tr>';
				$max=count($_SESSION['cart']);
				$ngaydangky=time();
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];					
					$ppro=get_product($pid);
					if($q==0) continue;
					$body.='<tr style="border-left:1px solid #CCC; border-right:1px solid #CCC; border-bottom:1px solid #CCC;">';
					$body.='<td style="padding:5px; width:5%; text-align:center;">'.($i+1).'</td>';
            		$body.='<td style="padding:5px; width:45%; text-align:center;"><a href="http://'.$config_url.'/san-pham/'.$ppro['tenkhongdau'].'" target="_blank">'.$ppro['ten'].'</a></td>';
					$body.='<td style="padding:5px; width:5%; text-align:center;"><a href="http://'.$config_url.'/san-pham/'.$ppro['tenkhongdau'].'" target="_blank"><img src="http://'.$config_url.'/'._upload_product_l.$ppro['thumb'].'" alt="'.$ppro['ten'].'" width="100" /></a></td>';
					$body.='<td style="padding:5px; width:5%; text-align:center;">'.number_format(($ppro['giagiam']>0)?$ppro['giagiam']:$ppro['gia'],0,'',',').'đ'.'</td>';
					$body.='<td style="padding:5px; width:5%; text-align:center;">'.$q.'</td>';
					$body.='<td style="padding:5px; width:5%; text-align:center;">'.number_format((($ppro['giagiam']>0)?$ppro['giagiam']:$ppro['gia'])*$q,0, '', ',') .'đ</td>';
					$body.='</tr>';
				}
				$body.='<tr style="border-left:1px solid #CCC; border-right:1px solid #CCC;">';
				$body.='<td colspan="6" style="padding:5px; background:#e904d0; font-weight:bold; color:#FFF;">';
				$body.='<div>Tổng giá: '.number_format(get_order_total()+$phivanchuyen,0, ',', '.').'đ</div>';
				if($_SESSION['logging']['vip']==1 && $_SESSION['giam']['gia']>0)
				{
					$body.='<div>Thành viên <span style="color:#FF0;">VIP</span> được giảm <span style="color:#FF0;">'.$row_settingdh['vipdiscount'].'%</span>. Mã giảm giá được giảm: <span style="color:#FF0;">';
					if($_SESSION['giam']['loai']==1)
					{
						$body.=number_format($_SESSION['giam']['gia'],0,'',',').'đ';
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
					$body.=number_format($tp_cart,0, ',', '.').'&nbsp;đ</span></div>';	
				}
				elseif($_SESSION['logging']['vip']==1)
				{
					$body.='<div>Thành viên <span style="color:#FF0;">VIP</span> được giảm <span style="color:#FF0;">'.$row_settingdh['vipdiscount'].'%</span>. Còn lại: <span style="color:#FF0;">'.number_format(get_order_total()*(100-$row_settingdh['vipdiscount'])/100,0, ',', '.').'&nbsp;đ</span></div>';
				}
				elseif($_SESSION['giam']['gia']>0)
				{
					$body.='<div>Mã giảm giá được giảm <span style="color:#FF0;">';
					if($_SESSION['giam']['loai']==1)
					{
						$body.=number_format($_SESSION['giam']['gia'],0,'',',').'đ';
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
					$body.=number_format($tp_cart,0, ',', '.').'đ</span></div>';
				}
				$body.='</td>';
                $body.='</tr>';
            }
			else{
				$body.='<tr bgColor="#FFFFFF"><td>There are no items in your shopping cart!</td></tr>';
			}
       		$body.='</table>';

       		$mahoadon=strtoupper (ChuoiNgauNhien(6));
       		$tonggia=get_order_total();
       		$sql = "INSERT INTO  table_donhang (madonhang,hoten,dienthoai,diachi,email,httt,tonggia,noidung,donhang,ngaytao,trangthai,id_tv,tinh,quan,id_tinh,id_quan ) 
				  VALUES ('$mahoadon','".$_SESSION['thanhtoan']['ten']."','".$_SESSION['thanhtoan']['dienthoai']."','".$_SESSION['thanhtoan']['diachi']."','".$_SESSION['thanhtoan']['email']."','$httt','$tonggia','".$_SESSION['thanhtoan']['noidung']."','$body','$ngaydangky','1','".$_SESSION['logging']['id']."','$tinh','$quan','$id_tinh','$id_quan')";
			if(mysql_query($sql))
			{
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

				//Thiết lập thông tin người nhận
				$mail->AddAddress($_SESSION['thanhtoan']['email'],$_SESSION['thanhtoan']['ten']);

				/*=====================================
				* THIET LAP NOI DUNG EMAIL
				*=====================================*/
				
				//Thiết lập tiêu đề
				$mail->Subject    = "Đặt hàng - website http://".$config_url."/";
				//Thiết lập định dạng font chữ
				$mail->CharSet = "utf-8";
				$mail->IsHTML(true);

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
					<th>Họ tên :</th><td>'.$_SESSION['thanhtoan']['ten'].'</td>
				</tr>
				<tr>
					<th>Tỉnh/Thành phố :</th><td>'.$_SESSION['thanhtoan']['tinh'].'</td>
				</tr>
				<tr>
					<th>Quận/Huyện :</th><td>'.$_SESSION['thanhtoan']['quan'].'</td>
				</tr>
				<tr>
					<th>Địa chỉ :</th><td>'.$_SESSION['thanhtoan']['diachi'].'</td>
				</tr>
				<tr>
					<th>Điện thoại :</th><td>'.$_SESSION['thanhtoan']['dienthoai'].'</td>
				</tr>
				<tr>
					<th>Email :</th><td>'.$_SESSION['thanhtoan']['email'].'</td>
				</tr>
				<tr>
					<th>Ghi chú:</th><td>'.$_SESSION['thanhtoan']['noidung'].'</td>
				</tr>
				<tr>
					<th>Mã đơn hàng :</th><td><b>'.$mahoadon.'</b></td>
				</tr>';
				$body1 .= '</table>';

				$body2 = $body1.$body;
				$mail->Body = $body2;
				unset($_SESSION['cart']);
				unset($_SESSION['thanhtoan']);
				if($mail->Send()) 
				{
					transfer("Gửi đơn hàng thành công!<br/>", "http://".$config_url."/");	
				}else
					transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại.", "http://".$config_url."/");
			}	

			
		}
	}
?>