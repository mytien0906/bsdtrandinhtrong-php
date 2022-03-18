<?php
	@$id =  addslashes($_GET['id']);
	@$na =  addslashes($_GET['na']);
	
	if($id){

		if($na == 'tt'){
			$khuvuc = get_fetch_array("select * from #_place_city where hienthi=1 and id='".(int)$id."' order by stt asc,id desc");
			$wherex = "and id_city=".$khuvuc['id'];
		}
		if($na == 'qh'){
			$khuvuc = get_fetch_array("select * from #_place_dist where hienthi=1 and id='".(int)$id."' order by stt asc,id desc");
			$wherex = "and id_dist=".$khuvuc['id'];
		}
		if($na == 'px'){
			$khuvuc = get_fetch_array("select * from #_place_ward where hienthi=1 and id='".(int)$id."' order by stt asc,id desc");
			$wherex = "and id_ward=".$khuvuc['id'];
		}
		

		
		

		if($psize!=0){
			$per_page = $psize;
		}else{
			$per_page = $row_setting['page_sp'];
		}
		$startpoint = ($page * $per_page) - $per_page;
		$limit = ' limit '.$startpoint.','.$per_page;

		$where = " #_baiviet where hienthi=1 $wherex";
		$where .= $where_tk;
		$where .= " order by stt,ngaytao desc ";

		$title_bread = '<a href="" title="Trang chủ">Trang chủ</a> &gt; '._baiviet;

		$breadcumb ='<ul id="breadcrumb">
            <li><a href="">'._home.'</a></li>
            <li><a>Khu vực '.$khuvuc['ten'].'</a></li>
          </ul>';

		$sql = "select * from $where $limit";
		$d->query($sql);
		$tintuc = $d->result_array();

		$url = getCurrentPageURL();
		$paging = pagination($where,$per_page,$page,$url);

		if(count($tintuc)==0) $title_cat= _updating;
		$title = 'Khu vực '.$khuvuc['ten'];
	}

?>