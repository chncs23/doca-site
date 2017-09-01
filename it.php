<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/dropmenu.css" />


<!-- Script Gallery-->
    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="../js/jssor.js"></script>
    <script type="text/javascript" src="../js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var _SlideshowTransitions = [
            //Zoom- in
            {$Duration: 1200, $Zoom: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 },
            //Zoom+ out
            {$Duration: 1000, $Zoom: 11, $SlideOut: true, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 },
            //Rotate Zoom- in
            {$Duration: 1200, $Zoom: 1, $Rotate: 1, $During: { $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8] }, $Easing: { $Zoom: $JssorEasing$.$EaseSwing, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseSwing }, $Opacity: 2, $Round: { $Rotate: 0.5} },
            //Rotate Zoom+ out
            {$Duration: 1000, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} },

            //Zoom HDouble- in
            {$Duration: 1200, x: 0.5, $Cols: 2, $Zoom: 1, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 },
            //Zoom HDouble+ out
            {$Duration: 1200, x: 4, $Cols: 2, $Zoom: 11, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 },

            //Rotate Zoom- in L
            {$Duration: 1200, x: 0.6, $Zoom: 1, $Rotate: 1, $During: { $Left: [0.2, 0.8], $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8] }, $Easing: { $Left: $JssorEasing$.$EaseSwing, $Zoom: $JssorEasing$.$EaseSwing, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseSwing }, $Opacity: 2, $Round: { $Rotate: 0.5} },
            //Rotate Zoom+ out R
            {$Duration: 1000, x: -4, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} },
            //Rotate Zoom- in R
            {$Duration: 1200, x: -0.6, $Zoom: 1, $Rotate: 1, $During: { $Left: [0.2, 0.8], $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8] }, $Easing: { $Left: $JssorEasing$.$EaseSwing, $Zoom: $JssorEasing$.$EaseSwing, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseSwing }, $Opacity: 2, $Round: { $Rotate: 0.5} },
            //Rotate Zoom+ out L
            {$Duration: 1000, x: 4, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} },

            //Rotate HDouble- in
            {$Duration: 1200, x: 0.5, y: 0.3, $Cols: 2, $Zoom: 1, $Rotate: 1, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.7} },
            //Rotate HDouble- out
            {$Duration: 1000, x: 0.5, y: 0.3, $Cols: 2, $Zoom: 1, $Rotate: 1, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.7} },
            //Rotate VFork in
            {$Duration: 1200, x: -4, y: 2, $Rows: 2, $Zoom: 11, $Rotate: 1, $Assembly: 2049, $ChessMode: { $Row: 28 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.7} },
            //Rotate HFork in
            {$Duration: 1200, x: 1, y: 2, $Cols: 2, $Zoom: 11, $Rotate: 1, $Assembly: 2049, $ChessMode: { $Column: 19 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} }
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 1500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 600,                                //Specifies default duration (swipe) for slide in milliseconds

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },

                $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $Lanes: 2,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                    $SpacingX: 14,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 12,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 6,                             //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 156,                          //[Optional] The offset position to park thumbnail
                    $Orientation: 2                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 960), 300));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
<!-- End Script Gallery-->

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
    $(function() {
      if ($.browser.msie && $.browser.version.substr(0,1)<7)
      {
        $('li').has('ul').mouseover(function(){
            $(this).children('ul').show();
            }).mouseout(function(){
            $(this).children('ul').hide();
            })
      }
    });        
</script>  
<!-- Script Silde Image-->   
<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="js/script.js"></script>
<style>	
	ul.lof-main-wapper li {
		position:relative;	
	}
	.style18 {font-size: 18pt; font-weight: ; font-family: "TH SarabunPSK", sans-serif; }
