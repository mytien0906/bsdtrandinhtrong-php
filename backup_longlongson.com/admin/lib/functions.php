<?php if(!defined('_lib')) die("Error");
#
#	$id_connect : ket noi database
#

// Strat func
  function getBrowser ($browser)
  {
    
    $browsertyp = "UnKnown";

    if ($browser)
    {
      if (strpos($browser, "Mozilla/5.0")) $browsertyp = "Mozilla";
      if (strpos($browser, "Mozilla/4")) $browsertyp = "Netscape";
      if (strpos($browser, "Mozilla/3")) $browsertyp = "Netscape";
      if (strpos($browser, "Firefox") || strpos($browser, "Firebird")) $browsertyp = "Firefox";
      if (strpos($browser, "MSIE")) $browsertyp = "Internet Explorer";
      if (strpos($browser, "Opera")) $browsertyp = "Opera";
	  if (strpos($browser, "Opera Mini")) $browsertyp = "Opera Mini";			
      if (strpos($browser, "Netscape")) $browsertyp = "Netscape";
      if (strpos($browser, "Camino")) $browsertyp = "Camino";
      if (strpos($browser, "Galeon")) $browsertyp = "Galeon";
      if (strpos($browser, "Konqueror")) $browsertyp = "Konqueror";
      if (strpos($browser, "Safari")) $browsertyp = "Safari";
      if (strpos($browser, "Chrome")) $browsertyp = "Chrome";
      if (strpos($browser, "OmniWeb")) $browsertyp = "OmniWeb";
      if (strpos($browser, "Flock")) $browsertyp = "Firefox Flock";
      if (strpos($browser, "Lynx")) $browsertyp = "Lynx";
      if (strpos($browser, "Mosaic")) $browsertyp = "Mosaic";
	  if (strpos($browser, "Shiretoko")) $browsertyp = "Shiretoko";
	  if (strpos($browser, "IceCat")) $browsertyp = "IceCat";			
	  if (strpos($browser, "BlackBerry")) $browsertyp = "BlackBerry";			
      if (strpos($browser, "Googlebot") || strpos($browser, "www.google.com")) $browsertyp = "Google Bot";
	  if (strpos($browser, "Yahoo") || strpos($browser, "help.yahoo.com")) $browsertyp = "Yahoo Bot";
	  if (strpos($browser, "Pingdom") || strpos($browser, "pingdom.com")) $browsertyp = "Pingdom Bot";
	  if (strpos($browser, "coccoc") || strpos($browser, "help.coccoc.com")) $browsertyp = "Coccoc bot";
	  if (strpos($browser, "MJ12bot") || strpos($browser, "www.majestic12.co.uk")) $browsertyp = "MJ12 Bot";   
	  if (strpos($browser, "Baiduspider") || strpos($browser, "www.baidu.com")) $browsertyp = "Baidu Bot"; 
	  if (strpos($browser, "AhrefsBot") || strpos($browser, "ahrefs.com")) $browsertyp = "Ahrefs Bot"; 
    }
    
    return $browsertyp;
  }
  
  // Strat func
  function getOs ($os)
  {
  	$ostyp = "UnKnown";
    if ($os)
    {
      if (strpos($os, "Win95") || strpos($os, "Windows 95")) $ostyp = "Windows 95";
      if (strpos($os, "Win98") || strpos($os, "Windows 98")) $ostyp = "Windows 98";
      if (strpos($os, "WinNT") || strpos($os, "Windows NT")) $ostyps = "Windows NT";
      if (strpos($os, "WinNT 5.0") || strpos($os, "Windows NT 5.0")) $ostyp = "Windows 2000";
      if (strpos($os, "WinNT 5.1") || strpos($os, "Windows NT 5.1")) $ostyp = "Windows XP";
      if (strpos($os, "WinNT 6.0") || strpos($os, "Windows NT 6.0")) $ostyp = "Windows Vista";
	  if (strpos($os, "WinNT 6.1") || strpos($os, "Windows NT 6.1")) $ostyp = "Windows 7";
	  if (strpos($os, "WinNT 6.2") || strpos($os, "Windows NT 6.2")) $ostyp = "Windows 8";
	  if (strpos($os, "WinNT 6.3") || strpos($os, "Windows NT 6.3")) $ostyp = "Windows 8";
	  if (strpos($os, "WinNT 10.0") || strpos($os, "Windows NT 10.0")) $ostyp = "Windows 10";
      if (strpos($os, "Linux")) $ostyp = "Linux";
      if (strpos($os, "OS/2")) $ostyp = "OS/2";
      if (strpos($os, "Sun")) $ostyp = "Sun OS";
      if (strpos($os, "BB10")) $ostyp = "BlackBerry";
			if (strpos($os, "iPod")) $ostyp = "iPodTouch";
			if (strpos($os, "iPhone")) $ostyp = "iPhone";
			if (strpos($os, "iPad")) $ostyp = "iPad";
			if (strpos($os, "Android")) $ostyp = "Android";			
			if (strpos($os, "Windows Phone")) $ostyp = "Windows Phone";						
      if (strpos($os, "Macintosh") || strpos($os, "Mac_PowerPC")) $ostyp = "Mac OS";
      if (strpos($os, "Yahoo") || strpos($os, "help.yahoo.com")) $ostyp = "Yahoo Bot";
      if (strpos($os, "Googlebot") || strpos($os, "www.google.com")) $ostyp = "Google Bot";
      if (strpos($os, "Pingdom") || strpos($os, "pingdom.com")) $ostyp = "Pingdom Bot";
      if (strpos($os, "coccoc") || strpos($os, "help.coccoc.com")) $ostyp = "Coccoc Bot";
      if (strpos($os, "MJ12bot") || strpos($os, "www.majestic12.co.uk")) $ostyp = "MJ12 Bot";
      if (strpos($os, "Baiduspider") || strpos($os, "www.baidu.com")) $ostyp = "Baidu Bot";
      if (strpos($os, "AhrefsBot") || strpos($os, "ahrefs.com")) $ostyp = "Ahrefs Bot"; 
      
     
    
    }
    return $ostyp;
  }
  
