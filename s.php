<?php
//database connection
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "pharmacy";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$db= $conn;
$tableName="supplier";
$tableName2="drugs";
// $supname=$_GET['Sup_name'];
// $name=$_GET['Name'];


$columns= ['Sup_id','Sup_name','City','State'];
$columns2= ['Code', 'Name','Type','Expiry','S_price'];

  $fetchData = fetch_data($db, $tableName, $columns);


  $fetchData2 = fetch_data($db,$tableName2,$columns2);




function fetch_data($db, $tableName,$columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) { 
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}
else{

  // $supname=$_GET['Sup_name'];
  // $name=$_GET['Name'];


  $query = "SELECT *
FROM $tableName";


$result1 = $db->query($query);

if($result1== true){ 
 if ($result1->num_rows > 0) {
    $row1= mysqli_fetch_all($result1, MYSQLI_ASSOC);
    $msg1= $row1;
 } else {
    $msg1= "No Data Found"; 
 }
}else{
  $msg1= mysqli_error($db);
}
return $msg1;
}





}	
?>






<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="test.css">
  <style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-image: linear-gradient(to right top, #0cf24c, #00ed6c, #00e684, #00e097, #0ad8a6, #31d4a0, #43cf9a, #50cb94, #60c87a, #75c45d, #8bbe3e, #a2b715);
  background-repeat: no-repeat;
background-size: cover;

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

<body class="grad" id="grad">

<center><h1>SUPPLIES</h1>
    <div class="container" id="maindiv">
        <div>
            <div class="col-sm-25">
<form class="reg_form" action="s1.php" method="POST" >
<label><b>Supplier ID:</b> </label>   
<input type="number" id="supid" name="supid" placeholder= "Enter"  required/> 
<br><br> 
<label><b>Drug CODE:</b> </label>   
<input type="number" id="drugid" name="drugid" placeholder= "Enter"  required/> 
<br><br> 
<label><b>Total Quantity:</b> </label>   
<input type="number"  placeholder= "Enter" id="tq" name="tq" required/> 
<br><br> 
<button type="submit" class="btn btn-primary">Submit</button><br><br>
</form>
<button type="submit" class="btn btn-primary"><a href="supplierform.php">Add supplier</a></button><br><br>

   
        <div class="info">
        <style>
.btn
{
  background-color: rgb(255, 255, 252);
  padding: 10px 15px;
  font-size: 14px;
  cursor: pointer;
  display: inline-block;
  border-width: 4px;
  border-color: black;
  color: black;
}

/* On mouse-over */
.btn:hover {background: #eee;}

</style>
            Search BY: SUPPLIER NAME: <input type="text" onkeyup="search()" placeholder="SUPPLIER NAME" id="form1" name="Sup_name"><br><br>
            <script type="text/javascript">
		function search() {
		    // Declare variables
		    var input, filter, listing, i, txtValue;
		    input = document.getElementById("form1");
		    filter = input.value.toUpperCase();
		    listing = document.getElementById("cust").rows
		    // Loop through all 
		    for (i = 0; i < listing.length; i++) {
		      if (listing[i]) {
		        txtValue = listing[i].textContent || listing[i].innerText;
		        if (txtValue.toUpperCase().indexOf(filter) > -1) {
		          listing[i].style.display = "";
		        } else {
		          listing[i].style.display = "none";
		        }
		      }
		    }
		 }</script>
        </div>





    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table id="cust" class="table table-bordered" id="people">
       <thead><tr><th>S.N</th>
         <th>SUPPLIER ID</th>
         <th>SUPPLIER Name</th>
         <th>CITY</th>
         <th>STATE</th>
    </thead>
    <tbody>
  <?php
  
      if($fetchData){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['Sup_id']??''; ?></td>
      <td><?php echo $data['Sup_name']??''; ?></td>
      <td><?php echo $data['City']??''; ?></td>
      <td><?php echo $data['State']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo "None" ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
     <script>
       var table = document.getElementById('cust');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
                         document.getElementById("supid").value = this.cells[1].innerText;
                         
                    };
                }
</script>
   </div>

   <div class="info">

            Search BY: Drug name: <input type="text" placeholder="Drug Name" onkeyup="search2()" id="form2" name="Name"><br><br>

        </div>
        <script type="text/javascript">
		function search2() {
		    // Declare variables
		    var input, filter, listing, i, txtValue;
		    input = document.getElementById("form2");
		    filter = input.value.toUpperCase();
		    var listing = document.getElementById("drugs").rows
		    // Loop through all 
		    for (i = 0; i < listing.length; i++) {
		      if (listing[i]) {
		        txtValue = listing[i].textContent || listing[i].innerText;
		        if (txtValue.toUpperCase().indexOf(filter) > -1) {
		          listing[i].style.display = "";
		        } else {
		          listing[i].style.display = "none";
		        }
		      }
		    }
		 }

     
     </script>



    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table id="drugs" class="table table-bordered">
       <thead><tr><th>S.N</th>
         <th>Drug ID</th>
         <th> Name</th>
         <th> Type</th>
         <th>Expiry</th>
         <th>Selling Price</th>
    </thead>
    <tbody>
  <?php
      if(($fetchData2)){      
      $sn=1;
      foreach($fetchData2 as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['Code']??''; ?></td>
      <td><?php echo $data['Name']??''; ?></td>
      <td><?php echo $data['Type']??''; ?></td>
      <td><?php echo $data['Expiry']??''; ?></td>
      <td><?php echo $data['S_price']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo "None" ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
     <script>
       var table = document.getElementById('drugs');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
                         document.getElementById("drugid").value = this.cells[1].innerText;
                         
                    };
                }
</script>
   </div>
</div>
</div>
</div>
              </form></center>
</body>
</html>