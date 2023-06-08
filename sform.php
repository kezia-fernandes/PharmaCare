<?php
$insert = false;
if(isset($_POST['sid'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $msg=' ';
    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
     echo "Success connecting to the db";

    // Collect post variables
    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $city =$_POST['city'];
    $state =$_POST['state'];
    $semp=$_POST['semp'];
    
    $sql = "INSERT INTO `pharmacy`.`supplier` (`Sup_id`, `Sup_name`, `City`, `State`,`Supervising_emp`) VALUES ('$sid', '$sname','$city','$state','$semp');";
    // echo $sql;
    // Execute the query
    if($con->query($sql) == true){

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection;
    $con->close();
}
?>
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="styles.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
   background-image: url('https://www.lifevisionchandigarh.com/storage/app/public/Blogs/xww3QyYl72Rba7WzDMJsI7fFoAJgZ33yRBz54Dli.jpeg');
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
 padding: 1em 0;
 border: 5px dotted red;

}

</style>  
</head>  
<body>  
  
  <center>  <h1>ADD A SUPPLIER</h1>   
  <form class="sform" method="POST" action="sform.php" >
  
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

<label><b>SELECT SUPERVISING EMPLOYEE:</b> </label>   
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

