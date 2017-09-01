<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/dropmenu.css" />

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
<script type="text/javascript">
 $(document).ready( function(){	
		var buttons = { previous:$('#jslidernews2 .button-previous') ,
						next:$('#jslidernews2 .button-next') };			 
		$('#jslidernews2').lofJSidernews( { interval:5000,
											 	easing:'easeInOutQuad',
												duration:1200,
												auto:true,
												mainWidth:870,
												mainHeight:300,
												navigatorHeight		: 60,
												navigatorWidth		: 250,
												maxItemDisplay:5,
												buttons:buttons } );						
	});

</script>
<style>
	
	ul.lof-main-wapper li {
		position:relative;	
	}
body {
	background-image: url(../images/BG8.png);
	background-repeat: repeat;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

/*Class Fix Header, Footer*/
 .pageheader
       {
          width:100%;
          height:50px;
          background-color:#282828;
          position:fixed;
          top:0;
          z-index:99;
       }
      .pagefooter
      {
          width:100%;
          height:50px;
          background-color:#282828;
          position:fixed;
          bottom:0;
       } 
</style>

<title>Test Page DOCA </title>
</head>
<body topmargin="">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<table width="1120" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="4">
<nav id="menu-wrap">
<div id="menu-trigger">Menu</div>
<ul id="menu">
    <li><a href="#">หน้าหลัก</a></li>
    <li><a href="#">Management</a>
        <ul>
            <li><a href="">Menu</a></li>
            <li><a href="">FreeText</a></li>
            <li><a href="">Activity</a></li>
            <li><a href="">Announcement</a></li>
            <li><a href="">Journal</a></li>
        </ul>  
    </li>
</ul>
</nav>    
 <!-- End Menu ----------------------------------->
    </td>
</table>
  </tr>
<table width="1120" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="200" height="150" background="/images/DocaBanner.png"></td>
  </tr>
 </table>
<table width="1120" border="0" align="center" cellpadding="0" cellspacing="0">
  
  <tr>
	<td width="2016" height="10" bgcolor="#666666">&nbsp;</td>
</tr>
</table>

</body>
</html>