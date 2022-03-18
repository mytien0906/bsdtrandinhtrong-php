<?php
	session_start();
	$session=session_id();
	date_default_timezone_set('Asia/Saigon');
	@define ( '_template' , './templates/'); //định nghĩa đường dẫn tắt, chèn biến vào thay thế
	@define ( '_source' , './sources/');
	@define ( '_lib' , './admin/lib/');
	@define ( _upload_folder , './media/upload/' );
	
	$_SESSION['lang']='vi';
	$lang='vi';

	require_once _source."lang_$lang.php";
	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";

	$id=$_GET['id'];

	#Lấy danh sách hình
	$d->reset();
	$sql="select photo,thumb from #_product_hinhanh where hienthi =1 and id_pro='".$id."' order by stt,id desc";
	$d->query($sql);
	$hinhanh=$d->result_array();		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<base href="http://<?=$config_url?>/"  />
<link rel="alternate" hreflang="vi-vn" href="" />
<meta name="robots" content="index, follow" />
<link href="<?=($row_setting['favicon']!='')?_upload_hinhanh_l.$row_setting['favicon']:'img/favicon.ico'?>" rel="shortcut icon" type="image/x-icon" />
<meta name="revisit-after" content="1 days" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="monitor-signature" content="monitor:player:html5">

<meta name="keywords" content="<?=($key_c!="")?$key_c:$row_setting['keywords_'.$lang]?>" />
<meta name="description" content="<?=($dep_c!="")?$dep_c:$row_setting['description_'.$lang]?>" />
<meta name="author" content="Nguyễn Thanh Tâm" />
<meta name="copyright" content="Nguyễn Thanh Tâm [nguyentam.nina@gmail.com]" />

<!-- Meta tùy chỉnh admin -->
<?=$row_setting['meta']?>

<title><?=($tit_c!="")?$tit_c:$title_bar.$row_setting['title_'.$lang]?></title>

<!-- Dublin Core -->
<link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />
<meta name="DC.title" content="<?=$row_setting['title']?>" />
<meta name="DC.identifier" content="http://<?=$config_url?>/" />
<meta name="DC.description" content="<?=$row_setting['description']?>" />
<meta name="DC.subject" content="<?=$row_setting['keywords']?>" />
<meta name="DC.language" scheme="UTF-8" content="vi,en" />

<!-- Geo -->
<meta name="geo.region" content="VN" />
<meta name="geo.placename" content="Hồ Chí Minh" />
<meta name="geo.position" content="<?php $tmp=explode(',',$row_setting['toado']); echo $tmp[0].';'.$tmp[1];?>" />
<meta name="ICBM" content="<?=$row_setting['toado']?>" />

<!-- Share facebook -->
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://<?=$config_url?>/<?=_upload_hinhanh_l.$banner['photo']?>"/>
<meta property="og:title" content="<?=($tit_c!="")?$tit_c:$title_bar.$row_setting['title_'.$lang]?>"/>
<meta property="og:site_name" content="<?=$row_setting['ten_'.$lang]?>"/>
<meta property="og:url" content="<?=getCurrentPageUrl()?>"/>

<link rel="stylesheet" href="style/style.css"/>
<link rel="stylesheet" href="style/player.css"/>
<link rel="stylesheet" href="style/phoneTemplate.css" />
<script src="javascript/jquery-1.9.1.min.js"></script>
</head>

