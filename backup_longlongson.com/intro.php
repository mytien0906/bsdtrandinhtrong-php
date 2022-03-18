<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" CONTENT="Thiết Kế website , Viết web giá rẻ , lập trình web , Hotline : 01212 901 191 , Tư vấn web , domain + hosting" />
<meta name="keywords" CONTENT="Thiết Kế website , Viết web giá rẻ , lập trình web , Hotline : 01212 901 191 , Tư vấn web , domain + hosting" />
<meta name="authos" CONTENT="Thiết Kế website , Viết web giá rẻ , lập trình web , Hotline : 01212 901 191 , Tư vấn web , domain + hosting" />
<title>Thiết Kế website , Viết web giá rẻ</title>
<style type="text/css">
<!--
body{
background:url(hinhnen.jpg) no-repeat top center;
}
#login_thanhcong {
	border: 1px solid #CCC;
	width: 700px;
	margin-right: auto;
	margin-left: auto;
	height: 240px;
	margin-top:200px;
	color:#FFFFFF;
}
#login_thanhcong a {
	text-decoration: none;
	color: #00F;
}
#login_thanhcong a:hover {
	text-decoration: none;
	color: #C00;
}
.chu_thanhcong {
	font-size: 18px;
	font-weight: bold;
	background-color: #2290FF;
	color: #FFF;
	padding-top: 5px;
	padding-bottom: 5px;
}
#sogiay {
	color: #00F;
	font-size: 36px;
	font-weight: bold;
}
p{
font-size:18px;
}
-->
</style>
</head>

<body>
<script type="text/javascript">
function GetClock(){
d = new Date();
nday   = d.getDay();
nmonth = d.getMonth();
ndate  = d.getDate();
nyear = d.getYear();
nhour  = d.getHours();
nmin   = d.getMinutes();
nsec   = d.getSeconds();

if(nyear<1000) nyear=nyear+1900;

     if(nhour ==  0) {ap = " AM";nhour = 12;} 
else if(nhour <= 11) {ap = " AM";} 
else if(nhour == 12) {ap = " PM";} 
else if(nhour >= 13) {ap = " PM";nhour -= 12;}

if(nmin <= 9) {nmin = "0" +nmin;}
if(nsec <= 9) {nsec = "0" +nsec;}


document.getElementById('clockbox').innerHTML=" "+nhour+":"+nmin+":"+nsec+ap+" - "+(nmonth+1)+" / "+ndate+" / "+nyear+"";
setTimeout("GetClock()", 1000);
}
window.onload=GetClock;
</script>
<script>
s=60; 
setTimeout("document.location='http://nina.vn/'",s*1000); 
setInterval("document.getElementById('sogiay').innerHTML=s--;",1000);
</script>
<style>
#clockbox{
color:#FF0000;
font-weight:900;
font-size:26px;
}
</style> 
<center>
<div id="login_thanhcong">
<div class="chu_thanhcong">Chào bạn..! Website Đang Trong Quá Trình Nâng Cấp , Vui Lòng Truy Cập Sau .</div>
<p> Cảm ơn bạn đã đến tham website chúng tôi..!</p>
<p><div id="clockbox"></div></p>
<!--<p><a title="Bấm vào quay lại trang chủ ngay" href=index.php>Link quay lại trang chủ ngay</a>.</p>-->
<p>Sẽ quay lại trang chủ sau.</p>
<p><div id="sogiay"></div></p>
</div>
</center>

</body>
</html>
