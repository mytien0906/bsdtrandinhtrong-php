<section class="content-header">
  <h1>Quản lý hỗ trợ</h1>
</section>
<section class="content">
	<div class="row">
        <div class="col-md-12">
        	<div class="box box-info">
                <table class="table table-bordered">
					<tbody>
						<tr>
							<th style="width: 10px">
								<input type="checkbox" name="chonhet" id="chonhet" />
							</th>
							<th style="width: 10px">STT</th>
							<th>Tên</th>
							<th>Yahoo</th>
							<th>Skype</th>
							<th style="width:30px; text-align:center;">Hiển thị</th>
							<th style="width:30px;">Sửa</th>
							<th style="width:30px;">Xóa</th>
						</tr>
						<?php for($i=0, $count=count($items); $i<$count; $i++){?>
						<tr>
							<td>
								<input type="checkbox" name="chon" id="chon" value="<?=$items[$i]['id']?>" class="chon" />
							</td>
							<td class="change_stt">
								<input type="text" data-id="<?=$items[$i]['id']?>" data-com="<?=$_GET['com']?>" data-list="" value="<?=$items[$i]['stt']?>" style="width:100%; text-align:center;" disabled="disabled" />
							</td>
							<td>
								<a href="index.php?com=<?=$_GET['com']?>&act=edit&id=<?=$items[$i]['id']?>">
									<?=$items[$i]['ten']?>
								</a> 
							</td>
							<td>
								<a href="index.php?com=<?=$_GET['com']?>&act=edit&id=<?=$items[$i]['id']?>">
									<?=$items[$i]['yahoo']?>
								</a> 
							</td>
							<td>
								<a href="index.php?com=<?=$_GET['com']?>&act=edit&id=<?=$items[$i]['id']?>">
									<?=$items[$i]['skype']?>
								</a> 
							</td>
					        <td align="center">
					        <?php if(@$items[$i]['hienthi']==1){ ?>
					        	<i class="fa fa-check-square-o hienthi" data-id="<?=$items[$i]['id']?>" data-com="<?=$_GET['com']?>" data-list=""></i>
							<? }else{ ?>
								<i class="fa fa-square-o hienthi" data-id="<?=$items[$i]['id']?>" data-com="<?=$_GET['com']?>" data-list=""></i>
					        <?php } ?>
					        </td>
							<td>
								<a href="index.php?com=<?=$_GET['com']?>&act=edit&id=<?=$items[$i]['id']?>">
									<i class="fa fa-pencil"></i>
								</a>
							</td>
							<td>
								<a href="index.php?com=<?=$_GET['com']?>&act=delete&id=<?=$items[$i]['id']?>" onClick="if(!confirm('Xác nhận xóa')) return false;">
									<i class="fa fa-times" style="color:#F00;"></i>
								</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
              	</table>
            </div><!-- /.box -->
            <div class="paging"><?=$paging['paging']?></div>
            <div>
	            <a href="index.php?com=<?=$_GET['com']?>&act=add">
	            	<button class="btn btn-info">
	            		Thêm
	            	</button>
	            </a>
	            &nbsp;
	            <a href="#" id="xoahet">
	            	<button class="btn btn-danger">Xóa</button>
	            </a>
            </div>
		</div>
	</div>
</section>
