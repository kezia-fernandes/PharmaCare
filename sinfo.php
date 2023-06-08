<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'pharmacy';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT Code, Name, supplier.Sup_id, Sup_name, Tot_quantity FROM drugs, supplier, supplies";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
<style>  
body {
  font-family: Calibri, Helvetica, sans-serif; 
  background-image: linear-gradient(to right top, #0cf24c, #00ed6c, #00e684, #00e097, #0ad8a6, #31d4a0, #43cf9a, #50cb94, #60c87a, #75c45d, #8bbe3e, #a2b715);
	background-size: 400% 400%;
	height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
} 
</style>

<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
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

		/* The sidepanel menu */
.sidepanel {
  height: 250px; /* Specify a height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidepanel */
}

/* The sidepanel links */
.sidepanel a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidepanel a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidepanel .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style the button that is used to open the sidepanel */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}



	</style>
	<script>
	/* Set the width of the sidebar to 250px (show it) */
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>
	
</head>

<body>
	<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="homepage.html">HOME</a>
  <a href="customer.php">CUSTOMERS</a>
  <a href="employee.php">EMPLOYEES</a>
  <a href="suppliers.php">SUPPLIERS</a>
  <a href="newdrugs.php">DRUGS</a>
  <a href="purchases.php">PURCHASES</a>
  <a href="s.php">SUPPLIES</a>
  <a href="expired.php">EXPIRED DRUGS</a>
  <a href="reports.php">REPORTS</a>
  <a href="remaining.php">INVENTORY</a>
  <a href="loc.php">DRUG LOCATION</a>
  <a href="search.php">ADD NEW PURCHASES</a>
  <a href="supplierform.php">ADD NEW SUPPLIERS</a>
  <a href="drugsform.php">ADD NEW DRUGS</a>
  <a href="logout.php">LOGOUT</a>
</div>

<button class="openbtn" onclick="openNav()">&#9776;</button>

	<section>
		<h1>SUPPLY INFORMATION</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th> DRUG CODE</th>
				<th>DRUG NAME</th>
				<th>SUPPLY ID</th>
				<th>SUPPLY NAME</th>
                <th>TOTAL QUANTITY</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['Code'];?></td>
				<td><?php echo $rows['Name'];?></td>
				<td><?php echo $rows['Sup_id'];?></td>
				<td><?php echo $rows['Sup_name'];?></td>
                <td><?php echo $rows['Tot_quantity'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
