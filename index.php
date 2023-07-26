<?php
$utm_tracking_info = '';
if(isset($_GET['utm_source']) && $_GET['utm_source']!=''){ $utm_tracking_info .= ' || utm_source='.$_GET['utm_source'];}
if(isset($_GET['utm_campaign']) && $_GET['utm_campaign']!=''){ $utm_tracking_info .= ' || utm_campaign='.$_GET['utm_campaign'];}
if(isset($_GET['utm_medium']) && $_GET['utm_medium']!=''){ $utm_tracking_info .= ' || utm_medium='.$_GET['utm_medium'];}
if(isset($_GET['gclid']) && $_GET['gclid']!=''){ $utm_tracking_info .= ' || gclid='.$_GET['gclid'];}
if(isset($_GET['fbclid']) && $_GET['fbclid']!=''){ $utm_tracking_info .= ' || fbclid='.$_GET['fbclid'];}

$mobielCheck = checkheader();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Tri-GO Cabs</title>
<meta name="description" content="Tri-GO Service">
<meta name="keywords" content="Tri-GO Service">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/prettyPhoto.css">
<link rel="stylesheet" href="css/style7.css" />
<link rel="stylesheet" href="css/color-green14.css" />
<script src="js/modernizr.custom.js"></script>
<link rel="shortcut icon" href="/images/trigo-logo1.png">
<style>
html {
  scroll-behavior: smooth;
}
#slides{

  background:rgb(21 13 25);
}
#home{
  position: sticky;
  top:0;
}
.submit.right{
    position: absolute !important;
    width:100%;
    padding:0.5em 0 !important;
  }
  /*.divp{
    width:68% !important;
    height:100px !important;
  }*/

  #sub-submit{
    padding-top:1.4em !important;
  }
  .register p{
    font-size:30px; margin:0; font-weight:900;line-height:normal;
  }
  .bmobile{display: none;}
  .bdesktop{display: block;}
@media screen and (min-width:320px) and (max-width:768px){
  .bmobile{display: block;}
  .bdesktop{display: none;}
  .register p{
    font-size:24px; margin:0; font-weight:900;line-height:normal;
  }
  .submit.right{
    position: relative !important;
    width:100%
  }
  #sub-submit{
    padding:1em 0 !important;
  }
  #sub-submit br{
    display:none !important;
  }
  /*.divp{
    width:100% !important;
    height:130px !important;
  }*/
  #holisticLogo{
    width:50%;
  }
  .day2{
    right:-34px !important;
  }
  .day1{
    left:10px !important;
  }
  .day3{
    left:10px !important;
  }
  .hideIt{
    display:none;
  }
  #home{
  position: absolute;
  
}
.register{
  padding-top:0px !important;
}
#nonslides img{
  margin-top:100px;
}
 #travelInfo{
  margin-top:125%;
 }
.info-box{
  bottom:56%!important;
}
header .logo{
  width:90% !important;
}
#home .container .row .col-md-9 {
  width: 58% !important;
position: absolute  !important;
right: 0 !important;
}
.navbar-default .navbar-collapse{
  background:white !important;
}


.day .dayNum{
  left:4% !important;
}
.tube{
  top:16em !important;
}
.line{
    top:20em !important;
  }
/*#hidCon {
  height:365px;
  padding-top:8em !important;
}*/

#contact input[type=submit] {
font-size:13px  !important;
width:100% !important;
padding:1em;
}
footer .text-right{
margin-top:0 !important;
}
.BGdark{
  top:77% !important;
}
footer.BGdark.opaque {
  top: 67% !important;
}
}


