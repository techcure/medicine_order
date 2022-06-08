<?php
// Username is root
$user = 'root';
$password = '';

// Database name is contact
$database = 'contact';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,$password, $database);

				

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM details ORDER BY myQuery  ";
$result = $mysqli->query($sql);	

?>
		

 Display data in tabular format
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CONTACT US</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<html>
       <body>
	<section>
		<h1>Contact us</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>QUERY</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>PHONE NO</th>
				<th>MEMBER</th>
				<th>MESSEGE</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->

			<?php // LOOP TILL END OF DATA
				
		     	    while ($rows=$result->fetch_assoc())

			       {
			?>
			
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['myQuery'];?></td>
				<td><?php echo $rows['myName'];?></td>
				<td><?php echo $rows['myEmail'];?></td>
				<td><?php echo $rows['myPhone'];?></td>
				<td><?php echo $rows['member'];?></td>
				<td><?php echo $rows['mesg'];?></td>	
			</tr>

			<?php

			       }	
			?>
		</table>
	</section>
   </body>
	</html>


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
		if(mysqli_query( $mysqli, $sql)){
			echo "<h3></h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>


