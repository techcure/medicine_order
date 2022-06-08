<?php
// Username is root
$user = 'root';
$password = '';

// Database name is contact
$database = 'medicine';

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
$sql = "SELECT * FROM get ORDER BY firstname  ";
$result = $mysqli->query($sql);	

?>
		

 Display data in tabular format
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>order details</title>
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
			background-color: #ADD8E6;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			
			border: 1px solid black;
			padding: 8px;
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
		<h1>ORDER DETAILS</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>FIRST NAME</th>
				<th> LASTNAME</th>
				<th>GENDER</th>
				<th>MEMBER ID</th>
				<th>ORDER DATE</th>
				<th>PRESCRIPTION</th>
				<th>ILLNESS</th>
				<th>FEVER TABLETS</th>
				<th>VOMIT TABLETS</th>
				<th>F MEDICINE LIST</th>
				<th>ULCER MEDICINE</th>
				<th>BOTTLE COUNT</th>
				<th>ULCER LIST</th>
				<th> INSTRUMENT QUANTITY</th>
				<th>INSTRUMENT LIST</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->

			<?php // LOOP TILL END OF DATA
				
		     	    while ($rows=$result->fetch_assoc())

			       {
			?>
			
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['firstname'];?></td>
				<td><?php echo $rows['lastname'];?></td>
				<td><?php echo $rows['gender'];?></td>
				<td><?php echo $rows['account'];?></td>
				<td><?php echo $rows['orderdate'];?></td>
				<td><?php echo $rows['filename'];?></td>
				<td><?php echo $rows['disease'];?></td>
				<td><?php echo $rows['ftablets'];?></td>
				<td><?php echo $rows['vtablets'];?></td>
				<td><?php echo $rows['instructions'];?></td>
				<td><?php echo $rows['UlcerMedicine'];?></td>
				<td><?php echo $rows['bcount'];?></td>
				<td><?php echo $rows['Notulmedi'];?></td>
				<td><?php echo $rows['Quantity'];?></td>
				<td><?php echo $rows['instrument'];?></td>	
			</tr>

			<?php

			       }	
			?>
		</table>
	</section>
   </body>
	</html>