@media screen and (min-width:1400px){
  /* .day{
    height:885px !important;
    
  } */
  .day .right.placeImg{
    height:100% !important;
  }
  
  .day .left.placeImg{
    height:100% !important;
  }
  .day .left.placeImg img,
  .day .right.placeImg img{
    height:100%;
    width:100%;
  }
  /* .line{
    top:30em !important;
  } */
  .day .right.placeInfo
 {
    padding: 2.5em 2.65em 2em 4.5em !important;
    height:100% !important;

  }
  .day .left.placeInfo{
    padding: 2.5em 2.65em 2em 2.5em !important;
    height:100% !important;
  }
 

}
@media screen and (min-width:2000px){
  .day .left.placeInfo p,
  .day .right.placeInfo p{
    font-size:23px !important;
  }
}
@media screen and (min-width:2500px){
  .images_div img{
    width:160px !important;
    margin:20px !important;
  }
  .day .left.placeInfo p,
  .day .right.placeInfo p{
    font-size:30px !important;
  }
  .day .left.placeInfo h2,
  .day .right.placeInfo h2{
    font-size:4.14em !important;
  }
  .day .left.placeInfo .btn-lg,
  .day .right.placeInfo .btn-lg{
    font-size:2.34em !important;
  }
}
@media screen and (min-width:3800px){
  .images_div img{
    width:200px !important;
    margin:60px !important;
  }
  .day .left.placeInfo p,
  .day .right.placeInfo p{
    font-size:36px !important;
  }
  .day .left.placeInfo h2,
  .day .right.placeInfo h2{
    font-size:6.14em !important;
  }
  .day .left.placeInfo .btn-lg,
  .day .right.placeInfo .btn-lg{
    font-size:3.34em !important;
  }
}
/* For 1366 Resolution Road line adjustment*/  
@media only screen     /* 14inch */
and (min-width: 1030px)   
and (max-width: 1400px) 
{
  .line{top: 365px;}
.tube{top:19em !important;}
}


@media only screen   /* 15inch */
and (min-width: 1400px)  
/* 1366px */
{ .line{top: 36em !important;}
.tube{top:31em !important;}  
#car{margin-top:40px !important;}
}

.download-btn-img span a img:hover{transform: scale(1.1) !important;}

</style>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MHLRBLW');</script>
<!-- End Google Tag Manager -->
</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHLRBLW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->  
<div id="nonslides" class="">
<img width="100%" src="images/user-lp-banner.png" alt="Tri-GO" class="bdesktop">
  <img width=100% src="images/User (1).png" alt="Tri-GO" class="bmobile" />
  <!-- <div class="texture"></div> -->
  
    <?php if($mobielCheck==1){ //mobile view section start ?>
    <div class="info-box abs">
        <div class="container">
          <div class="col-md-10 col-sm-12 counter wow fadeInUp" data-wow-duration="0.50s" data-wow-delay="0.50s">
              <!-- <div class="date BGdark"><img style="top:-90px; " src="images/Tri-GO-creatives.png"></div> -->
             <div class="register" style="padding-top:10px;"><p style =" font-family: 'Quicksand','Poppins', sans-serif;">More Than Just a Ride<br><span>Choose Best Fare, Always!</span></p></div>
              <div class="clear"></div>
          </div>
          <div class="col-md-2 col-sm-12 subscribe wow fadeInUp" data-wow-duration="0.50s" data-wow-delay="0.75s" style="padding-left:0">
            <div class="BGlight">
                  <div class="form-row"  style="background:white;" method="post" width="100%">
                    <!--<div class="divp" style="display:flex;flex-direction:column;">
                      <p><span style="text-decoration:line-through;text-decoration-thickness:2px;font-size:20px;">₹1000</span> <span style="font-size:30px;text-align:center;text-decoration:none !important;text-decoration-thickness:0">  &nbsp;₹750 <span style="color:#74CC01 !important;font-size:30px;">&#10003;</span></span></p>
                      <p class="topheadercall">For First 1000 Customers In January</p>
                    </div>-->
                    <div class="submit right" style="text-align:center;top:0;right:0;background-color:#203459 !important;">
                      <a style="width:100%;margin:0;background-color: #203459 !important;" href="#contact"  id="sub-submit" name="sub-submit" class="btn">Know<br/>More</a>
                    </div>
                  </div>
            </div> 
         </div>
        </div>
    </div>
    <?php } else { //desktop view section start ?>
    <div class="info-box abs">
        <div class="container">
          <div class="col-md-10 col-sm-12 counter wow fadeInUp" data-wow-duration="0.50s" data-wow-delay="0.50s">
              <div class="date BGdark"><img style="top:-90px; " src="images/Tri-Go-creatives-v1.png"></div>
             <div class="register" style="padding-top:10px;"><p style =" font-family: 'Quicksand','Poppins', sans-serif;">More Than Just a Ride<br><span>Choose Best Fare, Always!</span></p></div>
              <div class="clear"></div>
          </div>
          <div class="col-md-2 col-sm-12 subscribe wow fadeInUp" data-wow-duration="0.50s" data-wow-delay="0.75s" style="padding-left:0">
            <div class="BGlight">
                  <div class="form-row"  style="background:white;" method="post" width="100%">
                    <!--<div class="divp" style="display:flex;flex-direction:column;">
                      <p><span style="text-decoration:line-through;text-decoration-thickness:2px;font-size:20px;">₹1000</span> <span style="font-size:30px;text-align:center;text-decoration:none !important;text-decoration-thickness:0">  &nbsp;₹750 <span style="color:#74CC01 !important;font-size:30px;">&#10003;</span></span></p>
                      <p class="topheadercall">For First 1000 Customers In January</p>
                    </div>-->
                    <div class="submit right" style="text-align:center;top:0;right:0;background-color:#203459 !important;">
                      <a style="width:100%;margin:0;background-color: #203459 !important;" href="#contact"  id="sub-submit" name="sub-submit" class="btn">Know<br/>More</a>
                    </div>
                  </div>
            </div> 
         </div>
        </div>
    </div>
    <?php } //desktop view section end ?>
