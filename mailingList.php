<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Juliana Korver</title>
<link href="css/base.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css">
<!--[if lte IE 6]>
	<link href="css/IE_base.css" rel="stylesheet" type="text/css">
	<link href="css/IE_menu.css" rel="stylesheet" type="text/css">
<![endif]-->

<script language = "Javascript">
/**
 * DHTML email validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
 */

function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Please enter a valid email address.")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Please enter a valid email address.")
		   return false
		}
		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		   alert("Please enter a valid email address.")
		    return false
		}
		 if (str.indexOf(at,(lat+1))!=-1){
		   alert("Please enter a valid email address.")
		    return false
		 }
		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		   alert("Please enter a valid email address.")
		    return false
		 }
		 if (str.indexOf(dot,(lat+2))==-1){
		   alert("Please enter a valid email address.")
		    return false
		 }
		 if (str.indexOf(" ")!=-1){
		   alert("Please enter a valid email address.")
		    return false
		 }

 		 return true					
	}

function ValidateForm(){
	var nameID=document.theForm.Name
	var emailID=document.theForm.Email
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please enter your email to continue.")
		emailID.focus()
		return false
	}
	if (echeck(emailID.value)==false){
		emailID.value=""
		emailID.focus()
		return false
	}
	return true
 }
</script>

<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />

	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="js/lightbox_Essay.js" type="text/javascript"></script>
</head>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-919812-3");
pageTracker._trackPageview();
} catch(err) {}</script>

<body>
  <div class="container">
    <?php include("header.php");?>
    <div style="clear:both;"/>
    <div class="main">
    <img src="img/leaves500.jpg" align="right"/>
     <div class="main_left">
      <p> I am compiling an email list of disc golfing women. I will use this list to promote tournaments that are doing something extra for the women. I may  occasionally ask the list for opinions or ideas as well.  I will not inundate you with a huge number of emails.  I hope that I can send them out on a monthly basis, but it may not be that often.</p>
      <p>If you would like to be included in this list, please send your name, email, city, state, and division to me at: 
 <script language=javascript><!--
var username = "jbkorver";
var hostname = "yahoo.com";
var linktext = username + "@" + hostname;
document.write("<a href=" + "mail" + "to:" + username +
"@" + hostname + ">" + linktext + "</a>")
//-->
</script>      
      </p>
      <p>Note: I only need your email address and do not require any other information.  I would, however, appreciate the other information as it may help me with future projects.</p>
     </div>
     <div class="main_mid">
           <p>&nbsp;</p>
      </div>
    </div>
    <div style="clear:both;"></div>
    <?php include("footer.php");?>
  </div><!--container-->
   
</body>
</html>
  
  
  
