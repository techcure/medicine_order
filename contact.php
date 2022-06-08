<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="Medi-order.css">
	<title>ContactUs</title>
</head>

<body>
	<div id="ContactUs">
		<h1>Contact Us</h1>
		<form name="contact_details" method="post" action= "insert1.php">
			<div class="form-shape">
				<label for="query">
				Type of Query	
				<select name="myQuery" id="query">	
					
				</label>
				
					<option value="none" selected>
						Select
					</option>
					<option value="order">
						Order related Issues
					</option>
					<option value="Site">
						Site related Issues
					</option>
					<option value="complaint">
						Complaint related Issues
					</option>
					<option value="others">
						Others
					</option>
				</select>
				 
			</div>
			<div class="form-shape">
				<label for="name">Name</label>
				<input type="text" name="myName"
					id="name"
					placeholder="Enter your Name">
			</div>
			<div class="form-shape">
				<label for="email">Email-Id</label>
				<input type="email" name="myEmail"
					id="email"
					placeholder="Enter your email">
			</div>
			<div class="form-shape">
				<label for="pho">Phone Number</label>
				<input type="phone" name="myPhone"
					id="pho"
					placeholder="Enter your Phone no">
			</div>
			<div id="radio">
				Are you a member of VKV Medi Ordering System:
				Yes <input type="radio" name="member" value="yes">
				No <input type="radio" name="member" value="no">
			</div>
			<div class="form-shape"><br>
				<label for="message">
					Ellaborate your query
				</label>
				<textarea name="mesg" id="message"
					cols="30" rows="10">
				</textarea>
			</div>
			<input type="submit" value="Submit">
			<input type="Reset" value="Reset">
</form>
                  <script>
                     function ordered(){
                         alert("your order has been placed");
                     }
                  </script>
		
		

	</div>

</body>

</html>