</div>
  
    <header id="home" >
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-12 col-xs-12 logo">
             <a title="company Logo"><img class="img-responsive" src="images/trigo-logo2.png" alt="WMI"></a>
          </div>
          <div class="col-md-9 col-sm-12 col-xs-12 rightnav">
            <nav class="navbar navbar-default">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
            

              <div class="collapse navbar-collapse" id="menu">
              
                 <ul class="nav navbar-nav">
                    <li class="menu-font-size:21px" style="font-size: 17px;"><a href="#whyus" title="Why Us">Pricing</a></li>
                    <li class="menu-font-size:21px"style="font-size: 17px;"><a href="#journey" title="Journey">On Time</a></li>
                    <li class="menu-font-size:21px" style="font-size: 17px;"><a href="#learning" title="Learning">Freedom to Choose</a></li>
                    <li class="menu-font-size:21px" style="font-size: 17px;"><a href="#career" title="Careers">No Surcharges</a></li>
                    <li class="menu-font-size:21px" style="font-size: 17px;"><a href="#masterclasses" title="Masterclasses">Our USP</a></li>
                 </ul>
                  
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>

<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="item active"><img src="images/Banner_010.jpg" alt="wmi" style="width:100%;"></div>
  </div>
</div> -->


<section id="travelInfo" style="padding: 5.35em 0 2.35em 0; background:#ffffff;" class="page-block BGlight destination">
  <div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="0.50s" data-wow-delay="0.50s">
            <h1>Why Choose <br>Tri-GO cab<small></small></h1>
      <p style="font-size:16px;font-weight:strong;"> <b>Empowering the Next Cab service</b></p>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="0.50s" data-wow-delay="0.50s">
                 <p class="">
                  <!-- Tri-GO is committed to providing you with a cab service that is transparent, reliable, and tailored to your needs. Experience the difference with Tri-GO and enjoy the convenience of transparent pricing, no hidden charges, reliable and timely service, the freedom to choose your vehicle, and the opportunity to negotiate with the driver. Book your ride today and embark on a journey that puts your satisfaction and convenience first. -->
                  Switch to Tri-GO for a transparent, reliable, and customized cab service. Enjoy transparent pricing, timely rides, vehicle options, fare negotiation, and dedicated support. Experience a convenient and satisfying travel experience tailored to your needs. Book your Tri-GO cab today and discover the difference in service quality. Trust Tri-GO for a seamless and enjoyable ride experience that prioritizes your satisfaction. Join the growing community of satisfied customers who have chosen Tri-GO for their cab needs.
                </p>
        </div>
    
    <div class="clear"></div>

    <div class="additional-info" style="background-color: #fdbd01;">
    <div class="container wow fadeInUp" data-wow-duration="0.50s" data-wow-delay="0.50s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
            <div class="col-md-6 col-sm-12 col-xs-12 download-btn-img"  style="display: flex; justify-content: center;">
              <span style="padding: 0 0 2rem 0;">Android<br>
                <strong>Download Now</strong><br>
                <a href="#contact"><img src="images/play-store.png"style="text-align:center;transition: transform 0.3s;" alt="play-store"></a>
              </span>
              
              
             </div> 
             <div class="col-md-6 col-sm-12 col-xs-12 download-btn-img" style="display: flex; justify-content: center;">
              <span style="padding: 0 0 2rem 0;">
              iOS<br>
                <strong>Download Now</strong><br>
                <a href="#contact"><img src="images/app-store.png"style="text-align:center;transition: transform 0.3s;" alt="app-store"></a>
              </span>
              
              
            </div><div class="clear"></div>
          </div>
        </div>
       
    
    
     <div class="additional-info">
          <div class="container wow fadeInUp text-align-center" data-wow-duration="0.50s" data-wow-delay="0.50s">
           
          <div class="col-md-12 wow zoomIn" data-wow-duration="0.50s" data-wow-delay="0.50s" >
          <h1 class="text-center" style="font-weight: 900;font-size:3.14em !important;line-height:normal;"><span class="text-align-center">Unlike Other Cab Services…</span> Experience best and fare prices<span class="text-align-center">for both rider and driver with Tri-GO</span></h1>
            </div>
        
             <div class="clear"></div>
          </div>
        </div>

        <!-- <div class="additional-info">
          <div class="container wow fadeInUp text-align-center" data-wow-duration="0.50s" data-wow-delay="0.50s">
           
          <div class="col-md-12 wow zoomIn" data-wow-duration="0.50s" data-wow-delay="0.50s">
          <h1 class="text-center" style="font-weight: 900;font-size:3.14em !important;line-height:normal;"><span class="text-align-center">Schooling…</span>360&#176;Child Grooming</h1>
            </div> -->
        
      
             <div class="clear"></div>
          </div>
        </div>
    </div>
  </div>
