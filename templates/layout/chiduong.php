<div id="contact_fixed">
    <ul>
        <li class="blink_me">
            <a href="tel:<?=str_replace(' ','',str_replace('.','',$row_setting['hotline']))?>">
                <img src="images/goidien.png" alt="goi dien">
                Call
            </a>
        </li>
        <li>
            <a href="sms:<?=str_replace(' ','',str_replace('.','',$row_setting['hotline']))?>;?&body=Chân thành cám ơn Quý Khách Hàng đã quan tâm tới công ty, chúng tôi sẽ liên hệ lại ngay khi nhận được tin nhắn!">
                <img src="images/tuvan.png" alt="tuvan">
                SMS
            </a>
        </li>
        <li>
            <a href="#contact-us">
                <img src="images/chiduong.png" alt="chiduong">
                Contact us
            </a>
        </li>
    </ul>
    <?php /* class="click_phone"
    <div class="phone_list">
      <p><a href="tel:<?=str_replace(' ','',str_replace('.','',$row_setting['hotline']))?>" title=""><?=$row_setting['hotline']?></a></p>
      <p><a href="tel:<?=str_replace(' ','',str_replace('.','',$row_setting['dienthoai']))?>" title=""><?=$row_setting['dienthoai']?></a></p>
    </div>*/?>
</div>

<style type="text/css" media="screen">
  #contact_fixed{
  height: 90px;
  position:fixed;
  bottom:-60px;
  left:0px;
  right:0px;
  margin:auto;
  background:#168dff;
  padding:5px 0px;
  display: none;
  z-index: 99999;
}
div.phone_list{
  width: 100%;
  float: left;
  padding: 10px;
  text-align: center;
  box-sizing: border-box;
}
div.phone_list p{
  display: inline-block;
  padding: 5px 10px;
  background: #D90000;
  text-align: center;
  font-size: 18px;
  margin-bottom: 10px;
  border-radius: 10px;
  margin: 0px 10px 10px;
  color: #FF0;
  line-height: 30px;
}
div.phone_list p a{
  text-decoration: none;
  color: #FFF;
}
#contact_fixed ul{
  width:100%;
  float: left;
  padding: 0px !important;
  margin: 0px !important;
  list-style: none;
}
#contact_fixed ul li{
  width: 33.33%;
  float: left;
  text-align: center;
}
#contact_fixed ul li img{
  width:35px;
  vertical-align: middle;
}
#contact_fixed ul li a{
  color:#fff;
  text-transform:capitalize;
  font-size:15px;
  font-weight:bold;
  font-family: 'OpenSansBold';
}
.blink_me {
    -webkit-animation-name: blinker;
    -webkit-animation-duration: 1s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;

    -moz-animation-name: blinker;
    -moz-animation-duration: 1s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: infinite;

    animation-name: blinker;
    animation-duration: 1s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}


@-moz-keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

@-webkit-keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

@keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}
@media screen and (max-width:768px) {
  #contact_fixed{
    display: block;
  }
  #copy{
    padding-bottom: 50px !important;
  }
}

</style>