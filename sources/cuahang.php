<?php
	@$userid =  addslashes($_GET['user']);
	

	if($userid){

		$user_i = get_fetch_array("select diachi,dienthoai,email,userid,id from #_thanhvien where hienthi=1 and userid='".$userid."' order by stt asc,id desc");

		if($psize!=0){
			$per_page = $psize;
		}else{
			$per_page = $row_setting['page_sp'];
		}
		$startpoint = ($page * $per_page) - $per_page;
		$limit = ' limit '.$startpoint.','.$per_page;

		$where = " #_baiviet where hienthi=1 and id_user=".$user_i['id'];
		$where .= $where_tk;
		$where .= " order by stt,ngaytao desc ";

		$title_bread = '<a href="" title="Trang chủ">Trang chủ</a> &gt; '._baiviet;

		$breadcumb ='<ul id="breadcrumb">
            <li><a href="">'._home.'</a></li>
            <li><a>Cửa hàng '.$user_i['userid'].'</a></li>
          </ul>';

		$sql = "select * from $where $limit";
		$d->query($sql);
		$tintuc = $d->result_array();

		$url = getCurrentPageURL();
		$paging = pagination($where,$per_page,$page,$url);

		if(count($tintuc)==0) $title_cat= _updating;
		$title = 'Tin rao vặt';
	}

?>