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
	
	$key=$_POST['key'];
	$hls = array($key);
	$id_list=(int)$_POST['id_list'];
	if($id_list>0)
	{
		$d->reset();
		$sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,thumb,gia,giakm from #_product where hienthi=1 and ten_$lang LIKE '%$key%' and id_lv0='$id_list' order by stt desc,id asc";
		$d->query($sql);
		$product=$d->result_array();
	?>
	<div class="w-sug-info">
		<?php for($i=0;$i<count($product);$i++){?>
			<div class="box-spsug w-clear">
				<div class="box-spsug-img">
					<a href="san-pham/<?=$product[$i]['tenkhongdau']?>">
						<img src="<?=_upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten']?>" />
					</a>
				</div>
				<h3>
					<a href="san-pham/<?=$product[$i]['tenkhongdau']?>">
						<?=highlightWords($product[$i]['ten'],$hls)?>
					</a>
				</h3>
				<?php if($product[$i]['gia']>0 && $product[$i]['giakm']>0){ ?>
				<div class="box-spsug-gia del">
					Giá: <?=number_format($product[$i]['gia'],0,'','.')?>đ
				</div>	
				<div class="box-spsug-gia">
					Giá khuyến mãi: <?=number_format($product[$i]['giakm'],0,'','.')?>đ
				</div>	
				<?php }else{ ?>
				<div class="box-spsug-gia">
					Giá: <?=($product[$i]['gia']>0)?number_format($product[$i]['gia'],0,'','.').'đ':'Liên hệ'?>				
				</div>
				<?php } ?>
			</div>
		<?php }?>	
	</div>
	<?php 
		}else{ 
			echo '<div class="w-sug-info">';
			$d->reset();
			$sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_product_list where hienthi=1 and level=0 order by stt desc,id asc";
			$d->query($sql);
			$product_list=$d->result_array();
			for ($j=0; $j < count($product_list); $j++) { 
				$d->reset();
				$sql="select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,thumb,gia,giakm from #_product where hienthi=1 and ten_$lang LIKE '%$key%' and id_lv0='".$product_list[$j]['id']."' order by stt desc,id asc";
				$d->query($sql);
				$product=$d->result_array();
				if(count($product)>0)
				{
	?>	
			<div class="tit">
				<?=$product_list[$j]['ten']?>
			</div>
			<div class="info">
				<?php for($i=0;$i<count($product);$i++){?>
					<div class="box-spsug w-clear">
						<div class="box-spsug-img">
							<a href="san-pham/<?=$product[$i]['tenkhongdau']?>">
								<img src="<?=_upload_product_l.$product[$i]['thumb']?>" alt="<?=$product[$i]['ten']?>" />
							</a>
						</div>
						<h3>
							<a href="san-pham/<?=$product[$i]['tenkhongdau']?>">
								<?=highlightWords($product[$i]['ten'],$hls)?>
							</a>
						</h3>
						<?php if($product[$i]['gia']>0 && $product[$i]['giakm']>0){ ?>
						<div class="box-spsug-gia del">
							Giá: <?=number_format($product[$i]['gia'],0,'','.')?>đ
						</div>	
						<div class="box-spsug-gia">
							Giá khuyến mãi: <?=number_format($product[$i]['giakm'],0,'','.')?>đ
						</div>	
						<?php }else{ ?>
						<div class="box-spsug-gia">
							Giá: <?=($product[$i]['gia']>0)?number_format($product[$i]['gia'],0,'','.').'đ':'Liên hệ'?>				
						</div>
						<?php } ?>
					</div>
				<?php }?>	
			</div>
		<?php } } ?>
		
	<?php echo '</div>'; } ?>