function magic_quote($str, $id_connect=false)	
{	
	if (is_array($str))
	{
		foreach($str as $key => $val)
		{
			$str[$key] = escape_str($val);
		}
		
		return $str;
	}
	
	if (is_numeric($str)) {
		return $str;
	}
	
	if(get_magic_quotes_gpc()){
		$str = stripslashes($str);
	}

	if (function_exists('mysql_real_escape_string') AND is_resource($id_connect))
	{
		return mysql_real_escape_string($str, $id_connect);
	}
	elseif (function_exists('mysql_escape_string'))
	{
		return mysql_escape_string($str);
	}
	else
	{
		return addslashes($str);
	}
}

#
#	$id_connect : ket noi database
#
function escape_str($str, $id_connect=false)	
{	
	if (is_array($str))
	{
		foreach($str as $key => $val)
		{
			$str[$key] = escape_str($val);
		}
		
		return $str;
	}
	
	if (is_numeric($str)) {
		return $str;
	}
	
	if(get_magic_quotes_gpc()){
		$str = stripslashes($str);
	}

	if (function_exists('mysql_real_escape_string') AND is_resource($id_connect))
	{
		return "'".mysql_real_escape_string($str, $id_connect)."'";
	}
	elseif (function_exists('mysql_escape_string'))
	{
		return "'".mysql_escape_string($str)."'";
	}
	else
	{
		return "'".addslashes($str)."'";
	}
}

// dem so nguoi online //
/////////////////////////
function count_online(){
/*
CREATE TABLE `camranh_online` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `session_id` varchar(255) NOT NULL,
  `time` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;
*/
	global $d;
	$time = 600; // 10 phut
	$ssid = session_id();

	// xoa het han
	$sql = "delete from #_online where time<".(time()-$time);
	$d->query($sql);
	//
	$sql = "select id,session_id from #_online order by id desc";
	$d->query($sql);
	$result['dangxem'] = $d->num_rows();
	$rows = $d->result_array();
	$i = 0;
	while(($rows[$i]['session_id'] != $ssid) && $i++<$result['dangxem']);
	
	if($i<$result['dangxem']){
		$sql = "update #_online set time='".time()."' where session_id='".$ssid."'";
		$d->query($sql);
		$result['daxem'] = $rows[0]['id'];
	}
	else{
		$sql = "insert into #_online (session_id, time) values ('".$ssid."', '".time()."')";
		$d->query($sql);
		$result['daxem'] = mysql_insert_id();
		$result['dangxem']++;
	}
	
	return $result; // array('dangxem'=>'', 'daxem'=>'')
}


function make_date($time,$dot='.',$lang='vi',$f=false){
	
	$str = ($lang == 'vi') ? date("d{$dot}m{$dot}Y",$time) : date("m{$dot}d{$dot}Y",$time);
	if($f){
		$thu['vi'] = array('Chủ nhật','Thứ hai','Thứ ba','Thứ tư','Thứ năm','Thứ sáu','Thứ bảy');
		$thu['en'] = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
		$str = $thu[$lang][date('w',$time)].', '.$str;
	}
	return $str;
}

function alert($s){
	echo '<script language="javascript"> alert("'.$s.'") </script>';
}

function delete_file($file){
		return @unlink($file);
}

function upload_image($file, $extension, $folder, $newname=''){
	if(isset($_FILES[$file]) && !$_FILES[$file]['error']){
		
		$ext = end(explode('.',$_FILES[$file]['name']));
		$name = basename($_FILES[$file]['name'], '.'.$ext);
		
		if(strpos($extension, $ext)===false){
			alert('Chỉ hỗ trợ upload file dạng '.$extension);
			return false; // không hỗ trợ
		}
		
		if($newname=='' && file_exists($folder.$_FILES[$file]['name']))
			for($i=0; $i<100; $i++){
				if(!file_exists($folder.$name.$i.'.'.$ext)){
					$_FILES[$file]['name'] = $name.$i.'.'.$ext;
					break;
				}
			}
		else{
			$_FILES[$file]['name'] = $newname.'.'.$ext;
		}
		
		if (!copy($_FILES[$file]["tmp_name"], $folder.$_FILES[$file]['name']))	{
			if ( !move_uploaded_file($_FILES[$file]["tmp_name"], $folder.$_FILES[$file]['name']))	{
				return false;
			}
		}
		return $_FILES[$file]['name'];
	}
	return false;
}

function thumb_image($file, $width, $height, $folder){	

	if(!file_exists($folder.$file))	return false; // không tìm thấy file
	
	if ($cursize = getimagesize ($folder.$file)) {					
		$newsize = setWidthHeight($cursize[0], $cursize[1], $width, $height);
		$info = pathinfo($file);
		
		$dst = imagecreatetruecolor ($newsize[0],$newsize[1]);
		
		$types = array('jpg' => array('imagecreatefromjpeg', 'imagejpeg'),
					'gif' => array('imagecreatefromgif', 'imagegif'),
					'png' => array('imagecreatefrompng', 'imagepng'));
		$func = $types[$info['extension']][0];
		$src = $func($folder.$file); 
		imagecopyresampled($dst, $src, 0, 0, 0, 0,$newsize[0], $newsize[1],$cursize[0], $cursize[1]);
		$func = $types[$info['extension']][1];
		$new_file = str_replace('.'.$info['extension'],'_thumb.'.$info['extension'],$file);
		
		return $func($dst, $folder.$new_file) ? $new_file : false;
	}
}