</section>
<div id="hidCon" class="BGdark">
  <h4 class="text-center visible-xs">Subscribe for update</h4>
</div>

            </div>


<section id="itinarary" class="page-block BGprime" style="background-color: #203459;">
  <div class="container">
    <div class="row">
          <div class="col-md-12 wow zoomIn" data-wow-duration="0.50s" data-wow-delay="0.50s" > 
            <!-- style="margin-bottom: 7rem !important;"> -->
           <h1 class="text-center" style="font-weight:900; color:#fdbd01; line-height:normal;">Experience<span style="font-size:0.6em !important;margin: 30px 0;">Punctual and hassle-free cab service</span><small>Start your journey</small></h1>
            </div>
        </div>
  </div>
  
    <div class="tube tube2">
      <span class="start">START</span>
        <span class="end">END</span>
    </div>
    <div id="car"></div>
              
    <div class="itinarary" style=" padding-bottom:0;">
                
        <div id="whyus" class="day">
            <div class="left placeImg day1" >
                <img src="images/outdoor.jpg"  alt="Why Choose Us?">
            </div>
            <div class="right placeInfo">
                <div class="dayNum abs">1</div>
                <h2>Out-Station Trip<small></small></h2>
                <span></span>
                <p style="font-size:16px; margin:0.5em 0 0">
                Planning an outstation trip? Let Tri-GO, your city's trusted cab service company, handle all your travel needs. With us, there's no need to worry. We specialize in alleviating your travel concerns and ensuring a stress-free journey to your dream destination, all at an affordable price. Take advantage of our extensive fleet, offering a diverse range of vehicles from comfortable sedans to luxurious SUVs. Rest easy knowing that our highly skilled drivers will navigate the roads with expertise, allowing you to travel without any tension or worries. Remember, with Tri-GO, there's no need to chase alternatives – simply choose us for an exceptional travel experience.  Don't wait any longer — make your travel aspirations a reality and book your outstation cab with Tri-GO now. Your dream destination awaits!
                  </p>
                <br> 
                <div class="clear"></div>    
                <a href="#contact"  class="btn btn-primary btn-lg" id="Book Now" name="Book_Now" style="margin:0">Download Now</a>


      
            <div class="clear"></div>
                <div class="delight"></div>
            </div><div class="clear"></div>
        </div><div class="clear"></div>
        
        <div class="day" id="learning">
            <div class="left placeInfo">
                <div class="dayNum abs">2</div>
                <h2 style="margin-bottom:0.5em">Airport Cabs </h2>
                <p style="font-size:16px; margin:0em 0 0">
                Experience a seamless and comfortable airport transportation with Tri-GO, your reliable and affordable cab service provider. We understand the importance of hassle-free travel to and from the airport, which is why we prioritize punctuality, convenience, and comfort. Whether you're arriving or departing, our professional drivers are dedicated to assisting you every step of the way, ensuring a stress-free journey. Sit back, relax, and let Tri-GO take care of your airport transportation needs, including handling your luggage with care. Trust us to provide a reliable, comfortable, and affordable ride from start to finish. Book your airport cab with Tri-GO today and enjoy a worry-free travel experience.
                    </p>
              </br>
                 <!-- <ul>
                  <li>Four full-time and Three Online Batches</li>
                  <li>Track record of 100% + internships</li>
                  <li>15+ Masterclasses from industry stalwarts</li>
                  <li>20+ Offsite visits</li>
                  <li>100% Placement Record to the students who wanted to be placed</li>
                  <li>Trained students from across 25 cities in India and Abroad already</li>
                  <li>International Assignment with Wedding Sutra Engage</li>
                  <li>Practical exposure at 5+ Premium Wedding Destinations</li>
                </ul> -->
                <div class="clear"></div> </br>
                <a href="#contact"  class="btn btn-primary btn-lg" id="Book Now" name="Book_Now" style="margin:0">Download Now</a>


        <div class="clear"></div>
                <div class="delight"></div>
            </div>
            <div class="right placeImg day2" >
            <img src="images/airport.jpg"  alt="Journey">
            </div><div class="clear"></div>
        </div><div class="clear"></div>
        
        <div class="day" id="journey">
            <div class="left placeImg day3">
            <img src="images/late-night.png"  alt="Why Choose Us?">
            </div>
            <div class="right placeInfo">
                <div class="dayNum abs">3</div>
                <h2>Late-Night Cab Services</h2>
               <p style="font-size:16px; margin:0.5em 0 0">
               Experience peace of mind with Tri-GO's late-night cab services, where passenger safety is our top priority. We place special emphasis on ensuring the security of all passengers, particularly working females. Count on us to provide a reliable transportation option during the late hours, offering a secure journey that instills confidence. Our dedicated drivers undergo extensive training and are committed to creating a safe environment for every passenger. Rigorous security measures are in place to guarantee a protected travel experience, allowing working females to travel worry-free. Trust Tri-GO for your late-night travel needs, and enjoy a secure and dependable cab service tailored to your safety requirements.
                <br><br></p>
               <!-- <div class="images_div" style="width:100%">
                  <p style="font-size:20px; margin:0.5em 0 0em">Our Placement Partners</p>
                  <img src="images/itcmaurya.png" style="width:80px;"  alt="ITC Maurya">
                  <img src="images/themewaiver.png" style="width:80px;" alt="Theme Waiver">
                  <img src="images/fabindia.png" style="width:80px;"  alt="Fab India">
                  <img src="images/vivah.png" style="width:80px;"  alt="Vivah">
               </div> -->
              <div class="clear"></div>
              <br>
               <a href="#contact"  class="btn btn-primary btn-lg" id="Book Now" name="Book_Now" style="margin:0">Download Now</a>


        <div class="clear"></div>
                <div class="delight"></div>
            </div><div class="clear"></div>
        </div><div class="clear"></div>
        
        
     <div class="day day4" id="career">
            <div class="left placeInfo">
                <div class="dayNum abs">4</div>
                <h2>No Surcharges, No Hassles</h2>
                <p style="font-size:16px;  margin:0.5em 0 0">

                At Tri-GO, we believe in transparent pricing and hassle-free experiences. That's why we ensure that there are no hidden charges in our fares. With Tri-GO, what you see is what you get, allowing you to enjoy a seamless and stress-free cab service. Say goodbye to unexpected costs and hello to a convenient and worry-free journey.

                  </br></br></p>
                <!-- </br>
                 <ul>
                  <li>Chetan Vohra (Wedding Line)</li>
                  <li>Sushil Shamlal Wadhwa (Platinum World Group)</li>
                  <li>Nitin Arora (MD, Katalyst Entertainment Pvt Ltd)</li>
                  <li>Rituraj Khanna (Q Events)</li>
                  <li>Kunal Laungani (Chapter 2 Events)</li>
                  <li>Aakriti Anand (Silhouette Events)</li>
                </ul> -->
                <div class="clear"></div>
                <a href="#contact"  class="btn btn-primary btn-lg" id="Book Now" name="Book_Now" style="margin:0">Download Now</a>

           
                <div class="clear"></div>
                <div class="delight"></div>
            </div>
            <div class="right placeImg">
            <img src="images/4.jpg" alt="MasterClasses">
            </div><div class="clear"></div>
        </div><div class="clear"></div>
        
    </div>
