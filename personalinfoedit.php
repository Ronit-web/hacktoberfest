<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<link href="css/main.css" rel="stylesheet" type="text/css" />
<?php

	
	$arival = $_POST['start'];
	$departure = $_POST['end'];
	$adults = $_POST['adult'];
	$child = $_POST['child'];	
	$no_rooms = $_POST['no_rooms'];
	$roomid = $_POST['roomid'];
	$result = $_POST['result'];
	$confirmation = $_POST['confirmation'];
	
?>
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  <!--sa validate from-->
<script type="text/javascript">
<!--sa show kag hide nga java script-->
<script language="javascript" type="text/javascript">
function showHide(shID) {
	if (document.getElementById(shID)) {
		if (document.getElementById(shID+'-show').style.display != 'none') {
			document.getElementById(shID+'-show').style.display = 'none';
			document.getElementById(shID).style.display = 'block';
		}
		else {
			document.getElementById(shID+'-show').style.display = 'inline';
			document.getElementById(shID).style.display = 'none';
		}
	}
}
</script>
<style type="text/css">
	

	/* This CSS is used for the Show/Hide functionality. */
	.more {
		display: none;
		border-top: 1px solid #666;
		border-bottom: 1px solid #666; }
	a.showLink, a.hideLink {
		text-decoration: none;
		color: #36f;
		padding-left: 8px;
		background: transparent url(down.gif) no-repeat left; }
	a.hideLink {
		background: transparent url(up.gif) no-repeat left; }
	a.showLink:hover, a.hideLink:hover {
		border-bottom: 1px dotted #36f; }
.style5 {color: #FF9900}
a:link {
	color: #0000FF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: #FFFF00;
}
a:active {
	text-decoration: none;
}
 #errmsg { color:red; }
 #errmsg1 { color:red; }
</style>
<script type="text/javascript">
function validateForm()
{

var y=document.forms["personal"]["name"].value;
var a=document.forms["personal"]["last"].value;
var b=document.forms["personal"]["address"].value;
var c=document.forms["personal"]["city"].value;
var d=document.forms["personal"]["zip"].value;
var e=document.forms["personal"]["country"].value;
var f=document.forms["personal"]["email"].value;
var g=document.forms["personal"]["cemail"].value;
var x=document.forms["personal"]["cnumber"].value;
var i=document.forms["personal"]["password"].value;
var atpos=f.indexOf("@");
var dotpos=f.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=f.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
if( f != g ) {
alert("email does not match");
  return false;
} 
if ((a=="Lastname" || a=="") || (b=="Address" || b=="") || (c=="City" || c=="") || (d=="ZIP Code" || d=="") || (e=="Country" || e=="") || (f=="Email" || f=="") || (g=="Confirm Email" || g=="")|| (x=="Contact Number" || x=="") || (y=="Firstname" || y=="") || (i=="Password" || i==""))
  {
  alert("all field are required!");
  return false;
  }
 
if (document.personal.condition.checked == false)
{
alert ('pls. agree the term and condition of this hotel');
return false;
}
else
{
return true;
}
}
</script>
<script type="text/javascript">
function validateForm1()
{
var r=document.forms["log"]["email"].value;
var g=document.forms["log"]["password"].value;
var atpos=r.indexOf("@");
var dotpos=r.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=r.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }  

if ((a==null || a==""))
  {
  alert("pls.enter your password");
  return false;
  }
}
</script>

<!--sa watermark-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.watermarkinput.js"></script>
<script type="text/javascript">
jQuery(function($){
   $("#name").Watermark("Firstname");
   $("#last").Watermark("Lastname");
   $("#address").Watermark("Address");
   $("#city").Watermark("City");
   $("#zip").Watermark("ZIP Code");
   $("#country").Watermark("Country");
   $("#email").Watermark("Email");
   $("#cemail").Watermark("Confirm Email");
   $("#cnumber").Watermark("Contact Number");
   $("#password").Watermark("Password");
   $("#em").Watermark("Email Address");
   $("#pass").Watermark("Password");
   });
</script>

<!--sa input that accept number only-->
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    
    //called when key is pressed in textbox
	$("#zip").keypress(function (e)  
	{ 
	  //if the letter is not digit then display error and don't type anything
	  if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
	  {
		//display error message
		$("#errmsg").html("Number Only").show().fadeOut("slow"); 
	    return false;
      }	
	});
	$("#cnumber").keypress(function (a)  
	{ 
	  //if the letter is not digit then display error and don't type anything
	  if( a.which!=8 && a.which!=0 && (a.which<48 || a.which>57))
	  {
		//display error message
		$("#errmsg1").html("Number Only").show().fadeOut("slow"); 
	    return false;
      }	
	});

  });
  </script>