function setWidthHeight($width, $height, $maxWidth, $maxHeight){
	$ret = array($width, $height);
	$ratio = $width / $height;
	if ($width > $maxWidth || $height > $maxHeight) {
		$ret[0] = $maxWidth;
		$ret[1] = $ret[0] / $ratio;
		if ($ret[1] > $maxHeight) {
			$ret[1] = $maxHeight;
			$ret[0] = $ret[1] * $ratio;
		}
	}
	return $ret;
}


function transfer($msg,$page="index.php")
{
	 $showtext = $msg;
	 $page_transfer = $page;
	 include("./templates/transfer_tpl.php");
	 exit();
}

function redirect($url=''){
	echo '<script language="javascript">window.location = "'.$url.'" </script>';
	exit();
}

function back($n=1){
	echo '<script language="javascript">history.go = "'.-intval($n).'" </script>';
	exit();
}

function chuanhoa($s){
	$s = str_replace("'", '&#039;', $s);
	$s = str_replace('"', '&quot;', $s);
	$s = str_replace('<', '&lt;', $s);
	$s = str_replace('>', '&gt;', $s);
	return $s;
}

function themdau($s){
	$s = addslashes($s);
	return $s;
}

function bodau($s){
	$s = stripslashes($s);
	return $s;
}

function dump($arr, $exit=1){
	echo "<pre>";	
		var_dump($arr);
	echo "<pre>";	
	if($exit)	exit();
}

	function paging($r, $url='', $curPg=1, $mxR=5, $mxP=5, $class_paging='')
	{
		if($curPg<1) $curPg=1;
		if($mxR<1) $mxR=5;
		if($mxP<1) $mxP=5;
		$totalRows=count($r);
		if($totalRows==0)	
			return array('source'=>NULL, 'paging'=>NULL);
		$totalPages=ceil($totalRows/$mxR);
		if($curPg > $totalPages) $curPg=$totalPages;
		
		$_SESSION['maxRow']=$mxR;
		$_SESSION['curPage']=$curPg;

		$r2=array();
		$paging="";
		
		//-------------tao array------------------
		$start=($curPg-1)*$mxR;
		$end=($start+$mxR)<$totalRows?($start+$mxR):$totalRows;
		#echo $start;
		#echo $end;
		
		$j=0;
		for($i=$start;$i<$end;$i++)
			$r2[$j++]=$r[$i];
			
		//-------------tao chuoi------------------
		$curRow = ($curPg-1)*$mxR+1;	
		if($totalRows>$mxR)
		{
			$start=1;
			$end=1;
			$paging1 ="";				 	 
			for($i=1;$i<=$totalPages;$i++)
			{	
				if(($i>((int)(($curPg-1)/$mxP))* $mxP) && ($i<=((int)(($curPg-1)/$mxP+1))* $mxP))
				{
					if($start==1) $start=$i;
					if($i==$curPg){
						$paging1.=" <span>".$i."</span> ";//dang xem
					} 		  	
					else    
					{
						$paging1 .= " <a href='".$url."&curPage=".$i."'  class=\"{$class_paging}\">".$i."</a> ";	
					}
					$end=$i;	
				}
			}//tinh paging
			//$paging.= "Go to page :&nbsp;&nbsp;" ;
			#if($curPg>$mxP)
			#{
				$paging .=" <a href='".$url."' class=\"{$class_paging}\" >&laquo;</a> "; //ve dau
				
				#$paging .=" <a href='".$url."&curPage=".($start-1)."' class=\"{$class_paging}\" >&#8249;</a> "; //ve truoc
				$paging .=" <a href='".$url."&curPage=".($curPg-1)."' class=\"{$class_paging}\" >&#8249;</a> "; //ve truoc
			#}
			$paging.=$paging1; 
			#if(((int)(($curPg-1)/$mxP+1)*$mxP) < $totalPages)  
			#{
				#$paging .=" <a href='".$url."&curPage=".($end+1)."' class=\"{$class_paging}\" >&#8250;</a> "; //ke
				$paging .=" <a href='".$url."&curPage=".($curPg+1)."' class=\"{$class_paging}\" >&#8250;</a> "; //ke
				
				$paging .=" <a href='".$url."&curPage=".($totalPages)."' class=\"{$class_paging}\" >&raquo;</a> "; //ve cuoi
			#}
		}
		$r3['curPage']=$curPg;
		$r3['source']=$r2;
		$r3['paging']=$paging;
		#echo '<pre>';var_dump($r3);echo '</pre>';
		return $r3;
	}