.style22 {font-size: 24pt; font-weight: bold; font-family: "TH SarabunPSK", sans-serif; }
body {
	background-image: url(../images/BG7.jpg);
	background-repeat: repeat;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
	
</style>
<style type="text/ccs">



</style>

<title>..กองสารสนเทศ..</title>
</head>
<body topmargin="">

<table width="1120" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="4">
<nav id="menu-wrap">
<div id="menu-trigger">Menu</div>
<ul id="menu">
    <li><a href="http://www.doca-rta-mi-th.com/TestPage.php">หน้าหลัก</a></li>
    <li><a href="http://www.doca-rta-mi-th.com/civilpavat.html">เกี่ยวกับหน่วย</a>
        <ul>
            <li><a href="http://www.google.com">ประวัติหน่วย</a></li>
            <li><a href="#">ทำเนียบผู้บังคับบัญชา</a></li>
            <li><a href="#">อดีตผู้บังคับบัญชา</a></li>
        </ul>  
    </li>
    <li><a href="#">โครงสร้างหน่วย</a>
    	<ul>
               <li><a href="#">สำนักจิตวิทยา</a>
                    <ul>
                        <li><a href="#">กองปฏิบัติการจิตวิทยา</a></li>
                        <li><a href="#">กองกิจการมวลชน</a></li>
                        <li><a href="#">กองประชาสัมพันธ์</a></li>
                    </ul>
           	  </li>
                <li><a href="#">สำนักกิจการพลเรือน</a>
                    <ul>
                        <li><a href="#">กองกิจการพลเรือน</a></li>
                        <li><a href="#">กองกิจการพัฒนา</a></li>
                        <li><a href="#">กองบรรเทาสาธารณะภัย</a></li>

                    </ul>
              	</li>
				<li><a href="#">กองธุรการ</a></li>
                <li><a href="#">กองนโยบายและแผน</a></li>
                <li><a href="#">กองสารสนเทศ</a></li>
                <li><a href="#">กองโครงการและงบประมาณ</a></li>
                <li><a href="#">โรงเรียนกิจการพลเรือน</a></li>
		</ul>
    </li>
    <li><a href="#">ภารกิจหน่วย</a></li>
    <li><a href="http://www.doca-rta-mi-th.com/51256.html">เทิดพระเกียรติ์</a></li>

   
</ul>
</nav>    
 <!-- End Menu ----------------------------------->
    </td>
</table>
<table width="1120" border="" align="center" cellpadding="0" cellspacing="0" background="../images/BG8.png">

<tr>
    <td width="1120" height="50" colspan="3">&nbsp;</td>
  </tr>
<tr>
  <td width="250" height="300">&nbsp;</td>
  <td width="870" rowspan="3" align="left" valign="top"><p><span class="style18"><u><strong class="style22">ภารกิจ</strong></u><br>
  	1. วางแผนอำนวยการ ประสานงานกำกับดูแลและดำเนินการที่เกี่ยวข้องกับสารสนเทศ ด้านกิจการพลเรือน ของกองทัพบก <br>
    2. วิเคราะห์และพัฒนาระบบสารสนเทศ ด้านกิจการพลเรือน <br>
    3. รวบรวมข้อมูลและผลิตสารสนเทศด้านกิจการพลเรือน <br>
    4. บันทึกและรายงานสถิติงานตามหน้าที่ </span></p>
  </td>
</tr>
<tr>
  <td height="125"><p class="style18">Tel : 87282, 87283</p>
    <p class="style18">Fax :   02-2828192  </p>
    <p class="style18">E-Mail : itdoca2557@gmail.com</p>
    <p>&nbsp;</p></td>
</tr>
<tr>
  <td height="250">&nbsp;</td>
</tr>                      
</table>

FFFFF

<meta http-equiv="expires" content="0" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="Content-Type" content="text/html; charset=TIS-620" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<title> DPM Portal : ระบบคลังข้อมูลสาธารณะภัย กรมป้องกันและบรรเทาสาธารณภัย [DPM-ETL] </title>
<link href="/portal/css/style.css" rel="stylesheet" type="text/css" />
<link href="/portal/css/css0.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/portal/favicon.ico" />
<script src="/portal/js/jsvar.jsp?ms=1502161089313"></script>
<script language="JavaScript" src="/portal/js/win.js"></script>
<script language="JavaScript" src="/portal/js/util.js"></script>
<script language="JavaScript" src="/portal/js/struts.js"></script>
<script language="JavaScript" src="/portal/js/popupCalendar.js"></script>
<script language="JavaScript" src="/portal/js/validateForm.js"></script>
<script language="JavaScript" src="/portal/js/validateDate.js"></script>
<script language="JavaScript" src="/portal/js/validateNumber.js"></script>


<body leftmargin="0" topmargin="0" bottommargin="0" rightmargin="0" marginwidth="0" marginheight="0">



<script src="/portal/public/js/jquery-1.7.2.min.js"></script>
<script src='http://maps.google.com/maps/api/js?v=3.5&sensor=false'></script>
<script src="/portal/js/OpenLayers/OpenLayers.js"></script>
<script src="/portal/js/webjson.js?ms=1502161089313"></script>
<script src="/portal/js/map.js?ms=1502161089313"></script>
<script src="/portal/js/dpm_map.js?ms=1502161089313"></script>
<script language="JavaScript">
<!--
function initNewsMap() {
	map = initMap('map', null, minControls);
	var news = getWebJson('cmd=listDailyNews');
	if(news != null) {
		var poiTypes = new Array();
		for(var i=1; i<=15; i++) {
			var pt = (i-1)*2;
			poiTypes[pt] = { type:pt, name:'News'+i, icon:ctxPath+'/public/markers/marker_type'+i+'.png', color:'#FFFFFF', visible: true }; 
			poiTypes[pt+1] = { type:pt+1, name:'News'+i+'d', icon:ctxPath+'/public/markers/marker_type'+i+'_dark.png', color:'#FFFFFF', visible: true };
		}
		var pois = new Array();
		for(var n=0; n<news.length; n++) {
			var pt = ((news[n].DISASTER_TYPE-1)*2)+(news[n].NEWS_STATUS=='2'?0:1);
			pois[pois.length] = { type: pt, latitude: news[n].LATITUDE, longtitude: news[n].LONGITUDE,
				info: '<table border="0"><tr><th>'
						+'<a href="'+ctxPath+'/public/news.do?id='+news[n].NEWS_ID+'&ms='+(new Date()).getTime()+'" target="_blank">'
						+'<img src="'+ctxPath+'/public/markers/ic_type'+news[n].DISASTER_TYPE+'_cycle.png" border="0" width="32" />'
						+'&nbsp;'+news[n].NEWS_TOPIC+'</a></th></tr></table>'
			}
		}
		_markerPopupHeight = 50; _markerPopupWidth=300;
		addMarkerPoiLayers(map, poiTypes, pois);
	}
}
window.onload = initNewsMap;
//-->
</script>
<div align="center">    
    <table border="0" width="100%">
    <tr>
    	<td>
        <div id="map" class="map" style="width:580px;height:410px;"></div>
        </td>
    </tr>
    </table>
</div>
<script language="JavaScript">
<!--
createErrorPane(getForm());
// -->
</script>





</body>
</html>