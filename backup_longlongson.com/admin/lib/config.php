<?php if(!defined('_lib')) die("Error");


## Cau hinh local
// $config_url=$_SERVER["SERVER_NAME"].':8888/xaydung_longson';
// $config['database']['servername'] = 'localhost:8888';
// $config['database']['username'] = 'root';
// $config['database']['password'] = 'root';
// $config['database']['database'] = 'xaydung_longson';
// $config['database']['refix'] = 'table_';


## Cau hinh host
$config_url=$_SERVER["SERVER_NAME"].'';
$config['database']['servername'] = '';
$config['database']['username'] = 'choquynh_ll';
$config['database']['password'] = 'hYd;!uy8C8J}';
$config['database']['database'] = 'choquynh_ll';
$config['database']['refix'] = 'table_';

## Cau hinh thong tin coder
$config['author']['name']='Nguyễn Hữu Ngọc Duy';
$config['author']['email']='nguyenhuungocduy.nina@gmail.com';
$config['author']['timefinish']='07/2016';

## Cau hinh email gui
$config['email']['host']='127.0.0.1';
$config['email']['email']='no-reply@longlongson.com';
$config['email']['pass']='c0;mk-145shw';

## Cau hinh ngon ngu
$config['lang']=array('vi'=>'Tiếng Việt');
$config['use_lang']=array('vi'=>'');
$config['name_lang']=array('vi'=>'Thông tin');

date_default_timezone_set('asia/ho_chi_minh');

?>