<div class="line" ></div>


    <div class="clear"></div>
                <div class="delight"></div>
            </div><div class="clear"></div>
        </div><div class="clear"></div>
        
        
     <div class="day" id="masterclasses">
            <div class="right placeInfo">
                <div class="dayNum abs">5</div>
                <h2>Don't Chase. Just Choose.</h2></br>

                <p style="font-size:16px;  margin:0.5em 0 0">
                Experience the convenience of booking a ride and receiving multiple quotes from nearby drivers. With our platform, you have the freedom to choose the vehicle, driver, and fare that best aligns with your preferences. Say goodbye to time wasted on negotiations.
</br></br>
                </p>
                <div class="clear"></div> 
        <a href="#contact"  class="btn btn-primary btn-lg" id="Book Now" name="Book_Now" style="margin:0">Download Now</a>

           
                <div class="clear"></div>
                <div class="delight"></div>
            </div>
            <div class="left placeImg">
            <img src="images/cab-passenger.jpg" alt="Learing">
            </div><div class="clear"></div>
        </div><div class="clear"></div>
        
    </div>
    <div class="clear"></div>
                <div class="delight"></div>
            </div><div class="clear"></div>
        </div><div class="clear"></div>
        
        
     
     
</section>
<section class="family" style="background-color: #203459">
  <img src="images/with1.jpg" alt="Congratulations" />
