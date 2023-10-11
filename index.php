<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!------------------------SCROLL TO TOP - Made by ANUPESH KUMAR VERMA - HACKTOBER FEST 2022------------------------>

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
	rel="stylesheet"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
	rel="stylesheet"/>

	<!-- MDB -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
	rel="stylesheet"/>

	<!-- MDB -->
	<script	type="text/javascript" 	src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js" ></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tameraplazainn</title>
<link rel="icon" href="logopreview.png" type="image" />
<link rel="shortcut icon" href="logopreview.png" type="image" />
<script src="js/jquery-1.2.1.pack.js" type="text/javascript"></script>
	<script src="js/jquery-easing.1.2.pack.js" type="text/javascript"></script>
	<script src="js/jquery-easing-compatibility.1.2.pack.js" type="text/javascript"></script>
	<script src="js/coda-slider.1.1.1.pack.js" type="text/javascript"></script>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
		jQuery(window).bind("load", function() {
			jQuery("div#slider1").codaSlider()
			// jQuery("div#slider2").codaSlider()
			// etc, etc. Beware of cross-linking difficulties if using multiple sliders on one page.
		});
	</script>
	
	
<!--sa calendar-->
<script type="text/javascript" src="js/datepicker.js"></script>
        <link href="css/demo.css"       rel="stylesheet" type="text/css" />
        <link href="css/datepicker.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
//<![CDATA[

/*
        A "Reservation Date" example using two datePickers
        --------------------------------------------------

        * Functionality

        1. When the page loads:
                - We clear the value of the two inputs (to clear any values cached by the browser)
                - We set an "onchange" event handler on the startDate input to call the setReservationDates function
        2. When a start date is selected
                - We set the low range of the endDate datePicker to be the start date the user has just selected
                - If the endDate input already has a date stipulated and the date falls before the new start date then we clear the input's value

        * Caveats (aren't there always)

        - This demo has been written for dates that have NOT been split across three inputs

*/

function makeTwoChars(inp) {
        return String(inp).length < 2 ? "0" + inp : inp;
}

function initialiseInputs() {
        // Clear any old values from the inputs (that might be cached by the browser after a page reload)
        document.getElementById("sd").value = "";
        document.getElementById("ed").value = "";

        // Add the onchange event handler to the start date input
        datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
}

var initAttempts = 0;

function setReservationDates(e) {
        // Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
        // until they become available (a maximum of ten times in case something has gone horribly wrong)

        try {
                var sd = datePickerController.getDatePicker("sd");
                var ed = datePickerController.getDatePicker("ed");
        } catch (err) {
                if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
                return;
        }

        // Check the value of the input is a date of the correct format
        var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

        // If the input's value cannot be parsed as a valid date then return
        if(dt == 0) return;

        // At this stage we have a valid YYYYMMDD date

        // Grab the value set within the endDate input and parse it using the dateFormat method
        // N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
        var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

        // Set the low range of the second datePicker to be the date parsed from the first
        ed.setRangeLow( dt );
        
        // If theres a value already present within the end date input and it's smaller than the start date
        // then clear the end date value
        if(edv < dt) {
                document.getElementById("ed").value = "";
        }
}

function removeInputEvents() {
        // Remove the onchange event handler set within the function initialiseInputs
        datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
}

datePickerController.addEvent(window, 'load', initialiseInputs);
datePickerController.addEvent(window, 'unload', removeInputEvents);

//]]>
</script>