function paging_home($r, $url='', $curPg=1, $mxR=5, $mxP=5, $class_paging='')
	{
		if($curPg<1) $curPg=1;
		if($mxR<1) $mxR=5;
		if($mxP<1) $mxP=5;
		$totalRows=count($r);
		if($totalRows==0)	
			return array('source'=>NULL, 'paging'=>NULL);
		$totalPages=ceil($totalRows/$mxR);
		if($curPg > $totalPages) $curPg=$totalPages;
		
		$_SESSION['maxRow']=$mxR;
		$_SESSION['curPage']=$curPg;

		$r2=array();
		$paging="";
		
		//-------------tao array------------------
		$start=($curPg-1)*$mxR;
		$end=($start+$mxR)<$totalRows?($start+$mxR):$totalRows;
		#echo $start;
		#echo $end;
		
		$j=0;
		for($i=$start;$i<$end;$i++)
			$r2[$j++]=$r[$i];
			
		//-------------tao chuoi------------------
		$curRow = ($curPg-1)*$mxR+1;	
		if($totalRows>$mxR)
		{
			$start=1;
			$end=1;
			$paging1 ="";				 	 
			for($i=1;$i<=$totalPages;$i++)
			{	
				if(($i>((int)(($curPg-1)/$mxP))* $mxP) && ($i<=((int)(($curPg-1)/$mxP+1))* $mxP))
				{
					if($start==1) $start=$i;
					if($i==$curPg){
						$paging1.=" <span>".$i."</span> ";//dang xem
					} 		  	
					else    
					{
						$paging1 .= " <a href='".$url."/p=".$i."'  class=\"{$class_paging}\">".$i."</a> ";	
					}
					$end=$i;	
				}
			}//tinh paging
			//$paging.= "Go to page :&nbsp;&nbsp;" ;
			#if($curPg>$mxP)
			#{
				$paging .=" <a href='".$url."' class=\"{$class_paging}\" >Trang đầu</a> "; //ve dau
				
				#$paging .=" <a href='".$url."&curPage=".($start-1)."' class=\"{$class_paging}\" >&#8249;</a> "; //ve truoc
				$paging .=" <a href='".$url."/p=".($curPg-1)."' class=\"{$class_paging}\" >Trang trước</a> "; //ve truoc
			#}
			$paging.=$paging1; 
			#if(((int)(($curPg-1)/$mxP+1)*$mxP) < $totalPages)  
			#{
				#$paging .=" <a href='".$url."&curPage=".($end+1)."' class=\"{$class_paging}\" >&#8250;</a> "; //ke
				$paging .=" <a href='".$url."/p=".($curPg+1)."' class=\"{$class_paging}\" >Trang sau</a> "; //ke
				
				$paging .=" <a href='".$url."/p=".($totalPages)."' class=\"{$class_paging}\" >Trang cuối</a> "; //ve cuoi
			#}
		}
		$r3['curPage']=$curPg;
		$r3['source']=$r2;
		$r3['paging']=$paging;
		$r3['total']=$totalRows;
		#echo '<pre>';var_dump($r3);echo '</pre>';
		return $r3;
	}

function paging_home1($r, $url='', $curPg=1, $mxR=5, $mxP=5, $class_paging='')
	{
		if($curPg<1) $curPg=1;
		if($mxR<1) $mxR=5;
		if($mxP<1) $mxP=5;
		$totalRows=count($r);
		if($totalRows==0)	
			return array('source'=>NULL, 'paging'=>NULL);
		$totalPages=ceil($totalRows/$mxR);
		if($curPg > $totalPages) $curPg=$totalPages;
		
		$_SESSION['maxRow']=$mxR;
		$_SESSION['curPage']=$curPg;

		$r2=array();
		$paging="";
		
		//-------------tao array------------------
		$start=($curPg-1)*$mxR;
		$end=($start+$mxR)<$totalRows?($start+$mxR):$totalRows;
		#echo $start;
		#echo $end;
		
		$j=0;
		for($i=$start;$i<$end;$i++)
			$r2[$j++]=$r[$i];
			
		//-------------tao chuoi------------------
		$curRow = ($curPg-1)*$mxR+1;	
		if($totalRows>$mxR)
		{
			$start=1;
			$end=1;
			$paging1 ="";				 	 
			for($i=1;$i<=$totalPages;$i++)
			{	
				if(($i>((int)(($curPg-1)/$mxP))* $mxP) && ($i<=((int)(($curPg-1)/$mxP+1))* $mxP))
				{
					if($start==1) $start=$i;
					if($i==$curPg){
						$paging1.=" <span>".$i."</span> ";//dang xem
					} 		  	
					else    
					{
						$paging1 .= " <a href='".$url."&p=".$i."'  class=\"{$class_paging}\">".$i."</a> ";	
					}
					$end=$i;	
				}
			}//tinh paging
			//$paging.= "Go to page :&nbsp;&nbsp;" ;
			#if($curPg>$mxP)
			#{
				$paging .=" <a href='".$url."' class=\"{$class_paging}\" >First</a> "; //ve dau
				
				#$paging .=" <a href='".$url."&curPage=".($start-1)."' class=\"{$class_paging}\" >&#8249;</a> "; //ve truoc
				$paging .=" <a href='".$url."&p=".($curPg-1)."' class=\"{$class_paging}\" >Prev</a> "; //ve truoc
			#}
			$paging.=$paging1; 
			#if(((int)(($curPg-1)/$mxP+1)*$mxP) < $totalPages)  
			#{
				#$paging .=" <a href='".$url."&curPage=".($end+1)."' class=\"{$class_paging}\" >&#8250;</a> "; //ke
				$paging .=" <a href='".$url."&p=".($curPg+1)."' class=\"{$class_paging}\" >Next</a> "; //ke
				
				$paging .=" <a href='".$url."&p=".($totalPages)."' class=\"{$class_paging}\" >Last</a> "; //ve cuoi
			#}
		}
		$r3['curPage']=$curPg;
		$r3['source']=$r2;
		$r3['paging']=$paging;
		$r3['total']=$totalRows;
		#echo '<pre>';var_dump($r3);echo '</pre>';
		return $r3;
	}

function catchuoi($chuoi,$gioihan){
// nếu độ dài chuỗi nhỏ hơn hay bằng vị trí cắt
// thì không thay đổi chuỗi ban đầu
if(strlen($chuoi)<=$gioihan)
{
return $chuoi;
}
else{
/*
so sánh vị trí cắt
với kí tự khoảng trắng đầu tiên trong chuỗi ban đầu tính từ vị trí cắt
nếu vị trí khoảng trắng lớn hơn
thì cắt chuỗi tại vị trí khoảng trắng đó
*/
if(strpos($chuoi," ",$gioihan) > $gioihan){
$new_gioihan=strpos($chuoi," ",$gioihan);
$new_chuoi = substr($chuoi,0,$new_gioihan)."...";
return $new_chuoi;
}
// trường hợp còn lại không ảnh hưởng tới kết quả
$new_chuoi = substr($chuoi,0,$gioihan)."...";
return $new_chuoi;
}
}

