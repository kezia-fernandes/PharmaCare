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
  
 <h1>CHANGE SURNAME</h1>   
  <form class="sform" method="POST" action="changeform.php" >
  
<label><b> OLD SURNAME:</b> </label>   
<input type="text" name="user" placeholder= "Enter"  /> 
<br><br> 

    <label><b> NEW SURNAME : </b> </label>   
 <input type="text" name="pass" placeholder= "Enter"  />   
 <br><br>
   


<button type="submit" class="btn btn-primary">Submit</button>

 
</form> 


</body>