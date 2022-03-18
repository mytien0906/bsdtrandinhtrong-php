<?php
	if($_REQUEST['curPage']!='')
{
	$crp= '&curPage='. $_REQUEST['curPage'];
}
?>
<input type="hidden" value="<?=$crp?>" id="crp" />
<script type="text/javascript">
	function doEnter(evt){
		// IE					// Netscape/Firefox/Opera
		var key;
		if(evt.keyCode == 13 || evt.which == 13){
			onSearch(evt);
		}
	}
	function onSearch(evt) {	
			var keyword = document.getElementById("keyword").value;		
			//var encoded = Base64.encode(keyword);
			location.href = "index.php?com=nhantin&act=man&keyword="+keyword;
			loadPage(document.location);
				
	}
	function change(k)
	{
		var base_href='index.php?com=<?=$_GET['com']?>&act=man&type=<?=$type?>';
		var level_id='';
		for(var i=0;i<=k;i++)
		{
			level_id+='&lv'+i+'='+document.getElementById('level'+i).value;
		}
		window.location.href=base_href+level_id+'<?=($_GET['curPage']>1)?'&curPage='.$_GET['curPage']:''?>';
	}
</script>
<script>
$(document).ready(function() {
$("#chonhet").click(function(){
	var status=this.checked;
	$("input[name='chon']").each(function(){this.checked=status;})
});

$("#xoahet").click(function(){
	var listid="";
	var a=document.getElementById("crp");
	$("input[name='chon']").each(function(){
		if (this.checked) listid = listid+","+this.value;
    	})
	listid=listid.substr(1);	 //alert(listid);
	if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}
	hoi= confirm("Bạn có chắc chắn muốn xóa?");
	if (hoi==true) document.location = "index.php?com=nhantin&act=delete&listid=" + listid+a.value;
});
});
</script>


<section class="content-header">
  <h1>Quản lý tin</h1>
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
							<th style="min-width:150px;">Tên</th>
							<?php if($type=="duan") { ?><th style="min-width:150px;">Dự án nhận tin</th> <?php } ?>
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
								<a href="index.php?com=<?=$_GET['com']?>&act=edit&type=<?=$type?>&id=<?=$items[$i]['id']?>">
									<?=$items[$i]['ten']?>
								</a> 
							</td>
							<?php if($type=="duan") { ?><td>
								<a href="index.php?com=<?=$_GET['com']?>&act=edit&type=<?=$type?>&id=<?=$items[$i]['id']?>">
									<?=$items[$i]['tieude']?>
								</a> 
							</td> <?php } ?>
					        <td align="center">
					        <?php if(@$items[$i]['hienthi']==1){ ?>
					        	<i class="fa fa-check-square-o hienthi" data-id="<?=$items[$i]['id']?>" data-com="<?=$_GET['com']?>" data-list=""></i>
							<? }else{ ?>
								<i class="fa fa-square-o hienthi" data-id="<?=$items[$i]['id']?>" data-com="<?=$_GET['com']?>" data-list=""></i>
					        <?php } ?>
					        </td>
					        <td>
								<a href="index.php?com=<?=$_GET['com']?>&act=edit&type=<?=$type?>&id=<?=$items[$i]['id']?>">
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
	            <a href="index.php?com=<?=$_GET['com']?>&act=add&type=<?=$type?>">
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