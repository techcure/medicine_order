<!DOCTYPE html>
<html>
<head>
<title style="color:blue;">About us</title>
</head>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<body>
<div style="background-color:yellow;color:red;padding:2px"> About us </div>
<p style="color:blue;">VKV Medicines aims to deliver high quality medicies to all the customers at the right time for saving their valuable life.We offer premium and the largest range of original health and fitness products across various categories and leading brands. We dedicate this portal to all those people who are keen to purchase healthcare products online.

The aim is to supply cheaper products to everybody who has access to the internet and deliver those products to their door. Through harnessing the power of the internet and supplying you directly, this website will save up to 75% off the cost of many well known products found in your local Medical Shop.

We aim at covering various healthcare categories comprehensively which include –Diabetes,Nutrition,Sports and fitness,Body Building, Beauty care and Personel Care Produts,Mother and Baby Care and Health Devices. We enjoy comprehensive understanding of the shopper’s needs and make our best efforts to cater them with an extensive choice of both Indian and globalbrands

Offering a superior buying experience, we endow our esteemed customers with the best prices in market. we strive to achieve the highest level of customer satisfaction. Equipped with a well-informed team, using state of the art E-commerce platform, and prompt customer support system, we aim to offer our customers with unparalleled services.

We proudly manage our own warehousing operations that facilitate us to meet the daily orders of our customers and attain fastest shipping. We believe in adding new selections for our customers and making things easier to compare, find and discover varied products via our services.

online medical store offers a variety of key services includingayurvedic herbal  pharmacy and over-the-counter medicines, vitamins and health supplements, family planning , ayurvedic herbal beauty cosmetic products,  ayurvedic herbal medicine ,toiletries, electrical items and baby care products.

The service is supervised by fully qualified pharmacists who are available to discuss symptoms and issues about medical problems in a confidential environment through email and oversee all medicinal purchases.

 

So, make a move and Happy Shopping !!!! <br>
<br>
We're working to turn our passion for product into a booming online store. We hope you enjoy our products as much as we enjoy offering them to you.<br><br>

Sincerely,<br>

<b>Team VKV Medicines</b></p><h2 style="color:red;text-align:center"><i>-- Stay home.. stay safe 😉😇--</i></h2>
<p style="color:orange"><b>Live Long Live Healthy!</b></p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="med - 8.jpg" style="width:50%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="med-1.jpg" style="width:50%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="med - 5.jpg" style="width:50%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


</body>
</html>


