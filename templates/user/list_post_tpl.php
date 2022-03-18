<div class="content w-100 mt-10 clearfix">
   <div class="nav-account f-left">
   		<?php include_once _template."user/left_account.php"; ?>
   </div>
   <div class="right-account f-right">
   		<div class="title bx-border w-100">
			<h4 class="t-uppercase ds-inline-block p-relative"><a href="quan-ly-tin-dang.html" title="<?=$title?>"><?=$title?></a></h4>
		</div>
		<div class="content w-100 mt-10 clearfix">
			<form method="post" id="frm-tindang" name="frm-tindang" action="quan-ly-tin-dang.html" enctype="multipart/form-data">
				<div class="box-account f-left w-100 bx-border bg-white">
					<div class="left-count f-left">
						<?php if($message!=''){ ?>
						<div class="alert <?=($status==1) ? 'alert-error':'alert-success'?> row-count w-100 f-left mb-15">
							<?=$message?>
						</div>
						<?php } ?>
						<div class="row-count w-100 f-left mb-15">
							<label>Từ khóa:</label>
							<div class="row-in">
								<input type="text" name="tindang" class="input-count" id="tindang" value="<?=$_REQUEST['tindang']?>" placeholder="">
								<p class="error-text cl-red"></p>
							</div>
						</div>
						
						<div class="row-count w-100 f-left mb-15">
							<label>&nbsp;</label>
							<input class="button bg-primary cl-white t-uppercase" type="submit" id="btn-submit-tindang" value="Kiểm tra"/>
						</div>
					</div>
					<div class="right-count f-right t-center">
						
					</div>
				</div>
			</form>
		</div>
		<div class="title bx-border w-100 mt-20">
			<h4 class="t-uppercase ds-inline-block p-relative"><a href="quan-ly-tin-dang.html" title="Danh sách tin đăng">Danh sách tin đăng</a></h4>
		</div>
		<div class="content w-100 mt-10 clearfix">
			<?php if($tindang){ ?>
			<table class="qltindang">
				<tr>
					<td width="5%">STT</td>
					<td width="15%">Mã tin đăng</td>
					<td width="43%">Tiêu đề</td>
					<td width="10%">Ngày đặt</td>
					<td width="15%">Trạng thái</td>
					<td width="12%">Thao tác</td>
				</tr>

				<?php for($i=0, $count=count($tindang); $i<$count; $i++){ $id_status = $tindang[$i]['id_status'];?>
			      <tr>
			        <td>
			          <?=$i+1?>
			        </td>
			        <td align="left">
			          <?=$tindang[$i]['masp']?>
			        </td> 
			        <td>
			          <?=$tindang[$i]['ten_vi']?>
			        </td>
			        <td align="left">
			           <?=date('d/m/Y',$tindang[$i]['ngaytao']);?>
			        </td>
			        <td align="left">
			         	<span class="trangthai <?=($tindang[$i]['hienthi']!=0) ? 'bg-green':'bg-red'?>"><?=($tindang[$i]['hienthi']!=0) ? 'Đã duyệt':'Chưa duyệt'?></span>
			        </td>
			        <td align="left">
			          <a href="sua-tin-dang.html&id=<?=$tindang[$i]['id']?>">[Sửa]</a>
			          <a href="xoa-tin-dang.html&id=<?=$tindang[$i]['id']?>" onClick="if(!confirm('Bạn có chắc chắn muốn xóa tin này không?')) return false;">[Xóa]</a>
			        </td>
			      </tr>
			      <?php } ?>

			</table>
			<?php } ?>
		</div>
   </div>
</div>