</section>

<!-- <section class="page-block">
  <div class="container">
    <div class="row" style="margin-top: 6em">
                
        <h1 class="text-center wow zoomIn" data-wow-duration="0.50s" data-wow-delay="0.50s" style="margin-top: 2em">Locations</h1>
        <div class="col-md-12">        
      <div id="upcoming">
        <a><div class="item"><img src="images/school1.png" alt="WMI 3" style="height: 370px"/></div></a>
        <a><div class="item"><img src="images/school2.png" alt="WMI 4" style="height: 370px"/></div></a>
        <a><div class="item"><img src="images/school3.png" alt="WMI 5" style="height: 370px"/></div></a>
       <a><div class="item"><img src="images/slider/el8-1.webp" alt="WMI 6" /></div></a>
        <a><div class="item"><img src="images/slider/wed5.webp" alt="WMI 1" /></div></a>
        <a><div class="item"><img src="images/slider/el3-3.png" alt="WMI 2" /></div></a>
      </div>        
    </div>
    </div>
  </div>
</section> -->
<section id="about" class="page-block">
  <div class="container">
    <div class="row">
    
    <div class="row" style="margin-top: 4em">
     
       <h2 class="text-center wow zoomIn" style="    margin-bottom: 4rem !important; line-height:1em; font-weight: 900; font-size: 4.5em;">Why Switch To Tri-GO Cabs</h2>
          <!-- <ul class="list-inline social">
              <li><a href="https://www.facebook.com/AdionaTravels/" title="Folow me on Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/AdionaTravels" title="Folow me on Twitter" target="_blank" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com/company/adiona-travels" title="Folow me on Linkedin" target="_blank" target="_blank"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="https://www.instagram.com/adionatravels/" title="Folow me on Instagram" target="_blank" target="_blank"><i class="fa fa-instagram"></i></a></li> 
          </ul> -->
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="0.50s" data-wow-delay="0.50s">
        <!-- <p> Adiona, a concept that nurtures from the seed of it’s meaning -Roman Goddess of Safe Return is here to create a  better experience for people to live in and love life by doing things you haven’t done before. Adiona intends to run on the idea that envelopes expertise , services and customer centricity as its main inspiration. Our people have a passion for their locale and the willingness to always go the extra mile making it the most reliable travel services provider amongst the corporate sector in India. Adiona offers a unique approach, warm personalised services and above all, the execution of creative ideas of a team of explorers-at-heart we strive to enable authentic encounters that can provide lasting experiences . Adiona plans to be a travel company like no other, showing you the world like you've never seen it before. We know that you haven't been everywhere but it's on your list and we want to be at your service to let your idea of exploring the many facets of the world turn into the exact experience  as you imagined it to be !-->
        <!-- <ul style="list-style:none; font-size:19px">
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#f8bd45;"></i>Switch to Tri-GO and experience the difference with memorable journeys and unmatched peace of mind.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#f8bd45;"></i>Say goodbye to hidden charges and unreliable service - make the switch to Tri-GO today.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#f8bd45;"></i>Discover a new level of convenience with Tri-GO's reliable cab service.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#f8bd45;"></i>Switch to Tri-GO for transparent pricing and no more surprises on your bill.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#f8bd45;"></i>Trust Tri-GO's professional drivers for safe and comfortable rides - make the switch now.</li>
              </ul>   </div>
              <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="0.50s" data-wow-delay="0.50s">
        <ul style="list-style:none; font-size:19px">
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#f8bd45;"></i>Enjoy the freedom to choose the perfect vehicle for your needs - switch to Tri-GO.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#f8bd45;"></i>Count on Tri-GO's dedicated support for assistance whenever you need it.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#f8bd45;"></i>Switching to Tri-GO means saving time and money with efficient and affordable transportation.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#f8bd45;"></i>Experience the exceptional quality of Tri-GO's cab service - make the switch today.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#f8bd45;"></i>Join the satisfied customers who have already made the switch to Tri-GO - you won't be disappointed.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#f8bd45;"></i>Embrace a refreshing change and switch to Tri-GO for a truly joyful travel experience.</li>
          </ul> -->
          <ul style="list-style:none; font-size:19px">
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#fdbd01;"></i>Enjoy the best and fare prices for both drivers and riders with Tri-GO.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#fdbd01;"></i>Experience reliable and affordable rides that benefit both parties.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#fdbd01;"></i>Transparent pricing ensures a fair and trustworthy service for everyone.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#fdbd01;"></i>Choose Tri-GO for cost-effective transportation without compromising quality.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#fdbd01;"></i>Access a vast network of drivers for quick and convenient ride availability.</li>
              </ul>   </div>
              <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="0.50s" data-wow-delay="0.50s">
        <ul style="list-style:none; font-size:19px">
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#fdbd01;"></i>Trust in Tri-GO's commitment to driver satisfaction and fare compensation.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#fdbd01;"></i>Riders can enjoy competitive fares while supporting drivers' livelihoods.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#fdbd01;"></i>Enjoy a seamless and enjoyable travel experience with Tri-GO's efficient service.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#fdbd01;"></i>Join a community that values the well-being of both drivers and riders.</li>
              <li  style="font-size:19px"><i class="fa fa-check" style="color:#fdbd01;"></i>Benefit from Tri-GO's driver-friendly policies and incentives, ensuring a positive experience for everyone involved.</li>
          </ul>
        </div><div class="clear"></div> 


        
    </div>
  </div>
