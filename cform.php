
<?php
$insert = false;
if(isset($_POST['custid'])){
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
    $custd = $_POST['custid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone =$_POST['phone'];
    $doc=$_POST['doc'];
    
    				
    $sql = "INSERT INTO `pharmacy`.`customer` (`Cust_id`, `Fname`, `Lname`, `Phone`,`Doc_name`) VALUES ('$custid', '$fname','$lname','$phone','$doc');";
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
