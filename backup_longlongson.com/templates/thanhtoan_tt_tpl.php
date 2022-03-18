<div class="thanhtoan-tit w-clear">
	<div class="step <?php if($id=='' || $id=='buoc-1'){echo ' active';} ?>">
		<span>1</span>
		Đăng nhập
	</div>
	<div class="step <?php if($id=='buoc-2'){echo ' active';} ?>">
		<span>2</span>
		Thông tin giao hàng
	</div>
	<div class="step <?php if($id=='buoc-3'){echo ' active';} ?>">
		<span>3</span>
		Xác nhận đặt hàng
	</div>
</div>
<div class="content w-clear thanhtoan">
    <div class="left-tt">
    	<?php include _template.$template_member."_tpl.php"; ?>  
    </div>
    <div class="right-tt">
        <?php include _template."layout/right-thanhtoan.php"; ?>
    </div>
</div>
