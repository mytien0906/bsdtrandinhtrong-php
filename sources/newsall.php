<?php  if(!defined('_source')) die("Error");
	@$id =  addslashes($_GET['id']);
	@$idl =  addslashes($_GET['idl']);

	if($idl!='' && !$id){

		$row_list = get_fetch_array("select id,ten_$lang,mota_$lang,tenkhongdau,title,keywords,description,type,quangcao,links,name_$lang from #_baiviet_list where hienthi=1 and tenkhongdau='".$idl."'");
		if($row_list){
			if($psize!=0){
				$per_page = $psize; // Set how many records do you want to display per page.
			}else{
				$per_page = $row_setting['page_sp'];
			}

			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;

			$where = " #_baiviet where hienthi=1 and id_list='".$row_list['id']."'  order by stt,ngaytao desc";

			$sql = "select * from $where $limit";
			$d->query($sql);
			$tintuc = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);
			switch ($row_list['type']) {
				case 'san-pham':
					$bread = 'Sản phẩm';
					break;
				case 'tra-cuu-cung-menh':
					$bread = 'Tra cứu cung mệnh';
					break;
				default:
					$bread = 'Bài viết';
					break;
			}
			
			$breadcumb ='<ul id="breadcrumb">
	            <li><a href="">'._home.'</a></li>
				<li><a href="'.$row_list['type'].'">'.$bread.'</a></li>
	            <li><a href="">'.$row_list["ten_$lang"].'</a></li>
	          </ul>';
			$title_cat = $row_list["ten_$lang"];
			$title = $row_list["ten_$lang"];
			$title_bar .= $row_list['title'];
			$keyword_bar .= $row_list['keywords'];
			$description_bar .= $row_list['description'];

			if(count($tintuc)==0) $title_cat= _updating;
			if($row_list['type']=='san-pham'){
				$template = 'product';
			}
			if($idl=='tra-cuu-cung-menh'){
				$template = 'product';
			}
		}



		$row_cat = get_fetch_array("select id,ten_$lang,tenkhongdau,title,keywords,description,id_list,type from #_baiviet_cat where hienthi=1 and tenkhongdau='".$idl."'");

		if($row_cat){
			if($psize!=0){
				$per_page = $psize; // Set how many records do you want to display per page.
			}else{
				$per_page = $row_setting['page_sp'];
			}


			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;

			$where = " #_baiviet where hienthi=1 and id_cat='".$row_cat['id']."'  order by stt,ngaytao desc";

			$sql = "select * from $where $limit";
			$d->query($sql);
			$tintuc = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);

			$list_detail = get_fetch_array("select id,ten_$lang,tenkhongdau,title,keywords,description from #_baiviet_list where hienthi=1 and id='".$row_cat['id_list']."'");

			switch ($row_cat['type']) {
				case 'san-pham':
					$bread = 'Sản phẩm';
					break;
				
				default:
					$bread = 'Bài viết';
					break;
			}

			$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$row_cat['type'].'">'.$bread.'</a></li>
                <li><a href="'.$list_detail['tenkhongdau'].'">'.$list_detail['ten_'.$lang].'</a></li>
                <li><a href="'.$row_cat['tenkhongdau'].'">'.$row_cat['ten_'.$lang].'</a></li>
              </ul>';

			$title_cat = $row_cat['ten_'.$lang];
			$title = $row_cat['ten_'.$lang];
			$title_bar .= $row_cat['title'];
			$keyword_bar .= $row_cat['keywords'];
			$description_bar .= $row_cat['description'];

			if(count($tintuc)==0) $title_cat= _updating;

			if($row_cat['type']=='san-pham'){
				$template = 'product';
			}

		}

		$row_item = get_fetch_array("select id,ten_$lang,tenkhongdau,title,keywords,description,type,id_list,id_cat from #_baiviet_item where hienthi=1 and tenkhongdau='".$idl."'");

		if($row_item){
			if($psize!=0){
				$per_page = $psize; // Set how many records do you want to display per page.
			}else{
				$per_page = $row_setting['page_sp'];
			}


			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;

			$where = " #_baiviet where hienthi=1 and id_item='".$row_item['id']."'  order by stt,ngaytao desc";

			$sql = "select * from $where $limit";
			$d->query($sql);
			$tintuc = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);

			$list_detail = get_fetch_array("select id,ten_$lang,tenkhongdau,title,keywords,description from #_baiviet_list where hienthi=1 and id='".$row_item['id_list']."'");

			$cat_detail = get_fetch_array("select id,ten_$lang,tenkhongdau,title,keywords,description from #_baiviet_cat where hienthi=1 and id='".$row_item['id_cat']."'");

			switch ($row_item['type']) {
				case 'san-pham':
					$bread = 'Sản phẩm';
					break;
				
				default:
					$bread = 'Bài viết';
					break;
			}


			$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$row_item['type'].'">'.$bread.'</a></li>
                <li><a href="'.$list_detail['tenkhongdau'].'">'.$list_detail['ten_'.$lang].'</a></li>
                <li><a href="'.$cat_detail['tenkhongdau'].'">'.$cat_detail['ten_'.$lang].'</a></li>
                <li><a href="'.$row_item['tenkhongdau'].'">'.$row_item['ten_'.$lang].'</a></li>
              </ul>';

			$title_cat = $row_item['ten_'.$lang];
			$title = $row_item['ten_'.$lang];
			$title_bar .= $row_item['title'];
			$keyword_bar .= $row_item['keywords'];
			$description_bar .= $row_item['description'];

			if(count($tintuc)==0) $title_cat= _updating;
			if($row_item['type']=='san-pham'){
				$template = 'product';
			}
		}


		if(!$row_list && !$row_cat && !$row_item){
			if($psize!=0){
				$per_page = $psize;
			}else{
				$per_page = $row_setting['page_sp'];
			}
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;

			$where = " #_baiviet where hienthi=1 and type='".$idl."'";
			$where .= $where_tk;
			$where .= " order by stt,ngaytao desc ";

			$title_bread = '<a href="" title="Trang chủ">Trang chủ</a> &gt; '._baiviet;

			$breadcumb ='<ul id="breadcrumb">
	            <li><a href="">'._home.'</a></li>
	            <li><a href="'.$idl.'">'.$bread.'</a></li>
	          </ul>';

			$sql = "select * from $where $limit";
			$d->query($sql);
			$tintuc = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);

			if(count($tintuc)==0) $title_cat= _updating;
			if(count($tintuc)==0){
				if($idl=='san-pham'){
					include 'productall.php';
				}elseif($idl=='cua-hang'){
					include 'cuahang.php';
				}
			}
		}
	}

	if($id!='' && $idl!=''){
		$row_detail = get_fetch_array("select * from #_baiviet where hienthi=1 and tenkhongdau='".$id."'");

		$luotxem = $row_detail['luotxem']+1;
		$sql_update = "update #_baiviet SET luotxem=$luotxem where id=".$row_detail['id'];
		$d->query($sql_update);

			$share_facebook = '<meta property="og:url" content="'.getCurrentPageURL().'" />
<meta property="og:type" content="website" />
<meta property="og:title" content="'.$row_detail['ten_'.$lang].'" />
<meta property="og:description" content="'.strip_tags($row_detail['description']).'" />
<meta property="og:locale" content="vi" />
<meta property="og:image" content="http://'.$config_url.'/'._upload_baiviet_l.$row_detail['photo'].'" />
<meta itemprop="name" content="'.$row_detail['title'].'">
<meta itemprop="description" content="'.strip_tags($row_detail['description']).'">
<meta itemprop="image" content="http://'.$config_url.'/'._upload_baiviet_l.$row_detail['photo'].'">
<meta name="twitter:card" content="product">
<meta name="twitter:site" content="'.$row_detail['ten_'.$lang].'">
<meta name="twitter:title" content="'.$row_detail['title'].'">
<meta name="twitter:description" content="'.strip_tags($row_detail['description']).'">
<meta name="twitter:creator" content="'.$row_detail['title'].'">
<meta name="twitter:image" content="http://'.$config_url.'/'._upload_baiviet_l.$row_detail['photo'].'">
<script type="application/ld+json">
{
	"@context": "http://schema.org/",
	"@type": "Article",
	"name": "'.$row_setting['ten_'.$lang].'",
	"author": "'.$row_setting['ten_'.$lang].'",
	"image": "http://'.$config_url.'/'._upload_baiviet_l.$row_detail['photo'].'",
	"description": "'.strip_tags($row_detail['description']).'",
	"aggregateRating": {
		"@type": "Article",
		"ratingValue": "4.5",
		"reviewCount": "'.$row_detail['luotxem'].'",
		"bestRating": "5",
		"worstRating": "1"
	}
}
</script>';

			if($row_detail['id_list']!=0 && $row_detail['id_cat']==0){

				$list_detail = get_fetch_array("select id,ten_$lang,tenkhongdau,title,keywords,description from #_baiviet_list where hienthi=1 and id='".$row_detail['id_list']."'");

				$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$row_detail['type'].'">'.$bread.'</a></li>
                <li><a href="'.$list_detail['tenkhongdau'].'">'.$list_detail['ten_'.$lang].'</a></li>
                <li><a href="'.$row_detail['type'].'/'.$row_detail['tenkhongdau'].'">'.$row_detail['ten_'.$lang].'</a></li>
              </ul>';


			}elseif($row_detail['id_list']!=0 && $row_detail['id_cat']!=0 && $row_detail['id_item']==0){

				$list_detail = get_fetch_array("select id,ten_$lang,tenkhongdau,title,keywords,description from #_baiviet_list where hienthi=1 and id='".$row_detail['id_list']."'");
				$cat_detail = get_fetch_array("select id,ten_$lang,tenkhongdau,title,keywords,description from #_baiviet_cat where hienthi=1 and id='".$row_detail['id_cat']."'");

				$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$row_detail['type'].'">'.$bread.'</a></li>
                <li><a href="'.$list_detail['tenkhongdau'].'">'.$list_detail['ten_'.$lang].'</a></li>
                <li><a href="'.$cat_detail['tenkhongdau'].'">'.$cat_detail['ten_'.$lang].'</a></li>
                <li><a href="'.$row_detail['type'].'/'.$row_detail['tenkhongdau'].'">'.$row_detail['ten_'.$lang].'</a></li>
              </ul>';

			}elseif($row_detail['id_list']!=0 && $row_detail['id_cat']!=0 && $row_detail['id_item']!=0){

				$list_detail = get_fetch_array("select id,ten_$lang,tenkhongdau,title,keywords,description from #_baiviet_list where hienthi=1 and id='".$row_detail['id_list']."'");
				$cat_detail = get_fetch_array("select id,ten_$lang,tenkhongdau,title,keywords,description from #_baiviet_cat where hienthi=1 and id='".$row_detail['id_cat']."'");
				$item_detail = get_fetch_array("select id,ten_$lang,tenkhongdau,title,keywords,description from #_baiviet_item where hienthi=1 and id='".$row_detail['id_item']."'");

				$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$row_detail['type'].'">'.$bread.'</a></li>
                <li><a href="'.$list_detail['tenkhongdau'].'">'.$list_detail['ten_'.$lang].'</a></li>
                <li><a href="'.$cat_detail['tenkhongdau'].'">'.$cat_detail['ten_'.$lang].'</a></li>
                <li><a href="'.$item_detail['tenkhongdau'].'">'.$item_detail['ten_'.$lang].'</a></li>
                <li><a href="'.$row_detail['type'].'/'.$row_detail['tenkhongdau'].'">'.$row_detail['ten_'.$lang].'</a></li>
              </ul>';

			}else{
				$breadcumb ='<ul id="breadcrumb">
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$row_detail['type'].'">'.$bread.'</a></li>
                <li><a href="'.$row_detail['type'].'/'.$row_detail['tenkhongdau'].'">'.$row_detail['ten_'.$lang].'</a></li>
              </ul>';
			}

			$hinhanh_sp = get_result_array("select * from #_baiviet_photo where hienthi=1 and id_baiviet='".$row_detail['id']."' order by stt,id desc");


			$per_page = 10;
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;

			if($row_detail['id_list']!=0){
				$where = " #_baiviet where hienthi=1 and  type='".$row_detail['type']."' and id_list='".$row_detail['id_list']."' and id!='".$row_detail['id']."' order by stt,ngaytao desc";
			}elseif($row_detail['id_cat']!=0){
				$where = " #_baiviet where hienthi=1 and  type='".$row_detail['type']."' and id_cat='".$row_detail['id_cat']."' and id!='".$row_detail['id']."' order by stt,ngaytao desc";
			}elseif($row_detail['id_item']!=0){
				$where = " #_baiviet where hienthi=1 and  type='".$row_detail['type']."' and id_item='".$row_detail['id_item']."' and id!='".$row_detail['id']."' order by stt,ngaytao desc";
			}else{
				$where = " #_baiviet where hienthi=1 and  type='".$row_detail['type']."' and id!='".$row_detail['id']."' and id!='".$row_detail['id']."' order by stt,ngaytao desc";
			}

			$sql = "select * from $where $limit";
			$d->query($sql);
			$tintuc = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);


			$danhmuc_detail = get_result_array("select id,ten_$lang,tenkhongdau,title,keywords,description from #_baiviet_list where hienthi=1 order by stt asc, id desc");

			$title = $row_detail['ten_'.$lang];
			$title_bar .= $row_detail['title'];
			$keyword_bar .= $row_detail['keywords'];
			$description_bar .= $row_detail['description'];
			if($row_detail['type']=='san-pham'){
				$template = 'product_detail';
			}
	}

	if(!$idl && !$id){
		if($psize!=0){
			$per_page = $psize;
		}else{
			$per_page = $row_setting['page_sp'];
		}
		$startpoint = ($page * $per_page) - $per_page;
		$limit = ' limit '.$startpoint.','.$per_page;

		$where = " #_baiviet where hienthi=1 ";
		$where .= $where_tk;
		$where .= " order by stt,ngaytao desc ";

		$title_bread = '<a href="" title="Trang chủ">Trang chủ</a> &gt; '._baiviet;

		$breadcumb ='<ul id="breadcrumb">
            <li><a href="">'._home.'</a></li>
            <li><a href="'.$com.'">'.$bread.'</a></li>
          </ul>';

		$sql = "select * from $where $limit";
		$d->query($sql);
		$tintuc = $d->result_array();

		$url = getCurrentPageURL();
		$paging = pagination($where,$per_page,$page,$url);

		if(count($tintuc)==0) $title_cat= _updating;
		if(count($tintuc)==0){
			include 'productall.php';
		}
	}


?>
