
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>HTML FORM</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css" />
  <link rel="stylesheet" type="text/css" href="css/mycss.css" />
    <style type="text/css">
  body {
    color: white;
    background-color:grey; }
  img {
     border: 5px solid #555;
   }
  </style>

</head>

<body>
<script type="text/javascript">
function alertUser(msg) {
alert(msg);
}
</script>
</head>
<body onload="alertUser('Hello welcome!')">
<div style="text-align:center;padding:10px;">
<h1 style="color:white;">Welcome to our site</h1>
</div>

<h3>MEDICINE ORDER</h3>
<p><i>This Online Medicine ordering system lead to the efficiency of medicine businesses can be increased and the amount of time and effort spent can be reduced in dealing with medicine deliveries at home. This system is designed on elderly, person with disability, lactating mother and chronically ill patients that are not able to go in the pharmacy.They will just have an access through online delivery of medicine.An online pharmacy, internet pharmacy, or mail-order pharmacy is a pharmacy that operates over the Internet and sends orders to customers through mail, shipping companies, or online pharmacy web portal.</i></p>
<BR/>
<BR/>
<BR/>
<fieldset>
	<center>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="med - 8.jpg" style="width:60%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="med-1.jpg" style="width:60%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="med - 6.jpg" style="width:60%">
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
	</center>

</body>

<body>
<form  name="attach_details" method="post" action= "attach.php">

          <legend><h3>Personal Information</h3></legend>

         <b>First name:</b>
		 <input type = "text" name = "firstname" />
         <br>
         <b>Last name:</b>
		 <input type = "text" name = "lastname" />
		 <br>
		 <BR/>
		<b> Gender:</b>
		 <BR/>
         <input type="radio" name="gender" value="male"> Male
		 <br>
         <input type="radio" name="gender" value="female"> Female
         <br>
		 <BR/>
		 <b>Member Id:</b>
		 <input type="numeric" name="account" /><br />
        <br>
         
        <b> Date of order:
	      <input type="date" name="orderdate" />



<p>Click on the "Choose File" button to upload a prescription:</p>

  <input type="file" id="myFile" name="filename">



</body>

		  
         </fieldset>

        
        <hr />
        <table>
          <tr>
		<h3>Extra deliver charges for ordered medicines</h3>
            <td><ul><li>Upto 750 </li></ul></td>
            <td>-- Free delivery</td>
          </tr>
          <tr>
            <td><ul><li>From 751 - 2500</li></ul></td>
            <td>-- 10 per Km</td>
          </tr>
          <tr>
            <td><ul><li>Above 2500</li></ul></td>
            <td>-- 20 per Km</td>
          </tr>
        </table>
        
      </div>
      <div>
        <fieldset>
		<legend><h3>Select the Ailment</h3> </legend>
           <label for="Illness name">Choose your illness:</label>
          <select name="disease" id="Select the Ailment">

             <option value="No illness">No illness </option>
            <option value="Fever">Fever </option>
            <option value="Headache">Headache </option>
            <option value="Diarrohea">Diarrohea </option>
            <option value="Vomitting">Vomitting</option>
          </select>
        
        </fieldset>
        <fieldset>
          <legend><h3>Available Fever Tablets</h3></legend>
          <input type="radio" name="ftablets" value="Paracetamol - 250 mg" />Paracetamol - 250 mg
          <input type="radio" name="ftablets" value="Paracetamol - 500 mg" />Paracetamol - 500 mg
          <input type="radio" name="ftablets" value="Dolo - 650 mg" />Dolo - 650 mg
        </fieldset>
        <fieldset>
          <legend><h3>Available Anti - Vomitting Tablets</h3></legend>
          <input type="radio" name="vtablets" value="Zofran" />Zofran
          <input type="radio" name="vtablets" value="Attivan" />Attivan
          <input type="radio" name="vtablets" value="Holdol" />Holdol
        </fieldset>
        <fieldset>
          <legend><h3>If medicine needed is not in the list , please describe them here</h3></legend>
          <textarea name="instructions" rows="3" cols="42"></textarea>
       </fieldset>
         <table>
          <tr>
		  
		  
		<h4><b>Ulcer Medicines Price List</b></h4>
            <td><ul><li>Digene</li></ul></td>
            <td>-- 240</td>
          </tr>
          <tr>
            <td><ul><li>Carafate</li></ul></td>
            <td>-- 90</td>
          </tr>
          <tr>
            <td><ul><li>Pepcid</li></ul></td>
            <td>-- 120</td>
          </tr>
          <tr>
        </table>
      </div>
      <div>
	  <BR/>
        <fieldset>
		<legend>Ulcer Medicine </legend>
               <label for="Ulcer">Choose medicine:</label>

          <select name="UlcerMedicine" id="Ulcer">
             <option value="None">None</option>	
            <option value="Digene">Digene</option>
            <option value="Carafate">Carafate</option>
            <option value="Pepcid">Pepcid</option>
           </fieldset>
          </select>
		  </div>
		  <fieldset>
          <legend>Select the count of tonic bottles </legend>
          <input type="radio" name="bcount" value="1" />1
          <input type="radio" name="bcount" value="2" />2
          <input type="radio" name="bcount" value="3" />3
        </fieldset>
		  
          
      </div>
    </div>
	 <fieldset>
          <legend>If medicine needed is not in the list , please describe them here</legend>
          <textarea name="Notulmedi" rows="3" cols="42"></textarea>
       </fieldset>
	   
	    <table>
          <tr>
		  
		  
		<h4>Measuring instruments</h4>
            <td><ul><li>Digital thermometer</li></ul></td>
            <td>-- 500</td>
          </tr>
          <tr>
            <td><ul><li>Pulse Oximeter</li></ul></td>
            <td>-- 1200</td>
          </tr>
          <tr>
            <td><ul><li>Diabetic Analyser</li></ul></td>
            <td>-- 1400</td>
          </tr>
          <tr>
 
        </table>
      </div>
      
	  <BR/>
	 
        <fieldset>
		<legend>Instrument quantity </legend>
             <label for="Instrument" >Choose Quantity:</label>
          <select name="Quantity" id="Instrument">

            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
           </fieldset>
          </select>
 </div>
 </div>
          <div>
          <br> 
          <legend>If instrument needed is not in the list , please describe them here</legend>
          <textarea name="instrument" rows="3" cols="42"></textarea>
          </div>
	  </fieldset>
	   	<div><br>
		
		<button id="order" onclick="ordered()" value="submit"><b>PLACE YOUR ORDER</b></button>
 
                <button type="reset" id="reset" value="reset" /><b>Reset</b></button>
 <script>
                     function ordered(){
                         alert("your order has been placed");
                     }
                  </script>                  
		
</div>
 </form>
 <H4 style="color:black;">Today</H4>
 <p id="date" </p>
<!-- Sign and date the page, ! -->
<script>
  var d=new Date();
  document.getElementById("date").innerHTML=d;
</script>
  
<div style="color:blue;text-align:center;"><br><br> <b><i>Thank You ..Visit again<b><i></div>
</body>

</html>