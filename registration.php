<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="styles.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
   background-image: url('https://images.unsplash.com/photo-1585435557343-3b092031a831?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGhhcm1hY3l8ZW58MHx8MHx8&w=1000&q=80');
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
 border: 5px dotted black;
 width: 40%;
 height:30%;
 

}
.btn
{
  background-color: rgb(255, 255, 252);
  padding: 20px 15px;
  font-size: 14px;
  cursor: pointer;
  display: inline-block;
  border-width: 4px;
  border-color: black;
  color: black;
}
.btn
{
  background-color: rgb(255, 255, 252);
  padding: 15px 30px;
  font-size: 14px;
  cursor: pointer;
  display: inline-block;
  border-width: 4px;
  border-color: black;
  color: black;
}
</style>  
</head>  
<body>  
  
  <center>  <h1>CREATE ACCOUNT</h1>   
  <form class="reg_form" action="reg.php" method="POST" >

    <label><b> FIRST NAME : </b> </label>   
 <input type="text" name="uname" placeholder= "Enter"  />   
 <br><br>
   
    <label><b>LAST NAME :</b> </label>    
<input type="text" name="lname" placeholder= "Enter"/> 
 <br><br>

 <label><b>PHONE NUMBER:</b> </label>   
<input type="value" name="phone" placeholder= "Enter"  /> 
<br><br> 

<label><b>DATE OF BIRTH:</b> </label>   
<input type="Date" name="DOB" placeholder= "Enter"  /> 
<br><br> 

<label><b>ADDRESS:</b> </label>   
<input type="text" name="address" placeholder= "Enter"  /> 
<br><br> 

<label><b>SALARY:</b> </label>   
<input type="number" name="salary" placeholder= "Enter"  /> 
<br><br> 

 <label><b> USERNAME : </b> </label>   
 <input type="text" name="unname" placeholder= "username"  />   
 <br><br>

 <label><b>EMPLOYEE ID:</b> </label>   
<input type="number" name="empid" placeholder= "Enter"  /> 
<br><br> 

 <label ><b>PASSWORD : </b></label>  
    <input type="password" placeholder="Enter Password" name="pass" required>
    <br><br>


<button type="submit" class="btn btn-primary"><a href="login.php" style="text-decoration:none">Register</a></button>

 <!-- <script>
        document.getElementById("btn").addEventListener("click", redirectFunction);
        
        function redirectFunction(){
            window.location.href = "login page.html";
            // You can also use window.location.replace method
            
            /*
             * window.location.replace("https://www.example.com");
             */
        }
    </script>     -->
</form> 
</center>

</body>  
