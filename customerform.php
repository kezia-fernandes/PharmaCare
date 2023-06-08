<?php

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
   background-image: url('https://cdn.sanity.io/images/0vv8moc6/mhe/c0f789e4a7ac6f41c80405c69b216dce4d96b9ed-1000x665.png?fit=crop&auto=format');
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
 width: 20%;
 height:30%;
 padding: 1em ;
 border: 5px solid black;
 background: white;

}
 

</style>  
</head>  
<body>  
  
  <center>  <h1>ADD CUSTOMER</h1>   
  <form class="cust_form" method="post" action="cform.php" >
  
<label><b>CUSTOMER ID:</b> </label>   
<input type="number" name="custid" placeholder= "Enter"  /> 
<br><br> 

    <label><b> FIRST NAME : </b> </label>   
 <input type="text" name="fname" placeholder= "Enter"  />   
 <br><br>
   
    <label><b>LAST NAME :</b> </label>    
<input type="text" name="Lname" placeholder= "Enter"/> 
 <br><br>

 <label><b>PHONE NUMBER:</b> </label>   
<input type="number" name="Phone" placeholder= "Enter"  /> 
<br><br> 


<label><b>DOCTOR NAME:</b> </label>   
<input type="text" name="doc" placeholder= "Enter"  /> 
<br><br> 


<button type="submit" class="btn btn-primary">Submit</button>  
</form> 
</center>

</body>