<!--sa error trapping-->
<script type="text/javascript">
function validateForm()
{
var x=document.forms["index"]["start"].value;
if (x==null || x=="")
  {
  alert("you must enter your check in Date(click the calendar icon)");
  return false;
  }
var y=document.forms["index"]["end"].value;
if (y==null || y=="")
  {
  alert("you must enter your check out Date(click the calendar icon)");
  return false;
  }
}
</script>
<script type="text/javascript">
function validateForm1()
{
var a=document.forms["contact"]["name"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter your Name");
  return false;
  }
var b=document.forms["contact"]["email"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter your Email");
  return false;
  }
var c=document.forms["contact"]["message"].value;
if (c==null || c=="")
  {
  alert("Pls. Enter your Message");
  return false;
  }
var atpos=b.indexOf("@");
var dotpos=b.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=b.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>

<!--sa galerry nga css-->
<link rel="stylesheet" href="css/style.css" />

<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<style type="text/css">
<!--
a img {border: none; }
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #000000;
	text-decoration: none;
}
a:hover {
	color: #006600;
	font-style:italic;
	text-decoration: none;
}
a:active {
	color: #006600;
	text-decoration: none;
}
.style1 {color: #000000}
-->
</style>
</head>

<body>
<div class="mainwrapper">
  <div class="leftother">
    <div class="l">
	<div style="margin-top: 225px; margin-right: 10px;">
	<a href="#1" class="cross-link">Home</a><br />
  <a href="#2" class="cross-link">Gallery</a><br />
  <a href="#3" class="cross-link">Contact Us</a><br />
  <a href="#4" class="cross-link">About Us</a><br />
  <a href="#5" class="cross-link">Room & Rates</a><br />
  <a href="#6" class="cross-link">Amenities</a><br />
  <a href="#7" class="cross-link">Site Map</a><br />
  <a href="admin_index.php">Login</a><br />
	</div>
	
	
	</div>
	<div class="r">
	
	
	
	
	<div class="right3">
		<div> class="container-fluid" </div>
    <div class="slider-wrap">
      <div id="slider1" class="csw">
        <div class="panelContainer">
          <div class="panel" title="Panel 1">
            <div class="wrapper">
              <div style="font-family:Arial, Helvetica, sans-serif;">
                <p><img src="newimages/IndexPic.png" alt="description" style="float: left; height: 210px;" /></p>
                <p align="center"><strong>Welcome                       to the Tamera                       Plaza Inn Website!</strong></p>
                <p align="justify">TAMERA PLAZA INN, &quot;Your Urban Bed and Breakfast&quot;, is here to give you a relaxing and  pleasurable stay while on a Business or Leisure Trip to the City of  Smiles&hellip;..Bacolod City.<br />
                  Thank you for choosingTamera Plaza Inn </p>
                <p align="center">&quot;Your Urban Bed &amp; Breakfast&quot;</p>
                <p align="justify"><br />
                </p>
              </div>
              <div>
                <div style="float: left; width: 374px; height: 224px; margin-top: -32px; margin-left: 7px;"><img src="img/featuerd.png" alt="featured"  style="margin-top: -3px;"/></div>
                <div style="float: right; margin-top: -46px; margin-left: 0px; margin-right: 17px; height: 240px;"><img src="img/FREEBREAKFAST.png" alt="featured" style="height: 236px; margin-left: 0px; margin-right: 14px;"/></div>
              </div>
            </div>
          </div>
          <div class="panel" title="Panel 2">
            <div class="wrapper">
              <ul class="hoverbox">
                <a href="img/1.JPG" rel="facebox"><img src="img/1.JPG" alt="description" /></a> <a href="img/2.JPG" rel="facebox"><img src="img/2.JPG" alt="description" /></a> <a href="img/3.JPG" rel="facebox"><img src="img/3.JPG" alt="description" /></a> <a href="img/4.JPG" rel="facebox"><img src="img/4.JPG" alt="description" /></a> <a href="img/5.JPG" rel="facebox"><img src="img/5.JPG" alt="description" /></a> <a href="img/6.JPG" rel="facebox"><img src="img/6.JPG" alt="description" /></a> <a href="img/7.JPG" rel="facebox"><img src="img/7.JPG" alt="description" /></a> <a href="img/8.JPG" rel="facebox"><img src="img/8.JPG" alt="description" /></a> <a href="img/9.JPG" rel="facebox"><img src="img/9.JPG" alt="description" /></a> <a href="img/10.JPG" rel="facebox"><img src="img/10.JPG" alt="description" /></a> <a href="img/11.JPG" rel="facebox"><img src="img/11.JPG" alt="description" /></a> <a href="img/12.JPG" rel="facebox"><img src="img/12.JPG" alt="description" /></a> <a href="img/13.JPG" rel="facebox"><img src="img/13.JPG" alt="description" /></a> <a href="img/14.JPG" rel="facebox"><img src="img/14.JPG" alt="description" /></a> <a href="img/15.JPG" rel="facebox"><img src="img/15.JPG" alt="description" /></a> <a href="img/16.JPG" rel="facebox"><img src="img/16.JPG" alt="description" /></a> <a href="img/17.JPG" rel="facebox"><img src="img/17.JPG" alt="description" /></a> <a href="img/18.JPG" rel="facebox"><img src="img/18.JPG" alt="description" /></a> <a href="img/19.JPG" rel="facebox"><img src="img/19.JPG" alt="description" /></a> <a href="img/20.JPG" rel="facebox"><img src="img/20.JPG" alt="description" /></a>
              </ul>
            </div>
          </div>
          <div class="panel" title="Panel 3">
            <div class="wrapper">
              <div class="contact">
                <div class="cleft">
                  <form action="savecomment.php" method="post" onsubmit="return validateForm1()" name="contact">
                    <p>Name:<br />
                        <input name="name" type="text" class="ed" />
                        <br />
                      Email Address:<br />
                      <input name="email" type="text" class="ed" />
                      <br />
                      Messages:<br />
                      <textarea name="message" rows="8" cols="23" class="ed"></textarea>
                      <br />
                      <input name="Input" type="submit" value="Submit" id="button1" />
                    </p>
                  </form>
                </div>
                <div class="cright">
                  <div align="center"><img src="photos/Untitled-1.png" alt="ssdsds" width="400" height="225" /></div>
                  <div align="justify"><br />
                    If you have any questions, comments or concerns about our services, please don't hesitate to contact us. We ensure that we will make your stay here an enjoyable and pleasant experience.<br />
                    <br />
                    Telephone: +63(034)432-1708<br />
                    Telefax: +63(034) 709-0886<br />
                    Mobile: 09226355035<br />
                    Address: #79 Lacson St., Bacolod City 6100 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel" title="Panel 4">
            <div class="wrapper">
              <div class="view1">
                <div align="justify"><img src="photos/flame.jpg" alt="roben and his wife" style="float:right;" /> &nbsp;<span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;On this small plot of land  in the middle of a bustling city called Bacolod,  in the Negros Occidental province of the Philippines, lies home to the  family of Jose and Teodula Tamera. Located on 79 Lacson Street, this place was  especially home to one of their sons, Robin Tamera.<br />
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After years of decadence in this little spot called home, Robin found himself  working in Ontario, Canada. It was there that the  inspiration to keep the property's memories alive was sparked. He had a desire  to keep this lot not only as a memorial keepsake for himself, siblings, and  relatives, but first and foremost as a reminder of his parents' love and care. 
                  Thus, after years of investment and construction, Robin's desire became a reality as The Tamera Plaza Inn became not only a place to stay, but a memorial and tribute to the Tamera Family.
                  
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Robin Tamera's concept was to open a very humble place for all to stay in Bacolod City, whether they were local or foreign visitors. He wanted a hotel that incorporated and adapted all of the finest amenities that other places in the world could offer.
                  
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tamera Plaza Inn prides itself on cleanliness and superb customer service. It's policy is to consistently provide quality service that meets or exceeds their customer's expectations. The staff of Tamera Plaza Inn strives to achieve excellence in the industry, and to continually improve the effectiveness of its' management system.
                  
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Therefore, to our guests, enjoy your stay, and if you need something that we missed, please let us know, and we will do our best to </span></div>
              </div>
            </div>
          </div>
          <div class="panel" title="Panel 5">
            <div class="wrapper">
              <ul id="slideshow">
                <li>
                  <h3>Superior Room (Triple Sharing)</h3>
			<span>https://tse3.mm.bing.net/th?id=OIP.qLVYj_t-HU2Yyx3v_wFgLwHaE6&pid=Api&P=0</span>
                  <span>photos/2.jpg</span>
                  <p>Our Superior Rooms are  furnished with either  two or three single beds. These rooms are additionally equipped with an individually controlled air-conditioning, television set with more than 70-channel cable, large mirrors in the room and bathroom, hot and cold shower as well as wired and wireless internet access.<br />
                    Rate : Php 1,500.00</p>
                  <a href="#"><img src="thumbnails/2.jpg" alt="Orange Fish" /></a> </li>
                <li>
                  <h3>Deluxe Room (Twin Sharing)</h3>
                  <span>photos/4.jpg</span>
                  <p>Our Deluxe Rooms are located on the second floor of the hotel and is furnished with two single beds. It is equipped with a television set with more than 70-channel cable, large mirrors in the room and bathroom, hot and cold shower and has complimentary wifi internet access.<br />
                    Rate : Php 1,300.00</p>
                  <img src="thumbnails/4.jpg" alt="Sea Turtle" /> </li>
                <li>
                  <h3>Standard Double Room</h3>
                  <span>photos/1.jpg</span>
                  <p>This room category is available in two set ups. The first is furnished with two single beds while the other has one queen size bed . This is a bigger room with comfort room, televion set and a wifi ready access.<br />
                    Rate : Php 1,100.00</p>
                  <a href="#"><img src="thumbnails/1.jpg" alt="Red Coral" /></a> </li>
                <li>
                  <h3>Standard Single Room</h3>
                  <span>photos/3.jpg</span>
                  <p>This room furnished with single bed and are additionally equipped with an individually controlled air-conditioning, television set with more than 70-channel cable, large mirrors in the room and bathroom, hot and cold shower as well as wired and wireless internet access.<br />
                    Rate : Php 950.00 </p>
                  <a href="#"><img src="thumbnails/3.jpg" alt="Coral Reef" /></a> </li>
                <li>
                  <h3>Blue Fish</h3>
                  <span>photos/3.jpg</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut urna. Mauris nulla. Donec nec mauris. Proin nulla dolor, bibendum et, dapibus in, euismod ut, felis.</p>
                  <img src="thumbnails/3.jpg" alt="Blue Fish" /> </li>
                <li> </li>
              </ul>
              <div id="wrapper">
                <div id="fullsize">
                  <div id="imgprev" class="imgnav" title="Previous Image"></div>
                  <div id="imglink"></div>
                  <div id="imgnext" class="imgnav" title="Next Image"></div>
                  <div id="image"></div>
                  <div id="information">
                    <h3></h3>
                    <p></p>
                  </div>
                </div>
                <div id="thumbnails">
                  <div id="slideleft" title="Slide Left"></div>
                  <div id="slidearea">
                    <div id="slider"></div>
                  </div>
                  <div id="slideright" title="Slide Right"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel" title="Panel 6">
            <div class="wrapper">
              <div class="amenitiesleft">
                <div align="justify">
                  <div style="padding-bottom: 10px; font-weight:bold; font-style:italic;">Here                       is a list of our Amenities:</div>
                  We offer a wide variety of amenities to make your stay here as comfortable as possible. Whether your stay here is for business or pleasure, we have all amenities covered for your needs. Please click on the icons for more information. </div>
              </div>
              <div class="amenitiesright" align="center"> <a rel="facebox" href="mainamenities.php?id=1"><img src="amenities/SmIconAC.png" border="0" /></a> <a rel="facebox" href="mainamenities.php?id=2"><img src="amenities/SmIconBkfst.png" border="0" style="padding-left: 30px; padding-right: 30px;" /></a> <a rel="facebox" href="mainamenities.php?id=3"><img src="amenities/SmIconCocktail.png" border="0" /></a><br />
                  <a rel="facebox" href="mainamenities.php?id=4"><img src="amenities/SmIconFunction.png" border="0" /></a> <a rel="facebox" href="mainamenities.php?id=5"><img src="amenities/SmIconGen.png" border="0" style="padding-left: 30px; padding-right: 30px;" /></a> <a rel="facebox" href="mainamenities.php?id=6"><img src="amenities/SmIconLaundry.png" border="0" /></a><br />
                  <a rel="facebox" href="mainamenities.php?id=7"><img src="amenities/SmIconLongDist.png" border="0" /></a> <a rel="facebox" href="mainamenities.php?id=8"><img src="amenities/SmIconRest.png" border="0" style="padding-left: 30px; padding-right: 30px;" /></a> <a rel="facebox" href="mainamenities.php?id=9"><img src="amenities/SmIconShower.png" border="0" /></a><br />
                <a rel="facebox" href="mainamenities.php?id=10"><img src="amenities/SmIconTaxi.png" border="0" /></a> <a rel="facebox" href="mainamenities.php?id=11"><img src="amenities/SmIconTv.png" border="0" style="padding-left: 30px; padding-right: 30px;" /></a> <a rel="facebox" href="mainamenities.php?id=12"><img src="amenities/SmIconWiFi.png" border="0" /></a> </div>
            </div>
          </div>
          <div class="panel" title="Panel 7">
            <div class="wrapper">
              <!--map-->
              <iframe width="680" height="428" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Tamera+plaza+inn+Bacolod+City,+Western+Visayas,+Philippines&amp;aq=&amp;sll=10.662189,122.948567&amp;sspn=0.004955,0.010568&amp;ie=UTF8&amp;hq=Tamera+plaza+inn&amp;hnear=Bacolod+City,+Negros+Occidental,+Western+Visayas,+Philippines&amp;ll=10.662658,122.947693&amp;spn=0.008819,0.006295&amp;output=embed"></iframe>
              <br />
              <small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Tamera+plaza+inn+Bacolod+City,+Western+Visayas,+Philippines&amp;aq=&amp;sll=10.662189,122.948567&amp;sspn=0.004955,0.010568&amp;ie=UTF8&amp;hq=Tamera+plaza+inn&amp;hnear=Bacolod+City,+Negros+Occidental,+Western+Visayas,+Philippines&amp;ll=10.662658,122.947693&amp;spn=0.008819,0.006295" style="color:#0000FF;text-align:left">View Larger Map</a></small>
              <!--end of map-->
            </div>
          </div>
        </div>
        <!-- .panelContainer -->
      </div>
      <!-- #slider1 -->
</div>
  </div>
	
	
	
	
	
	
	
	
	
	</div>
  </div>
  
  
  
  
  
  
  <div class="rightother">
  
  <div class="reservation">
	  <div align="center" style="padding-top: 7px; font-size:24px;"><strong>RESERVATION</strong></div>
	<div style="margin-top: 14px;">
	<form method="post" action="selectroom.php" name="index" onsubmit="return validateForm()">
  
      <label style="margin-left: 8px;">Start Date : </label>
     <input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="start" id="sd" value="" maxlength="10" readonly />
      <BR />
	 <label style="margin-left: 15px;">End Date : </label>
      <input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="end" id="ed" value="" maxlength="10" readonly />
	  <BR />
	  <label style="margin-left: 45px;">Adult : </label>
	  <select name="adult" class="ed" >
	    <option>1</option>
	    <option>2</option>
	    <option>3</option>
	  </select>
	  <BR />
	  <label style="margin-left: 44px;">Child : </label>
	  <select name="child" class="ed">
	    <option>0</option>
	    <option>1</option>
	    <option>2</option>
	  </select>
	  <BR />
	  <input name="" type="submit" value="Check Availability" id="button" />
  </form>
    <div align="center"><br />
      <a rel="facebox" href="modifyindex.php">Modify</a> / <a href="cancelindex.php">Cancel</a> Reservation   </div>
	</div>
	
	
	</div>
  
 </div>
  
  
  
  
  
  
</div>

<div class="footer" style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;">copyright © tameraplazainn 2011 - 2012 All Rights reserved</div>
<script type="text/javascript" src="compressed.js"></script>
<script type="text/javascript">
	$('slideshow').style.display='none';
	$('wrapper').style.display='block';
	var slideshow=new TINY.slideshow("slideshow");
	window.onload=function(){
		slideshow.auto=true;
		slideshow.speed=4;
		slideshow.link="linkhover";
		slideshow.info="information";
		slideshow.thumbs="slider";
		slideshow.left="slideleft";
		slideshow.right="slideright";
		slideshow.scrollSpeed=4;
		slideshow.spacing=4;
		slideshow.active="#fff";
		slideshow.init("slideshow","image","imgprev","imgnext","imglink");
	}
</script>
	<!------------------------SCROLL TO TOP - Made by ANUPESH KUMAR VERMA - HACKTOBER FEST 2022------------------------>

	<button type="button" class="btn btn-warning btn-xs" id="btn-back-to-top">
  		<i class="fas fa-arrow-circle-up"> T O P</i>
	</button>

	<style>
		#btn-back-to-top 
		{
		position: fixed;
		bottom: 80px;
		size: 10px;
		right: 10px;
		display: none;
		color: azure;
		}
	</style>

	<script>	
		//Get the button
		let mybutton = document.getElementById("btn-back-to-top");

		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function () {
		scrollFunction();
		};

		function scrollFunction() {
		if (
		document.body.scrollTop > 0 ||
		document.documentElement.scrollTop > 0
		) {
		mybutton.style.display = "block";
		} else {
		mybutton.style.display = "none";
		}
		}
		// When the user clicks on the button, scroll to the top of the document
		mybutton.addEventListener("click", backToTop);

		function backToTop() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
		}
	</script>
</body>
</html>