function stripUnicode($str){
  if(!$str) return false;
   $unicode = array(
     'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
     'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
     'd'=>'đ',
     'D'=>'Đ',
     'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
   	  'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
   	  'i'=>'í|ì|ỉ|ĩ|ị',	  
   	  'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
     'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
   	  'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
     'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
   	  'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
     'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
     'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
   );
   foreach($unicode as $khongdau=>$codau) {
     	$arr=explode("|",$codau);
   	  $str = str_replace($arr,$khongdau,$str);
   }
return $str;
}// Doi tu co dau => khong dau

function changeTitle($str)
{
	$str = stripUnicode($str);
	$str = mb_convert_case($str,MB_CASE_LOWER,'utf-8');
	$str = trim($str);
	$str=preg_replace('/[^a-zA-Z0-9\ ]/','',$str); 
	$str = str_replace("  "," ",$str);
	$str = str_replace(" ","-",$str);
	return $str;
}
function getCurrentPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
	$pageURL = explode("/p=", $pageURL);
    return $pageURL[0];
}
function getCurrentPageURLAdmin() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
	$pageURL = explode("&curPage=", $pageURL);
    return $pageURL[0];
}
function getCurrentPageURL1() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
	$pageURL = explode("&p=", $pageURL);
    return $pageURL[0];
}
function create_thumb($file, $width, $height, $folder,$file_name,$zoom_crop='1'){

// ACQUIRE THE ARGUMENTS - MAY NEED SOME SANITY TESTS?

$new_width   = $width;
$new_height   = $height;

 if ($new_width && !$new_height) {
        $new_height = floor ($height * ($new_width / $width));
    } else if ($new_height && !$new_width) {
        $new_width = floor ($width * ($new_height / $height));
    }
	
$image_url = $folder.$file;
$origin_x = 0;
$origin_y = 0;
// GET ORIGINAL IMAGE DIMENSIONS
$array = getimagesize($image_url);
if ($array)
{
    list($image_w, $image_h) = $array;
}
else
{
     die("NO IMAGE $image_url");
}
$width=$image_w;
$height=$image_h;

// ACQUIRE THE ORIGINAL IMAGE
$image_ext = trim(strtolower(end(explode('.', $image_url))));
switch(strtoupper($image_ext))
{
     case 'JPG' :
     case 'JPEG' :
         $image = imagecreatefromjpeg($image_url);
		 $func='imagejpeg';
         break;
     case 'PNG' :
         $image = imagecreatefrompng($image_url);
		 $func='imagepng';
         break;
	 case 'GIF' :
	 	 $image = imagecreatefromgif($image_url);
		 $func='imagegif';
		 break;

     default : die("UNKNOWN IMAGE TYPE: $image_url");
}

// scale down and add borders
	if ($zoom_crop == 3) {

		$final_height = $height * ($new_width / $width);

		if ($final_height > $new_height) {
			$new_width = $width * ($new_height / $height);
		} else {
			$new_height = $final_height;
		}

	}

	// create a new true color image
	$canvas = imagecreatetruecolor ($new_width, $new_height);
	imagealphablending ($canvas, false);

	// Create a new transparent color for image
	$color = imagecolorallocatealpha ($canvas, 255, 255, 255, 127);

	// Completely fill the background of the new image with allocated color.
	imagefill ($canvas, 0, 0, $color);

	// scale down and add borders
	if ($zoom_crop == 2) {

		$final_height = $height * ($new_width / $width);
		
		if ($final_height > $new_height) {
			
			$origin_x = $new_width / 2;
			$new_width = $width * ($new_height / $height);
			$origin_x = round ($origin_x - ($new_width / 2));

		} else {

			$origin_y = $new_height / 2;
			$new_height = $final_height;
			$origin_y = round ($origin_y - ($new_height / 2));

		}

	}

	// Restore transparency blending
	imagesavealpha ($canvas, true);

	if ($zoom_crop > 0) {

		$src_x = $src_y = 0;
		$src_w = $width;
		$src_h = $height;

		$cmp_x = $width / $new_width;
		$cmp_y = $height / $new_height;

		// calculate x or y coordinate and width or height of source
		if ($cmp_x > $cmp_y) {

			$src_w = round ($width / $cmp_x * $cmp_y);
			$src_x = round (($width - ($width / $cmp_x * $cmp_y)) / 2);

		} else if ($cmp_y > $cmp_x) {

			$src_h = round ($height / $cmp_y * $cmp_x);
			$src_y = round (($height - ($height / $cmp_y * $cmp_x)) / 2);

		}

		// positional cropping!
		if ($align) {
			if (strpos ($align, 't') !== false) {
				$src_y = 0;
			}
			if (strpos ($align, 'b') !== false) {
				$src_y = $height - $src_h;
			}
			if (strpos ($align, 'l') !== false) {
				$src_x = 0;
			}
			if (strpos ($align, 'r') !== false) {
				$src_x = $width - $src_w;
			}
		}

		imagecopyresampled ($canvas, $image, $origin_x, $origin_y, $src_x, $src_y, $new_width, $new_height, $src_w, $src_h);

    } else {

        // copy and resize part of an image with resampling
        imagecopyresampled ($canvas, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

    }
	


$new_file=$file_name.'_'.$new_width.'x'.$new_height.'.'.$image_ext;
// SHOW THE NEW THUMB IMAGE
if($func=='imagejpeg') $func($canvas, $folder.$new_file,100);
else $func($canvas, $folder.$new_file,floor ($quality * 0.09));

return $new_file;
}
function ChuoiNgauNhien($sokytu){
$chuoi="ABCDEFGHIJKLMNOPQRSTUVWXYZWabcdefghijklmnopqrstuvwxyzw0123456789";
for ($i=0; $i < $sokytu; $i++){
	$vitri = mt_rand( 0 ,strlen($chuoi) );
	$giatri= $giatri . substr($chuoi,$vitri,1 );
}
return $giatri;
} 

function check_yahoo($nick_yahoo='nthaih'){
	$file = @fopen("http://opi.yahoo.com/online?u=".$nick_yahoo."&m=t&t=1","r");
	$read = @fread($file,200);
	
	if($read==false || strstr($read,"00"))
		$img = '<img src="images/yahoo_offline.png" border="0" align="absmiddle" />';
	else
		$img = '<img src="images/yahoo_online.png" border="0" align="absmiddle"/>';
	return '<a href="ymsgr:sendIM?'.$nick_yahoo.'">'.$img.'</a>';
}
function limitWord($string, $maxOut){

$string2Array = explode(' ', $string, ($maxOut + 1));

if( count($string2Array) > $maxOut ){
array_pop($string2Array);
$output = implode(' ', $string2Array)."...";
}else{
$output = $string;
}
return $output;
}
/*
function load_view($file){
	ob_start();
	include _template.$file."_tpl.php";
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}

function check_browser(){
	$useragent = $_SERVER['HTTP_USER_AGENT'];

	if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
			$browser_version=$matched[1];
			$browser = 'IE';
	} elseif (preg_match( '|Opera ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
			$browser_version=$matched[1];
			$browser = 'Opera';
	} elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
			$browser_version=$matched[1];
			$browser = 'Firefox';
	} elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
			$browser_version=$matched[1];
			$browser = 'Safari';
	} else {
			// browser not recognized!
			$browser_version = 0;
			$browser= 'other';
	}
	return $browser;
}



function check_skype($nick_skype='ha.ngoc.thai'){
#		if(strlen(@file_get_contents("http://mystatus.skype.com/bigclassic/".$nick_skype))>2000)
		$img = '<img src="media/images/skype_online.gif" width="93" height="46" border="0" />';
#		else
#			$img = '<img src="media/images/skype_offline.gif" width="93" height="46" border="0" />';
	//alert(strlen(@file_get_contents("http://mystatus.skype.com/bigclassic/".$nick_skype)));
	return '<a href="skype:'.$nick_skype.'?call">'.$img.'</a>';
}

function tran($s){
	global $translate;
	#return $translate['Họ tên'];
	return strtr($s, $translate);
}

function redirect_error($n){
	switch ($n) {
		case '404' :
			echo "<center><h1>PAGE NOT FOUND</h1></center>";
			#echo "<script language='javascript'> window.location = 'error_404.html' </-------------script>";
			exit();
		default :
			alert('Kiem tra lai redirect_error');
			exit();
	}
}

function bodau2($s){
	$s = chuanhoa($s);
	$s = stripslashes($s);
	return $s;
}
function parent_alert($s){
	echo '<script language="javascript"> parent.alert("'.$s.'") </script>';
}

function parent_redirect($ur=''){
	echo '<script language="javascript">parent.location = "'.site($ur).'" </script>';
	exit();
}
function back($n=1){
	echo '<script language="javascript"> history.go('.-$n.'); </script>';
}
function goto($ur=''){
	echo '<script language="javascript">window.location = "'.$ur.'" </script>';
	exit();
}
//////////////  URL  //////////////////
///////////////////////////////////////////
function site($s=''){
	if(!DEBUG)
		$s = url_encode($s);
	return 'index.php?'.$s;

	$ur = 'index.php?'.$s;
	return url_encode($s);
	return $ur;
}

function url_encode($s){
	return  base64_encode($s);
}

function url_decode($s)	{
	return base64_decode($s);
}

function get_url(){
	$get = array();
	
	$query_str = !DEBUG ? url_decode($_SERVER['QUERY_STRING']) : $_SERVER["QUERY_STRING"];
	
	$parts = explode('&',$query_str);
	$get['com'] = $parts[0];
	for($i=1; $i<count($parts); $i++){
		$seg = explode( '=', $parts[$i]);
		$get[$seg[0]] = $seg[1];
	}
	$get['com'] = str_replace('-','/',$get['com']);
	return $get;
}


function check_login(){
	if(!isset($_SESSION['site_log']) || $_SESSION['site_log']==false)
		$_GET["com"] = "login";
}

function get_file($com, $act){
	#$com = isset($_GET['com']) ? $_GET['com'] : "index";
	$act = empty($act) ? '' : '_'.$act;
	$file['mod'] = "app/mod/".$com.$act."_mod.php";
	$file['ctr'] = "app/ctr/".$com.$act.".php";
	$file['view'] = "app/view/".$com.$act."_tpl.php";
	return $file;
}

function error_404(){
	if( DEBUG )
		header("Location: ../errors/error_404.php?com=".$_GET['com']);
	else
		header("Location: ../errors/error_404.php");
}

function top_content(){
	require_once "view/layout/top_tpl.php";
}

function bottom_content(){
	require_once "view/layout/bottom_tpl.php";
}

function main_content(){
	$file = get_file();	
	$error_nopage = 0;
	#dump($file);
	if( file_exists($file['mod'])) 
		require_once $file['mod'];
	if( file_exists($file['ctr'])){
		require_once $file['ctr'];
		$error_nopage ++;
	}
	if( file_exists($file['view'])){
		require_once $file['view'];
		$error_nopage++;
	}
	if($error_nopage == 0)
		error_404();
}




//////////////  FORM  //////////////////
///////////////////////////////////////////
function form_select($conf, $vals){
	$name = $conf['n'];
	$v = $conf['v'];
	$t = $conf['t'];
	$s = $conf['s'];
	$danh_muc = '<select id="$name" name="$name">';
	$danh_muc .= '<option value=""> ---- Select ---- </option>';
	for($i=0; $i<count($vals); $i++){
		$danh_muc .= "<option value=".$vals[$i][$v];
		if($vals[$i][$v]==$s) 
			$danh_muc .= " selected ";
		$danh_muc .= ">";
		$danh_muc .= $vals[$i][$t];
		$danh_muc .= '</option>';
	}
	$danh_muc .= '</select>';
	return $danh_muc;
}

function form_select_2($conf, $vals){
	$name = $conf['n'];
	$v = $conf['v'];
	$t = $conf['t'];
	$s = $conf['s'];
	$danh_muc = '<select id="$name" name="$name">';
	$danh_muc .= '<option value=""> ---- Chọn danh mục ---- </option>';
	for($i=0; $i<count($vals); $i++){
		$danh_muc .= "<option value=".$vals[$i][$v];
		if($vals[$i][$v]==$s) 
			$danh_muc .= " selected ";
		$danh_muc .= ">";
		$danh_muc .= $vals[$i][$t."_vi"]." - ".$vals[$i][$t."_en"];
		$danh_muc .= '</option>';
	}
	$danh_muc .= '</select>';
	return $danh_muc;
}
// echo form_select(array('n'=>'id_cat', 'v'=>'id', 't'=>'ten_vi', 's'=>$id_cat), $news_cats);

//////////////  PHAN TRANG  //////////////////
///////////////////////////////////////////

	function getUrl()
	{
		if(strpos($_SERVER['QUERY_STRING'],'&curPage')!==false)
			$url='?'.substr($_SERVER['QUERY_STRING'],0,strpos($_SERVER['QUERY_STRING'],'&curPage'));
		else
			$url='?'.$_SERVER['QUERY_STRING'];
		return $url;
	}

*/
#----------------------------------------------------------	

function get_stt($tbl)
{
	global $d;
	$d->reset();
	$sql="select max(stt) as rmax from #_$tbl";
	$d->query($sql);
	$result=$d->fetch_array();
	return $result['rmax']+1;	
}

function get_stt_type($tbl,$type)
{
	global $d;
	$d->reset();
	$sql="select max(stt) as rmax from #_$tbl where type='$type'";
	$d->query($sql);
	$result=$d->fetch_array();
	return $result['rmax']+1;	
}

function get_stt_type_level($tbl,$type,$level)
{
	global $d;
	$d->reset();
	$sql="select max(stt) as rmax from #_$tbl where type='$type' and level='$level'";
	$d->query($sql);
	$result=$d->fetch_array();
	return $result['rmax']+1;	
}


function get_youtube_link($link)
{
	if(strpos($link,'?v=')!==false)
	{
		$tmp=explode('?v=',$link);
		return $tmp[1];
	}
	else
	{
		return $link;
	}
}

function update_product_view($id)
{
	global $d;
	
	## Doc du lieu ngay thong ke cua san pham
	$d->reset();
	$sql="select cday,cweek,cmonth from #_product where id=$id";
	$d->query($sql);
	$row=$d->fetch_array();
	
	$cday=date('d', $row['cday']);
	$cweek=date('W',$row['cweek']);
	$cmonth=date('n',$row['cmonth']);
	
	## Thoi gian hien tai
	$now=time();
	
	$nday=date('d', $now);
	$nweek=date('W',$now);
	$nmonth=date('n',$now);
	
	## Xu ly luot xem theo ngay
	if($cday!=$nday || ($cday==$nday && $cmonth!=$nmonth))
	{
		## Reset lai ngay va cap nhat lai luot xem
		$d->reset();
		$sql="update table_product set cday='$now',vday=1 where id=$id";
		$d->query($sql);
	}
	else
	{
		## Cap nhat so luot xem trong ngay	
		$d->reset();
		$sql="update table_product set vday=vday+1 where id=$id";
		$d->query($sql);
	}
	
	## Xu ly luot xem theo tuần
	if($cweek!=$nweek)
	{
		## Reset lai tuan va cap nhat lai luot xem
		$d->reset();
		$sql="update table_product set cweek='$now',vweek=1 where id=$id";
		$d->query($sql);
	}
	else
	{
		## Cap nhat so luot xem trong tuan	
		$d->reset();
		$sql="update table_product set vweek=vweek+1 where id=$id";
		$d->query($sql);
	}
	
	## Xu ly luot xem theo thang
	if($cmonth!=$nmonth)
	{
		## Reset lai thang va cap nhat lai luot xem
		$d->reset();
		$sql="update table_product set cmonth='$now',vmonth=1 where id=$id";
		$d->query($sql);
	}
	else
	{
		## Cap nhat so luot xem trong thang	
		$d->reset();
		$sql="update table_product set vmonth=vmonth+1 where id=$id";
		$d->query($sql);
	}
	
}

function update_product_order($id)
{
	global $d;
	
	## Doc du lieu ngay thong ke cua san pham
	$d->reset();
	$sql="select cweek,cmonth from #_product where id=$id";
	$d->query($sql);
	$row=$d->fetch_array();
	
	$cweek=date('W',$row['cweek']);
	$cmonth=date('n',$row['cmonth']);
	
	## Thoi gian hien tai
	$now=time();
	
	$nweek=date('W',$now);
	$nmonth=date('n',$now);
	
	## Xu ly luot mua theo tuần
	if($cweek!=$nweek)
	{
		## Reset lai tuan va cap nhat lai luot mua
		$d->reset();
		$sql="update table_product set cweek='$now',oweek=1 where id=$id";
		$d->query($sql);
	}
	else
	{
		## Cap nhat so luot mua trong tuan	
		$d->reset();
		$sql="update table_product set oweek=oweek+1 where id=$id";
		$d->query($sql);
	}
	
	## Xu ly luot mua theo thang
	if($cmonth!=$nmonth)
	{
		## Reset lai thang va cap nhat lai luot mua
		$d->reset();
		$sql="update table_product set cmonth='$now',omonth=1 where id=$id";
		$d->query($sql);
	}
	else
	{
		## Cap nhat so luot mua trong thang	
		$d->reset();
		$sql="update table_product set omonth=omonth+1 where id=$id";
		$d->query($sql);
	}
	
}

function update_cp_st($id,$st)
{
	global $d;
	$d->reset();
	$sql="update #_coupon set tinhtrang='$st' where id='$id'";
	$d->query($sql);
}

function get_col($tbl,$id,$col)
{
	global $d;
	$d->reset();
	$sql="select $col from #_$tbl where id='$id'";
	$d->query($sql);
	$result=$d->fetch_array();
	return $result[$col];	
}

function get_tv($id)
{
	global $d;
	$d->reset();
	$sql="select * from #_thanhvien where id=$id";
	$d->query($sql);
	$result=$d->fetch_array();
	return $result;	
}

function get_tv_by_email($email)
{
	global $d;
	$d->reset();
	$sql="select * from #_thanhvien where email='$email'";
	$d->query($sql);
	$result=$d->fetch_array();
	return $result;	
}

function pritostr($pri)
{
	if($pri>999000000)
	{
		return ($pri/1000000000).' Tỷ';
	}
	else
	{
		return ($pri/1000000).' Triệu';
	}
}

function get_info($id,$tbl)
{
	global $d;
	$d->reset();
	$sql="select * from #_$tbl where id=$id";
	$d->query($sql);
	$result=$d->fetch_array();
	return $result;	
}

function get_row($tbl,$id)
{
	global $d;
	$d->reset();
	$sql="select * from #_$tbl where id=$id";
	$d->query($sql);
	$result=$d->fetch_array();
	return $result;	
}

function pluspoint($cash,$id_vt)
{
	global $d;
	
	## Cau hinh cua VIP
	$d->reset();
	$sql_setting = "select * from #_settingdh limit 0,1";
	$d->query($sql_setting);
	$row_settingdh= $d->fetch_array();
	
	$point=round($cash/$row_settingdh['cashtopoint']);
	
	## Cap nhat diem
	$d->reset();
	$sql="update table_thanhvien set diem=diem+$point where id=$id_vt";
	$d->query($sql);
	
	## Kiem tra VIP
	$tv=get_tv($id_vt);
	if($tv['diem']>=$row_settingdh['pointtovip'] && $tv['vip']==0)
	{
		## Da du dieu kien VIP
		$d->reset();
		$sql="update table_thanhvien set vip=1 where id=$id_vt";
		$d->query($sql);
	}
	
	return 1;
}


function minuspoint($cash,$id_vt)
{
	global $d;
	
	## Cau hinh cua VIP
	$d->reset();
	$sql_setting = "select * from #_settingdh limit 0,1";
	$d->query($sql_setting);
	$row_settingdh= $d->fetch_array();
	
	$point=round($cash/$row_settingdh['cashtopoint']);
	
	## Cap nhat diem
	$d->reset();
	$sql="update table_thanhvien set diem=diem-$point where id=$id_vt";
	$d->query($sql);
	
	## Kiem tra VIP
	$tv=get_tv($id_vt);
	if($tv['diem']<$row_settingdh['pointtovip'] && $tv['vip']==1)
	{
		## Huy VIP
		$d->reset();
		$sql="update table_thanhvien set vip=0 where id=$id_vt";
		$d->query($sql);
	}
	
	return 1;
}

function get_order($id)
{
	global $d;
	$d->reset();
	$sql="select * from #_donhang where id=$id";
	$d->query($sql);
	$result=$d->fetch_array();
	return $result;	
}

function lay_giagiam($id)
{
	global $d;
	$d->reset();
	$sql="select gia from #_product_giagiam where id='$id'";
	$d->query($sql);
	$result=$d->fetch_array();

	$res=array();
	if($result['gia']>0 && $result['gia']<100)
	{
		$res['gia']=(100-$result['gia'])/100;
		$res['phantram']='<div class="box-sp-phantram">-'.$result['gia'].'%</div>';
	}
	else
	{
		$res['gia']=1;
		$res['phantram']='';
	}

	return $res;	
}

function highlightWords($text, $words)
{
	return $text;
	/*** loop of the array of words ***/
    foreach ($words as $word)
    {
    	if($word!='')
    	{
    		/*** quote the text for regex ***/
            $word = preg_quote($word);
            /*** highlight the words ***/
            $text = preg_replace("|($word)|Uui", "<span class=\"highlight_word\">$1</span>", $text);
    	}
    }
    /*** return the text ***/
    return $text;
}

function count_comment($pid)
{
	if($pid>0)
	{
		global $d;
		$d->reset();
		$sql="select count(id) as cid from #_comment where pid='$pid'";
		$d->query($sql);
		$result=$d->fetch_array();
		return $result['cid'];	
	}
	else
	{
		return 0;	
	}
}

function get_comment($pid)
{
	if($pid>0)
	{
		global $d;
		$d->reset();
		$sql="select * from #_comment where pid='$pid' order by ngaydang desc";
		$d->query($sql);
		$result=$d->result_array();
		return $result;	
	}
	else
	{
		return 0;	
	}
}

function get_char_name($str)
{
	$str=trim($str);
	$name=explode(' ',$str);
	if(count($name)>0)
	{
		if(count($name)>1)
		{
			$sname=$name[count($name)-2];
			$ename=end($name);
			return substr($sname,0,1).substr($ename,0,1);
		}
		else
		{
			$name=end($name);
			return substr($name,0,1);		
		}
		
	}
	else
	{
		return 'T';	
	}
	
}

function get_show_comment($pid)
{
	if($pid>0)
	{
		global $d;
		$d->reset();
		$sql="select * from #_comment where pid='$pid' and hienthi=1 order by ngaydang desc";
		$d->query($sql);
		$result=$d->result_array();
		return $result;	
	}
	else
	{
		return 0;	
	}
}


?>