<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => contact
		$conn = mysqli_connect("localhost", "root", "", "contact");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data
		@$myQuery = $_REQUEST['myQuery'];
		@$myName = $_REQUEST['myName'];
		@$myEmail = $_REQUEST['myEmail'];
		@$myPhone = $_REQUEST['myPhone'];
		@$member  = $_REQUEST['member'];
		@$txtMessage = $_REQUEST['mesg'];

		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO details VALUES ( '$myQuery','$myName',
			'$myEmail','$myPhone','$member','$txtMessage')";
		
		if(mysqli_query($conn, $sql)){

    			echo "<h3>Your report has been submitted successfully."
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
