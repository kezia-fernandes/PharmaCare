<!DOCTYPE html>
<html lang="en">
<head>
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-image:url('https://www.careerguide.com/career/wp-content/uploads/2020/02/2924624b72ad602afebc66b4cb862a11.gif'); background-repeat:repeat;
background-repeat: no-repeat;
background-size: cover;

}  
</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="styles.css" rel="stylesheet">
  <link href="join.css" rel="stylesheet">
  <link href="index.css" rel="stylesheet">
  <title>login</title>
  <script>
		history.pushState(null, null, null);
		window.addEventListener('popstate', function () {
		history.pushState(null, null, null);
		});
	</script>
</head>

<body class="full-height-grow">
<CENTER>
    

    <div class="container">
  <div class="container full-height-grow">
   
    <section class="join-main-section">
      <h1 class="join-text">
       
        <span class="accent-text">LOGIN </span>
      </h1><BR><BR>


      <form class="join-form" name="f1" action = "" onsubmit = "return validation()" method = "POST">
        <div class="input-group">
          <label for="user">User Name</label>
          <input type="text" name="user" id="user" required>
        </div><br>

        <div class="input-group">
          <label for="pass">Password</label>
          <input type="password" name="pass" id="pass" required>
        </div><br>
        <div class="input-group">
          <button href="index1.php" type="submit" class="btn" >SUBMIT</button><br>
<p> Not a User?</p>
          <!-- <button href= "registration.php" type="register" class="btn" >REGISTER</button> -->
        </div>
      </form>
      <button href= "registration.php" type="register" class="btn" ><a href="registration.php" style="text-decoration:none" >REGISTER</a></button>
    </section>
  </div>
  </div>
  </p>

  <script>
      window.history.forward();
      </script></CENTER>
</body>
</html>
<?php      
    include('Config.php');
    if(isset($_POST['user']))
    {
       session_start();
      $username = $_POST['user'];  
      $password = $_POST['pass'];
      $_SESSION['user']=" ";
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT * from employee where Username = '$username' AND passwd = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //echo "<h1><center> Login successful </center></h1>";
            $_SESSION['user']=$username; 
            $_SESSION['status']="Active";
            header("location:homepage.html");
        }  
        else{  
            echo '<script>alert"<h1> Login failed. Invalid username or password.</h1>"</script>';  
        }  
      }   
      
?>