</script>
</head>

<body>
<div class="mainwrapper">
  <div class="leftother">
    <div class="l"></div>
	<div class="r">
	
	
	
	
	<div class="right3">
  <div style="float: left; margin-left: 25px; margin-top: 12px; font-family:Arial, Helvetica, sans-serif;"></div>
   <div style="float: right; margin-right: 0px; margin-top: 12px; color:#000000; font-family:Arial, Helvetica, sans-serif; width:489px;">
    
 <form action="saveedit.php" method="post" style="margin-top: -31px;" onsubmit="return validateForm()" name="personal">
  <input name="start" type="hidden" value="<?php echo $arival; ?>" />
  <input name="end" type="hidden" value="<?php echo $departure; ?>" />
  <input name="adult" type="hidden" value="<?php echo $adults; ?>" />
  <input name="child" type="hidden" value="<?php echo $child; ?>" />
  <input name="n_room" type="hidden" value="<?php echo $no_rooms; ?>" />
  <input name="rm_id" type="hidden" value="<?php echo $roomid; ?>" />
  <input name="confirmation" type="hidden" value="<?php echo $confirmation; ?>" />
  <input name="result" type="hidden" value="<?php echo $result; ?>" />
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
  <br />
	 <h3>First Name * </h3>
 <input name="name" type="text" class="ed" id="name" /> 
	  <h3>Last name* </h3>
 <input name="last" type="text" class="ed" id="last" /> <br />
	  <h3>Address </h3>
 <input name="address" type="text" class="ed" id="address" /> 
	  <h3>City* </h3>
 <input name="city" type="text" class="ed" id="city" /> <br />
	  <h3>Country* </h3>
<input name="country" type="text" class="ed" id="country" />
	   <h3>PinCode* </h3>
  <input name="zip" type="text" class="ed" id="zip" /> <span id="errmsg"></span> <br />
	   <h3>Email * </h3>
 <input name="email" type="text" class="ed" id="email" /> 
	   <h3>Confirm Email </h3>
 <input name="cemail" type="text" class="ed" id="cemail" /> <br />
	   <h3>Password* </h3>
 <input name="password" type="text" class="ed" id="password" />
	   <h3>Confrim password </h3>
 <input name="cnumber" type="text" class="ed" id="cnumber" /><span id="errmsg1"></span>  <br />
 <label>
 <input type="checkbox" name="condition" value="checkbox" />
  <small>i agree the <a rel="facebox" href="terms_condition.php">terms and condition</a> of this hotel</small></label>
 <br />
  <p style="margin-top: 2px; margin-left: 1px;">
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'><small>If you are a Human Enter the code above here :</small></label><br>
<input id="6_letters_code" name="6_letters_code" type="text" class="ed"><br>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
</p>
 <input name="but" type="submit" value="Confirm" />
  </form>
  </div>
  </div>
	
	
	
	
	
	
	
	
	
	</div>
  </div>
  
  
  
  
  
  
  <div class="rightother">
  
  <div class="reservation">
	  <div align="center" style="padding-top: 7px; font-size:24px;"><strong>RESERVATION  DETAILS</strong></div>
	<div style="margin-top: 14px;">
<label style="margin-left: 16px;">Check In Date : <?php echo $arival; ?></label><br />
<label style="margin-left: 3px;">Check Out Date : <?php echo $departure; ?></label><br />
<label style="margin-left: 71px;">Adults : <?php echo $adults; ?></label><br />
<label style="margin-left: 78px;">Child : <?php echo $child; ?></label><br />
<label style="margin-left: -12px;">Number of Rooms : <?php echo $no_rooms; ?></label><br />
<label style="margin-left: 53px;">Room ID : <?php echo $roomid; ?></label><br />
<label style="margin-left: -9px;">Number Of Nights : <?php echo $result; ?></label><br />
      <BR />
  </div>
	
	
	</div>
  
  
  </div>
  
  
  
  
  
  
</div>
<div class="footer" style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;">copyright © tameraplazainn 2011 - 2012 All Rights reserved</div>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
</body>
</html>
