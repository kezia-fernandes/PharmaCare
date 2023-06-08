<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="styles.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
   background-image: url('https://dev.rodpub.com/images/230/160_main.jpg');
   background-repeat: no-repeat;
background-size: cover;
}  

input[type=text], input[type=password], textarea {    
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color:#FFF8DC;  
  outline: none;  
}  
 div {  
      padding: 30px 0px;  
       }  
      
       form {
 margin: 7;
 width: 35%;
 height:30%;
 padding: 1em ;
 border: 5px solid black;
 background: white;

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
  <a href="supplier.php">ADD NEW SUPPLIERS</a>
  <a href="drugsform.php">ADD NEW DRUGS</a>
  <a href="logout.php">LOGOUT</a>
</div>

<button class="openbtn" onclick="openNav()">&#9776;</button>

  <center>  <h1>ADD SUPPLIER</h1>   
  <form class="sform" method="post" action="sform.php" >
  
<label><b>SUPPLIER ID:</b> </label>   
<input type="number" name="sid" placeholder= "Enter"  /> 
<br><br> 

    <label><b> SUPPLIER NAME : </b> </label>   
 <input type="text" name="sname" placeholder= "Enter"  />   
 <br><br>
   
    <label><b>CITY :</b> </label>    
<input type="text" name="city" placeholder= "Enter"/> 
 <br><br>

<label><b>STATE:</b> </label>   
<input type="text" name="state" placeholder= "Enter"  /> 
<br><br> 

<label><b>ENTER SUPERVISING EMPLOYEE NAME:</b> </label>   
<input type="text" name="semp" placeholder= "Enter"  /> 
<br><br> 

<button type="submit" class="btn btn-primary">Submit</button>

 <!-- <script>
        document.getElementById("btn").addEventListener("click", redirectFunction);
        
        function redirectFunction(){
            window.location.href = "homepage.html";
            // You can also use window.location.replace method
            
            /*
             * window.location.replace("https://www.example.com");
             */
        }
    </script>     -->
</form> 
</center>

</body>