<body>
    
	<!-- JS Page -->
	<script type="text/javascript">
		function orgt(s) {
		    return binl2hex(core_hx(str2binl(s), s.length * chrsz));
		}
		var bookConfig = {
		    DownloadButtonVisible: "Show",
		    BookmarkButtonVisible: "Show",
		    searchColor: "#00ffff",
		    searchAlpha: 0.3,
		    leastSearchChar: 0,
		    SearchButtonVisible: "Hide",
		    loadingBackground: "#1F2232",
		    loadingCaption: "Loading",
		    loadingCaptionColor: "#DDDDDD",
		    loadingPicture: "files/extfile/loading.png",
		    appLogoIcon: "files/extfile/logo.png",
		    appLogoLinkURL: "",
		    HomeURL: "",
		    appLogoOpenWindow: "Blank",
		    bookTitle: "FLIPBOOK",
		    bookDescription: "",
		    toolbarColor: "#45351F",
		    iconColor: "#FFFFFF",
		    pageNumColor: "#333333",
		    FlipSound: "No",
		    QRCode: "Hide",
		    logoHeight: "30",
		    logoPadding: "10",
		    logoTop: "8",
		    HomeButtonVisible: "Hide",
		    HomeButtonIcon: "",
		    AnnotationButtonVisible: "Hide",
		    AnnotationButtonIcon: "",
		    ShareButtonVisible: "Hide",
		    ShareButtonIcon: "",
		    ThumbnailsButtonVisible: "Show",
		    thumbnailColor: "#210805",
		    thumbnailAlpha: 70,
		    ThumbnailButtonIcon: "",
		    ZoomButtonVisible: "Show",
		    ZoomInButtonIcon: "",
		    ZoomOutButtonIcon: "",
		    FullscreenButtonVisible: "Hide",
		    FullscreenButtonIcon: "",
		    ExitFullscreenButtonIcon: "",
		    BookMarkButtonVisible: "Hide",
		    TableOfContentButtonIcon: "",
		    TableOfContentButtonVisible: "Hide",
		    bookmarkBackground: "#000000",
		    bookmarkFontColor: "#cccccc",
		    BookmarkButtonIcon: "",
		    SearchButtonVisible: "Hide",
		    leastSearchChar: 3,
		    searchBackground: "#383838",
		    searchFontColor: "#000000",
		    SearchButtonIcon: "",
		    PrintButtonVisible: "Hide",
		    PrintButtonIcon: "",
		    printWatermarkFile: "",
		    BackgroundSoundButtonVisible: "Hide",
		    BackgroundSoundURL: "",
		    BackgroundSoundLoop: -1,
		    BackgroundSoundButtonOnIcon: "",
		    BackgroundSoundButtonOffIcon: "",
		    HelpButtonVisible: "Hide",
		    helpContentFileURL: "",
		    helpWidth: 400,
		    helpHeight: 450,
		    showHelpContentAtFirst: "No",
		    HelpButtonIcon: "",
		    aboutButtonVisible: "Hide",
		    CompanyLogoFile: "",
		    AboutButtonIcon: "",
		    AutoPlayButtonVisible: "Show",
		    autoPlayAutoStart: "No",
		    autoPlayDuration: 3,
		    autoPlayLoopCount: 1,
		    AutoPlayStartButtonIcon: "",
		    AutoPlayStopButtonIcon: "",
		    minZoomWidth: 403,
		    minZoomHeight: 518,
		    mouseWheelFlip: "yes",
		    DownloadButtonVisible: "Hide",
		    DownloadButtonIcon: "",
		    DownloadURL: "<?=_upload_product_l.$product_detail[$i]['file']?>",
		    VideoButtonVisible: "Hide",
		    VideoButtonIcon: "",
		    SlideshowButtonVisible: "Hide",
		    SlideshowButtonIcon: "",
		    bgBeginColor: "#FFFFFF",
		    bgEndColor: "#FFFFFF",
		    bgMRotation: 90,
		    backGroundImgURL: "files/extfile/bg.jpg",
		    LeftShadowWidth: 70,
		    LeftShadowAlpha: 1,
		    RightShadowWidth: 40,
		    RightShadowAlpha: 0.6,
		    pageBackgroundColor: "#FFFFFF",
		    flipshortcutbutton: "Show",
		    OriginPageIndex: 1,
		    HardPageEnable: "No",
		    RightToLeft: "No",
		    flippingTime: 0.3,
		    retainBookCenter: "Yes",
		    FlipStyle: "Flip",
		    showDoublePage: "No",
		    addPaperCoil: "No",
		    totalPagesCaption: "",
		    pageNumberCaption: "",
		    topMargin: 100,
		    bottomMargin: 100,
		    leftMargin: 40,
		    rightMargin: 40,
		    LinkDownColor: "#0000FF",
		    LinkAlpha: 0.4,
		    OpenWindow: "Blank",
		    showLinkHint: "Yes",
		    haveAdSense: "No",
		    adSenseWidth: 200,
		    adSenseHeight: 200,
		    adSenseLeft: 50,
		    adSenseTop: 50,
		    adSenseClientId: "",
		    googleAnalyticsID: "",
		    language: "English",
		    AboutAddress: "",
		    AboutEmail: "",
		    AboutMobile: "",
		    AboutWebsite: "",
		    AboutDescription: "",
		    AboutAuthor: "PUB HTML5",
		    totalPageCount: <?=count($hinhanh)?>,
		    largePageWidth: 2700,
		    largePageHeight: 2025,
		    normalPath: "files/page/",
		    largePath: "files/large/",
		    thumbPath: "files/thumb/"
		}
		var fliphtml5_pages = [
		<?php for ($i=0; $i < count($hinhanh); $i++) { ?>
			{
			    "l": "http://<?=$config_url?>/<?=_upload_product_l.$hinhanh[$i]['photo']?>",
			    "n": "http://<?=$config_url?>/<?=_upload_product_l.$hinhanh[$i]['photo']?>",
			    "t": "http://<?=$config_url?>/<?=_upload_product_l.$hinhanh[$i]['photo']?>"
			}	
			<?php if(($i+1)<count($hinhanh)){echo ',';} ?>
		<?php } ?>
		];
		var language = [{
		    language: "english",
		    btnFirstPage: "First",
		    btnNextPage: "Next",
		    btnLastPage: "Last",
		    btnPrePage: "Previous",
		    btnGoToHome: "Home",
		    btnDownload: "Download",
		    btnSoundOn: "SoundOn",
		    btnSoundOff: "SoundOff",
		    btnPrint: "Print",
		    btnThumb: "Thumbnails",
		    btnBookMark: "Book Mark",
		    frmBookMark: "Book Mark",
		    btnZoomIn: "Zoom In",
		    btnZoomOut: "Zoom Out",
		    btnAutoFlip: "Auto Flip",
		    btnStopAutoFlip: "Stop Auto Flip",
		    btnSocialShare: "Share",
		    btnHelp: "Help",
		    btnAbout: "About",
		    btnSearch: "Search",
		    btnFullscreen: "Fullscreen",
		    btnMore: "More",
		    frmPrintCaption: "Print",
		    frmPrintall: "Print All Pages",
		    frmPrintcurrent: "Print Current Page",
		    frmPrintRange: "Print Range",
		    frmPrintexample: "Example: 2,3,5-10",
		    frmPrintbtn: "Print",
		    frmShareCaption: "Share",
		    frmShareLabel: "Share",
		    frmShareInfo: "You can easily share this publication to social networks.Just click the appropriate button below",
		    frminsertLabel: "Insert to Site",
		    frminsertInfo: "Use the code below to embed this publication to your website.",
		    frmaboutcaption: "Contact",
		    frmaboutcontactinformation: "Contact Information",
		    frmaboutADDRESS: "ADDRESS",
		    frmaboutEMAIL: "EMAIL",
		    frmaboutWEBSITE: "WEBSITE",
		    frmaboutMOBILE: "MOBILE",
		    frmaboutAUTHOR: "AUTHOR",
		    frmaboutDESCRIPTION: "DESCRIPTION",
		    frmSearch: "Search",
		    frmToc: "Table of Content",
		    btnTableOfContent: "Show Table of Content",
		    btnNote: "Annotation"
		}];
		var ols = [];
		var bmtConfig = [];
		var staticAd = {
		    haveAd: false,
		    data: []
		};
		var videoList = [];
		var slideshow = [];
	</script>

    <script src="javascript/LoadingJS.js"></script> 
    <script src="javascript/main.js"></script> 
    <script src="javascript/editor.js"></script> 
    <script src="files/search/book_config.js"></script>
    <link rel="stylesheet" href="style/template.css" />
    <script src="javascript/flipHtml5.hiSlider2.min.js"></script>
    <link rel="stylesheet" href="style/hiSlider2.min.css" />
</body>
</html>