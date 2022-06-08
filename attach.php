<!DOCTYPE html>
<html>

<head>
	<title>attach  page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => medicine
		$conn = mysqli_connect("localhost", "root", "", "medicine");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data
		@$firstname = $_REQUEST['firstname']; 
		@$lastname = $_REQUEST['lastname']; 
		@$gender = $_REQUEST['gender']; 
		@$account = $_REQUEST['account']; 
		@$orderdate= $_REQUEST['orderdate']; 
		@$filename = $_REQUEST['filename']; 
		 @$disease= $_REQUEST['disease'];
		@$ftablets= $_REQUEST['ftablets'];
		@$vtablets= $_REQUEST['vtablets'];
		@$instructions=$_REQUEST['instructions'];
		@$UlcerMedicine=$_REQUEST['UlcerMedicine'];
		@$bcount=$_REQUEST['bcount'];
		@$Notulmedi=$_REQUEST['Notulmedi'];
		@$Quantity=$_REQUEST['Quantity'];
		@$instrument=$_REQUEST['instrument'];
		
		// Performing insert query execution
		// here our table name is order
		$sql = "INSERT INTO get VALUES ( '$firstname','$lastname',
			'$gender','$account','$orderdate','$filename' ,'$disease' ,'$ftablets' ,'$vtablets' ,'$instructions' ,'$UlcerMedicine','$bcount' ,'$Notulmedi' ,'$Quantity' ,'$instrument')";
		
		if (mysqli_query($conn, $sql)){
			echo "<h3>Your order has been submitted successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";
		}  else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