</section>

<section id="contact" class="">
  <div class="gradient dark" style="background:  #203459 !important;">
  <div class="container">
      <div class="row">
        <div class="col-md-12 wow zoomIn" data-wow-duration="0.50s" data-wow-delay="0.50s">
            <h1 style="font-size:3.00em;margin-bottom:0em;clear: both;color:#fdbd01;" class="text-center"><span style="display:inline;color: #ffffff;">Download</span> Now<small><br>dont chase. just choose.</small></h1>
            <iframe src="https://link.gocommercially.com/widget/form/FKNXCpPuyv6OByPBd7PN" style="width:100%;height:100%;border:none;border-radius:6px" id="inline-FKNXCpPuyv6OByPBd7PN" 
        data-layout="{'id':'INLINE'}"
        data-trigger-type="alwaysShow"
        data-trigger-value=""
        data-activation-type="alwaysActivated"
        data-activation-value=""
        data-deactivation-type="neverDeactivate"
        data-deactivation-value=""
        data-form-name="Tri-GO Cabs Car Version"
        data-height="450"
        data-layout-iframe-id="inline-FKNXCpPuyv6OByPBd7PN"
        data-form-id="FKNXCpPuyv6OByPBd7PN"
        title="Tri-GO Cabs Car Version">
        </iframe>
        <script src="https://link.gocommercially.com/js/form_embed.js"></script>
       
      </div>
  </div>

  <!-- <div class="row">
    <div class="col-" style="display: flex;justify-content: center;">
    <img src="images/play-store.png"style="text-align:center;" alt="play-store">
    <img src="images/app-store.png"style="text-align:center;margin-left: 20px;" alt="app-store">

      </div>
        </div>
  </div>
     -->
  <footer class="opaque">
    <div class="container"> 
        <div class="col-md-6 col-sm-12">
          <p>Copyright &copy; <?php echo date('Y');?> | All Rights Reserved | Tri-GO</p>
        </div>
        <div class="col-md-6 col-xs-12 text-right"><div id="sitecredit"></div></div>
    </div>
  </footer>
 <div class="imgfix" style="display:none;"><a href="#contact"><img src="images/getquote.png" alt="Get a quote" /></a></div>
