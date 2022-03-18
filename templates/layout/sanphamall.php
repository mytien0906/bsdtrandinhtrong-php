<section class="sanphamall-top mt-20 clearfix">
	<div class="container">
		<div class="title bx-border w-100">
			<h4 class="t-uppercase ds-inline-block p-relative"><a href="bat-dong-san" title="BĐS nổi bật">BĐS nổi bật</a></h4>
			<ul>
				<?php for($i=0;$i<count($sanpham_menu);$i++){ ?>
				<li>
					<a href="<?=$sanpham_menu[$i]['tenkhongdau']?>" class="cursor-pointer"><?=$sanpham_menu[$i]['ten']?></a>
				</li>
				<?php } ?>
			</ul>
		</div>
		<div class="content mt-20 w-100 clearfix">
			<div class="show-product">
			   	<?php for($i=0;$i<count($product_index);$i++){
			   		$city = getRows($product_index[$i]['id_city'],'place_city', array('ten','id','tenkhongdau'));
			   		$dist = getRows($product_index[$i]['id_dist'],'place_dist', array('ten','id','tenkhongdau'));
			   		$province = getRows($product_index[$i]['id_ward'],'place_ward', array('ten','id','tenkhongdau'));
			   		$list = getRows($product_index[$i]['id_list'],'baiviet_list', array('ten_'.$lang,'id','tenkhongdau','checkgia'));
			   		$userp = getRows($product_index[$i]['id_user'],'thanhvien', array('hoten','id','userid'));
			   	?>
			    <div class="product-slide cl-1 bx-border product-hover">
			      	<div class="product w-100">
				        <div class="product-img">
				            <a href="bat-dong-san/<?=$product_index[$i]['tenkhongdau']?>" title="<?=$product_index[$i]['ten']?>">
				                <img src="resize/440x324/1/<?=_upload_baiviet_l.$product_index[$i]['photo']?>" alt="<?=$product_index[$i]['ten']?>">
				            </a>
				            <div class="product-desc" onclick="window.location.href='bat-dong-san/<?=$product_index[$i]['tenkhongdau']?>'">
				              <p>
				                <i class="fa fa-search"></i> Xem chi tiết
				              </p>
				            </div>
				        </div>
				        <div class="product-title">
				        	<h4 class="t-left "><a href="bat-dong-san/<?=$product_index[$i]['tenkhongdau']?>" title="<?=$product_index[$i]['ten']?>">
					          <?=$product_index[$i]['ten']?>
					        </a></h4>
					        <p class="t-left">
					          <span class="price"><?=($product_index[$i]['giaban']!=0) ? getPriceBDS($product_index[$i]['giachu'],$product_index[$i]['donvi'],$product_index[$i]['id_giatinh']) : 'Liên hệ' ?></span>
					        </p>
					        <p>
					        	<span class="fa fa-globe"></span> <?=($product_index[$i]['dientich']=='') ? '300 m2':$product_index[$i]['dientich'].' m2'?>
					        </p>
					        <p>
					        	<span class="fa fa-building"></span>
					        	<?php if($list){ ?>
					        	<a href="<?=$list['tenkhongdau']?>"><?=$list['ten_'.$lang]?></a>
					        	<?php } ?>
					        </p>
					        <p>
					        	<span class="fa fa-map-marker"></span>
					        	<?php if($dist){ ?>
								<a href="khu-vuc/qh-<?=$dist['tenkhongdau']?>-<?=$dist['id']?>"><?=$dist['ten']?></a>,
								<?php } ?>
								<?php if($city){ ?>
								<a href="khu-vuc/tt-<?=$city['tenkhongdau']?>-<?=$city['id']?>"><?=$city['ten']?></a>
								<?php } ?>
					        </p>
					        <div class="user t-right">
					        	<p class="ds-inline-block"><span class="fa fa-calendar"></span> <?=date('d/m/Y',$product_index[$i]['ngaytao'])?></p>
					        	<?php if($userp){ ?>
					        	<p class="ds-inline-block"><span class="fa fa-user"></span> <span><?=$userp['hoten']?></span></p>
					        	<?php }else{ ?>
					        	<p class="ds-inline-block"><span class="fa fa-user"></span> <span><?=($product_index[$i]['hoten']=='') ? 'Admin':$product_index[$i]['hoten']?></span></p>
					        	<?php } ?>
					        </div>
				      	</div>
			   	 	</div>
			    </div>
			    <?php } ?>
			</div>
		</div>
		<div class="content w-100 mt-20 clearfix">
		  <div class="show-product">
		    <div class="w-100 bx-border pl-10 pr-10">
		      <div class="pagination t-center"><?=$paging?></div>
		    </div>
		  </div>
		</div>
	</div>
</section>