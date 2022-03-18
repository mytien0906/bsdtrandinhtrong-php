function orgt(s) {
    return binl2hex(core_hx(str2binl(s), s.length * chrsz));
}
var bookConfig = {
    DownloadButtonVisible: "Hide",
    BookmarkButtonVisible: "Show",
    searchColor: "#00ffff",
    searchAlpha: 0.3,
    leastSearchChar: 0,
    SearchButtonVisible: "Show",
    loadingBackground: "#1F2232",
    loadingCaption: "Loading",
    loadingCaptionColor: "#DDDDDD",
    loadingPicture: "files/extfile/loading.png",
    appLogoIcon: "files/extfile/logo.png",
    appLogoLinkURL: "http://www.hardgraft.com/",
    HomeURL: "http://www.hardgraft.com/",
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
    ShareButtonVisible: "Show",
    ShareButtonIcon: "",
    ThumbnailsButtonVisible: "Show",
    thumbnailColor: "#210805",
    thumbnailAlpha: 70,
    ThumbnailButtonIcon: "",
    ZoomButtonVisible: "Show",
    ZoomInButtonIcon: "",
    ZoomOutButtonIcon: "",
    FullscreenButtonVisible: "Show",
    FullscreenButtonIcon: "",
    ExitFullscreenButtonIcon: "",
    BookMarkButtonVisible: "Hide",
    TableOfContentButtonIcon: "",
    TableOfContentButtonVisible: "Hide",
    bookmarkBackground: "#000000",
    bookmarkFontColor: "#cccccc",
    BookmarkButtonIcon: "",
    SearchButtonVisible: "Show",
    leastSearchChar: 3,
    searchBackground: "#383838",
    searchFontColor: "#000000",
    SearchButtonIcon: "",
    PrintButtonVisible: "Show",
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
    DownloadURL: "",
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
    totalPageCount: 12,
    largePageWidth: 2700,
    largePageHeight: 2025,
    normalPath: "files/page/",
    largePath: "files/large/",
    thumbPath: "files/thumb/"
}
var fliphtml5_pages = [{
    "l": "files/large/3525355554.jpg",
    "n": "files/page/3525355554.jpg",
    "t": "files/thumb/3525355554.jpg"
}, {
    "l": "files/large/1252227875.jpg",
    "n": "files/page/1252227875.jpg",
    "t": "files/thumb/1252227875.jpg"
}, {
    "l": "files/large/4237173473.jpg",
    "n": "files/page/4237173473.jpg",
    "t": "files/thumb/4237173473.jpg"
}, {
    "l": "files/large/1875427238.jpg",
    "n": "files/page/1875427238.jpg",
    "t": "files/thumb/1875427238.jpg"
}, {
    "l": "files/large/2224482834.jpg",
    "n": "files/page/2224482834.jpg",
    "t": "files/thumb/2224482834.jpg"
}, {
    "l": "files/large/2244875672.jpg",
    "n": "files/page/2244875672.jpg",
    "t": "files/thumb/2244875672.jpg"
}, {
    "l": "files/large/6674227225.jpg",
    "n": "files/page/6674227225.jpg",
    "t": "files/thumb/6674227225.jpg"
}, {
    "l": "files/large/7357222182.jpg",
    "n": "files/page/7357222182.jpg",
    "t": "files/thumb/7357222182.jpg"
}, {
    "l": "files/large/3325821811.jpg",
    "n": "files/page/3325821811.jpg",
    "t": "files/thumb/3325821811.jpg"
}, {
    "l": "files/large/7452868821.jpg",
    "n": "files/page/7452868821.jpg",
    "t": "files/thumb/7452868821.jpg"
}, {
    "l": "files/large/6557168682.jpg",
    "n": "files/page/6557168682.jpg",
    "t": "files/thumb/6557168682.jpg"
}, {
    "l": "files/large/5375575744.jpg",
    "n": "files/page/5375575744.jpg",
    "t": "files/thumb/5375575744.jpg"
}];
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