<?php
$insert = false;
if(isset($_POST['uname'])){
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
    $uname = $_POST['uname'];
    $lname = $_POST['lname'];
    $phone =$_POST['phone'];
    $DOB =$_POST['DOB'];
    $address=$_POST['address'];
    $salary = $_POST['salary'];
	$unname = $_POST['unname'];
	$empid = $_POST['empid'];
	$pass = $_POST['pass'];
    $sql = "INSERT INTO `pharmacy`.`employee` (`Fname`, `Lname`, `Phone`, `DOB`,`Address`,`Salary`,`Username`,`Emp_id`,`passwd`) VALUES ('$uname', '$lname','$phone','$DOB','$address','$salary','$unname','$empid','$pass');";
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

