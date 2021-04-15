<?php
if (isset($_POST['submit'])) {

$to = "blessysunnyn@gmail.com";
$subject = "CONTACT FORM FROM THRISANGUHAVEN";
$txt = "NAME : ".$_POST['name']. "\r\n" .
"EMAIL : ".$_POST['email']. "\r\n" .
"PHONE : ".$_POST['phone']. "\r\n" .
"SUBJECT : ".$_POST['subject']. "\r\n" .
"MESSAGE : ".$_POST['message'];


   $headers = "From: thrisanguhaven.com";

   if(mail($to,$subject,$txt,$headers))
  {
    $msg="Your Informations was sent successfully. Thanks.";
   }
   else
   {
    $msg="Some error occured try again later";
   
}
} 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>A2Z</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
      <?php include 'includes/header.php';?>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/3.jpg)">
    	<div class="auto-container">
        	<h2>Contact us</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Form Column-->
            	<div class="form-column col-md-8 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<!--Sec Title-->
                        <div class="sec-title">
                        	<h2>GET IN TOUCH</h2>
                            <div class="separator"></div>
                            <div class="text">We are here to answer any question?? We look forward to hearing from you..</div>
                        </div>
                        
                        <!--Contact Form-->
                        <div class="contact-form">
                            <form action="#formsectn" method="post" enctype="multipart/form-data">
  <div class='col-md-12 col-sm-12 col-xs-12 contactsec4 nopaddingmob' id='formsectn'>
    
      <div class='col-md-12 col-sm-12 col-xs-12 '>
      <p class='contact2head'>SEND US MESSAGE</p>
    </div>
      <div class='col-md-6 col-sm-12 col-xs-12 '>
        <input type="text" name="name" placeholder="NAME" class='contactForminput' id='funame'>
        <div class='formerror' id='error_funame'></div>
      </div>
      <div class='col-md-6 col-sm-12 col-xs-12 '>
        <input type="email" name="email" placeholder="EMAIL" class='contactForminput' id='emailid'>
         <div class='formerror' id='error_emailid'></div>
      </div>
      <div class='col-md-6 col-sm-12 col-xs-12 '>
        <input type="text" name="phone" placeholder="PHONE" class='contactForminput' id="phumber">
         <div class='formerror' id='error_phnumber'></div>
      </div>
      <div class='col-md-6 col-sm-12 col-xs-12 '>
        <input type="text" name="subject" placeholder="SUBJECT" class='contactForminput' id="contactid">
        <div></div>
      </div>
      <div class='col-md-12 col-sm-12 col-xs-12'>
        <textarea class='contacttextarea' name="message" placeholder="MESSAGE"></textarea>
      </div>
      <div class='col-md-12 col-sm-12 col-xs-12 '>
         <button class='quesbtn top20' style='float: right;' name="submit" id="submit" onclick="return validateForm()">SEND ENQUIRY</button>
         <div class='col-md-12 col-sm-12 col-xs-12 ' style="padding-left: 5%;padding-right: 5%;padding-top: 5%;color: #0aa650;">
                <?php if(isset($msg)){echo $msg ;} ?>
            </div>
      </div>
    
     
  </div>
</form>
                        </div><!--End Contact Form-->
                        
                    </div>
                </div>
                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-12 col-xs-12">
                	<!--Info Block-->
                	<div class="info-block">
                    	<div class="inner">
                        	<div class="icon-box"><span class="icon flaticon-location-pin"></span></div>
                        	<h3>VISIT us</h3>
                            <div class="text">Mattancherry Halt, Kochi CPSA Building , CIFT Junction , W. Island Kochi Pin- 682029</div>
                        </div>
                    </div>
                    
                    <!--Info Block-->
                	<div class="info-block">
                    	<div class="inner">
                        	<div class="icon-box"><span class="icon flaticon-technology-3"></span></div>
                        	<h3>CALL US</h3>
                            <div class="text">Phone: +91 8590085591<br> Phone: +91 9605885591</div>
                        </div>
                    </div>
                    
                    <!--Info Block-->
                	<div class="info-block">
                    	<div class="inner">
                        	<div class="icon-box"><span class="icon flaticon-e-mail-envelope"></span></div>
                        	<h3>MAIL US</h3>
                            <div class="text">mail@a2zinstituteofheavyequipments.com
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!--Map Section-->
            <section class="map-section">
                <div class="map-outer">
        
                    <!--Map Canvas-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.941303466747!2d76.2677493147937!3d9.938841992893115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b086d7d5cb23103%3A0x6b82f0b133958323!2sA2Z%20Driving%20School%2C%20Heavy%20Equipments%20Institute%20%26%20Pollution%20Testing%20Centre!5e0!3m2!1sen!2sin!4v1618280147614!5m2!1sen!2sin" class="mapsize" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
                </div>
            </section>
            
        </div>
    </section>
    <!--End Contact Section-->
    
   <!--Main Footer-->
<?php include 'includes/footer.php';?>
<!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>

<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

<script>
  function validateForm()
    {
      var validate = true;
       if(document.getElementById("funame").value == "")
      {  
         document.getElementById("error_funame").innerHTML="Name field is required";
         validate   = false;
      }
      else
      {
         document.getElementById("error_funame").innerHTML="";
      }
       if(document.getElementById("emailid").value == "")
      {  
         document.getElementById("error_emailid").innerHTML="Email ID is required";
         validate   = false;
      }
      else
      {
         document.getElementById("error_emailid").innerHTML="";
      }
      if(document.getElementById("phumber").value == "")
      {  
         document.getElementById("error_phnumber").innerHTML="Phone number is required";
         validate   = false;
      }
      else
      {
         document.getElementById("error_emailid").innerHTML="";
      }
      return validate;
    }

</script>

</body>
</html>