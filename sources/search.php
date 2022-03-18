<?php  if(!defined('_source')) die("Error");

		@$idc = addslashes($_GET['idc']);

		$per_page = $row_setting['page_sp'];
		$startpoint = ($page * $per_page) - $per_page;
		$limit = ' limit '.$startpoint.','.$per_page;


		if($com=='tag'){
			if(isset($_GET['idl']) && $_GET['idl'] !=''){
				$tukhoa = trim($_GET['idl']);
				if (get_magic_quotes_gpc()==false) {
					$tukhoa = mysql_real_escape_string($tukhoa);
				}

				$chuoi = " and (tagskhongdau like'%$tukhoa%')";
			}
		}else{
			if(isset($_GET['keyword']) && $_GET['keyword'] !=''){
				$tukhoa = trim(strip_tags($_GET['keyword']));
				if (get_magic_quotes_gpc()==false) {
					$tukhoa = changeSearch(mysql_real_escape_string($tukhoa));
				}

				$chuoi .= " and text_search like'%$tukhoa%'";
			}

			if(isset($_GET['id_list']) && $_GET['id_list'] !='' && $_GET['id_list'] !=0){
				$id_list = trim(strip_tags($_GET['id_list']));
				if (get_magic_quotes_gpc()==false) {
					$id_list = mysql_real_escape_string($id_list);
				}

				$chuoi .= " and id_list = $id_list";
			}
			if(isset($_GET['id_city']) && $_GET['id_city'] !='' && $_GET['id_city'] !=0){
				$id_city = trim(strip_tags($_GET['id_city']));
				if (get_magic_quotes_gpc()==false) {
					$id_city = mysql_real_escape_string($id_city);
				}

				$chuoi .= " and id_city = $id_city";
			}
			if(isset($_GET['id_dist']) && $_GET['id_dist'] !='' && $_GET['id_dist'] !=0){
				$id_dist = trim(strip_tags($_GET['id_dist']));
				if (get_magic_quotes_gpc()==false) {
					$id_dist = mysql_real_escape_string($id_dist);
				}

				$chuoi .= " and id_dist = $id_dist";
			}

			if(isset($_GET['id_ward']) && $_GET['id_ward'] !='' && $_GET['id_ward'] !=0){
				$id_ward = trim(strip_tags($_GET['id_ward']));
				if (get_magic_quotes_gpc()==false) {
					$id_ward = mysql_real_escape_string($id_ward);
				}

				$chuoi .= " and id_ward = $id_ward";
			}

			if(isset($_GET['id_street']) && $_GET['id_street'] !='' && $_GET['id_street'] !=0){
				$id_street = trim(strip_tags($_GET['id_street']));
				if (get_magic_quotes_gpc()==false) {
					$id_street = mysql_real_escape_string($id_street);
				}

				$chuoi .= " and id_street = $id_street";
			}

			if(isset($_GET['id_huongnha']) && $_GET['id_huongnha'] !='' && $_GET['id_huongnha'] !=0){
				$id_huongnha = trim(strip_tags($_GET['id_huongnha']));
				if (get_magic_quotes_gpc()==false) {
					$id_huongnha = mysql_real_escape_string($id_huongnha);
				}

				$chuoi .= " and id_huongnha = $id_huongnha";
			}

			if(isset($_GET['id_cat']) && $_GET['id_cat'] !='' && $_GET['id_cat'] !=0){
				$id_cat = trim(strip_tags($_GET['id_cat']));
				if (get_magic_quotes_gpc()==false) {
					$id_cat = mysql_real_escape_string($id_cat);
				}

				$chuoi .= " and id_cat = $id_cat";
			}

			if(isset($_GET['id_item']) && $_GET['id_item'] !='' && $_GET['id_item'] !=0){
				$id_item = trim(strip_tags($_GET['id_item']));
				if (get_magic_quotes_gpc()==false) {
					$id_item = mysql_real_escape_string($id_item);
				}

				$chuoi .= " and id_item = $id_item";
			}

			if(isset($_GET['id_price']) && $_GET['id_price'] !=0){
				$id_price = trim(strip_tags($_GET['id_price']));
				if (get_magic_quotes_gpc()==false) {
					$id_price = mysql_real_escape_string($id_price);
				}

				$arr = explode('-', $_GET['id_price']);

				if(count($arr)>1){
					if($arr[0]==0){
						$chuoi .= " and giaban <= ".$arr[1]*1000;
					}elseif($arr[1]==0){
						$chuoi .= " and giaban >= ".$arr[0]*1000;
					}else{
						$chuoi .= " and giaban >= ".($arr[0]*1000)." and giaban <= ".($arr[1]*1000);
					}
				}else{
					$chuoi .= " and giaban = ".$arr[0]*1000;
				}
				
			}
			if(isset($_GET['id_area']) && $_GET['id_area'] !=0){
				$id_area = trim(strip_tags($_GET['id_area']));
				if (get_magic_quotes_gpc()==false) {
					$id_area = mysql_real_escape_string($id_area);
				}

				$arr = explode('-', $_GET['id_area']);

				if(count($arr)>1){
					if($arr[0]==0){
						$chuoi .= " and dientich <= ".$arr[1];
					}elseif($arr[1]==0){
						$chuoi .= " and dientich >= ".$arr[0];
					}else{
						$chuoi .= " and dientich >= ".$arr[0].' and dientich <= '.$arr[1];
					}
				}else{
					$chuoi .= " and dientich = ".$arr[0];
				}
				
			}
		}
		$where = " #_baiviet where hienthi>0 ".$chuoi." and type in ('san-pham') order by stt,id desc";

		$sql = "select * from $where $limit";

		$d->query($sql);
		$tintuc = $d->result_array();
		$url = getCurrentPageURL();
		$paging = pagination($where,$per_page,$page,$url);

		$tintuc_count = get_result_array("select * from $where");

		$title = _search2." ".count($tintuc_count)." "._result;

		$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a>'.$title.'</a></li>
              </ul>';
?>
