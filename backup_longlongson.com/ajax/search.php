<?php
	session_start();
	$session=session_id();
	date_default_timezone_set('Asia/Saigon');
	@define ( '_template' , '../templates/'); //định nghĩa đường dẫn tắt, chèn biến vào thay thế
	@define ( '_source' , '../sources/');
	@define ( '_lib' , '../admin/lib/');
	@define ( _upload_folder , './media/upload/' );

	$lang=$_SESSION['lang'];

	require_once _source."lang_$lang.php";
	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";
	
	$idl=$_POST['idl'];
	$lidc=$_POST['lidc'];
	$ar_idc=explode(',',$lidc);
	if(count($ar_idc)>1)
	{
		if(count($ar_idc)>2)
		{
			$sidc=" and (";	
			for($i=0;$i<count($ar_idc)-1;$i++)
			{
				if($i==0)
				{
					$sidc.=" id_cat=".$ar_idc[0];		
				}
				else
				{
					$sidc.=" or id_cat=".$ar_idc[$i];		
				}
			}
			$sidc.=")";	
		}
		else
		{
			$sidc=" and id_cat=".$ar_idc[0];	
		}
	}
	else
	{
		$sidc="";
	}
	
	$lgioitinh=$_POST['lgioitinh'];
	$ar_gioitinh=explode(',',$lgioitinh);
	if(count($ar_gioitinh)>1)
	{
		if(count($ar_gioitinh)>2)
		{
			$sgioitinh=" and (";	
			for($i=0;$i<count($ar_gioitinh)-1;$i++)
			{
				if($i==0)
				{
					$sgioitinh.=" gioitinh=".$ar_gioitinh[0];		
				}
				else
				{
					$sgioitinh.=" or gioitinh=".$ar_gioitinh[$i];		
				}
			}
			$sgioitinh.=")";	
		}
		else
		{
			$sgioitinh=" and gioitinh=".$ar_gioitinh[0];	
		}
	}
	else
	{
		$sgioitinh="";
	}
	
	$lkichthuoc=$_POST['lkichthuoc'];
	$ar_kichthuoc=explode(',',$lkichthuoc);
	if(count($ar_kichthuoc)>1)
	{
		if(count($ar_kichthuoc)>2)
		{
			$skichthuoc=" and (";	
			for($i=0;$i<count($ar_kichthuoc)-1;$i++)
			{
				if($i==0)
				{
					$skichthuoc.=" id_size=".$ar_kichthuoc[0];		
				}
				else
				{
					$skichthuoc.=" or id_size=".$ar_kichthuoc[$i];		
				}
			}
			$skichthuoc.=")";	
		}
		else
		{
			$skichthuoc=" and id_size=".$ar_kichthuoc[0];	
		}
	}
	else
	{
		$skichthuoc="";
	}
	
	$lkhoanggia=$_POST['lkhoanggia'];
	$ar_khoanggia=explode(',',$lkhoanggia);
	if(count($ar_khoanggia)>1)
	{
		if(count($ar_khoanggia)>2)
		{
			$skhoanggia=" and (";	
			for($i=0;$i<count($ar_khoanggia)-1;$i++)
			{
				if($i==0)
				{
					$tmp=laykhoanggia($ar_khoanggia[0]);
					$skhoanggia.=" (gia between ".$tmp['giatu']." and ".$tmp['giaden'].")";		
				}
				else
				{
					$tmp=laykhoanggia($ar_khoanggia[$i]);
					$skhoanggia.=" or (gia between ".$tmp['giatu']." and ".$tmp['giaden'].")";		
				}
			}
			$skhoanggia.=")";	
		}
		else
		{
			$tmp=laykhoanggia($ar_khoanggia[0]);
			$skhoanggia.=" and (gia between ".$tmp['giatu']." and ".$tmp['giaden'].")";		
		}
	}
	else
	{
		$skhoanggia="";
	}
	
	$mau=$_POST['mau'];
	if($mau!="")
	{
		$smau=" and id_mau=".$mau;	
	}
	
	$d->reset();
	$sql="select id,ten_$lang as ten,tenkhongdau,thumb,gia,phantramgiam,rate from #_product where hienthi=1 and id_list=$idl $sidc $sgioitinh $skichthuoc $skhoanggia $smau order by stt,id desc";
	$d->query($sql);
	$product=$d->result_array();
	
	#Phân trang
	$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
	$url=getCurrentPageURL();
	$maxR=5;
	$maxP=5;
	$paging=paging_home($product, $url, $curPage, $maxR, $maxP);
	$product=$paging['source'];
	
?>
<?php if(count($product)>0){?>
	<?php for($i=0;$i<count($product);$i++){?>
            <div class="box-sps" <?php if(($i+1)%4==0){echo 'style="margin-right:0px;"';}?>>
                    <?=($product[$i]['phantramgiam']>0)?'<div class="box-spi-giam">'._giam.' <span>'.$product[$i]['phantramgiam'].'%</span></div>':''?>
                <a href="san-pham/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html"><img src="<?=_upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten']?>" /></a>
                <h3><a href="san-pham/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html"><?=$product[$i]['ten']?></a></h3>
                <div class="box-spi-rt">
                    <div class="sp-rt" data-average="<?=$product[$i]['rate']?>" data-id="<?=$product[$i]['id']?>"></div>
                    <div class="datasSent"></div>
                </div>
                <?php if($product[$i]['phantramgiam']>0 && $product[$i]['gia']>0){?>
                    <div class="box-spi-gia-giam">
                        <div>
                            <?=number_format((100-$product[$i]['phantramgiam'])/100*$product[$i]['gia'],0,"",".")."đ"?>
                        </div>
                        <div>
                            <?=number_format($product[$i]['gia'],0,"",".")."đ"?>
                        </div>
                        <div class="clear"></div>
                    </div>
                
                <?php }else{?>
                    <div class="box-spi-gia">
                        <?=($product[$i]['gia']>0)?number_format($product[$i]['gia'],0,"",".").'đ':_lienhe;?>
                    </div>
                <?php }?>
            </div>
            <?php if(($i+1)%4==0){echo '<div class="clear"></div>';}?>
    <?php }?>
    <div class="clear"></div>
<?php }else{echo _khongcoketquatimkiem;}?>
<!-- Rating -->
<link rel="stylesheet" href="css/jRating.jquery.css" type="text/css" />
<script type="text/javascript" src="js/jRating.jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.sp-rt').jRating({
            length : 5,
            decimalLength : 1
        });
        
        
        $('.left-se-mau img').click(function(){
        $('.left-se-mau img').removeClass('active');
            $(this).addClass('active');
        })
    })
</script>