</section>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Terms and Conditions</h4>
      </div>
  </div>
</div>


<a href="#top" class="top BGprime"><i class="fa fa-angle-up fa-lg"></i></a>
<script src="js/jquery.min.js"></script>
<!-- <script src="js/myjs.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script> 
<script src="js/wow.min.js"></script>
<script src="js/placeholders.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/master.js"></script>
<script src="https://play.fabulousmedia.in/sitecredit/sitecredit.js"></script>
<script>
  
              
  let nonslides=document.querySelector("#nonslides")
  let body=document.querySelector("body")
  let day=document.querySelectorAll(".day")
  let tube2=document.querySelector(".tube2")
  let line=document.querySelector(".line")
  let infoBox=document.querySelector(".info-box")
let menu=document.querySelector("#home")

 if(window.matchMedia('(min-width: 768px)').matches){
  nonslides.style.height=`${window.innerHeight-79}px`
  for(let i=0;i<5;i++){
    day[i].style.height=`${(body.clientWidth*32.4)/100}px`

  }
  line.style.height=`${tube2.clientHeight-214}px`
}
else{
infoBox.style.top=`${infoBox.clientWidth/100*126}px`
line.style.height=`${tube2.clientHeight-200}px`//254
}
  var controller = new ScrollMagic.Controller();
  var tube = $(".tube").outerHeight();
  var greyHgt = tube - 150;//150
  // if(window.matchMedia('(max-width: 760px)').matches){var greyHgt = tube - 170;}
  if(window.matchMedia('(max-width: 760px)').matches){var greyHgt = tube - 170;}
  var scene = new ScrollMagic.Scene({triggerElement: "#car", duration: greyHgt})

  .setPin("#car") 
  .addTo(controller); 
</script>
</body>
</html>
<?php
function checkheader(){  
        $useragent=$_SERVER['HTTP_USER_AGENT']; 
    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
    { 
      return 1;
    }else{
      return 0;
    }   
  }
?>