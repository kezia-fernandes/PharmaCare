<?php
$insert = false;
if(isset($_POST['custid'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
     echo "Success connecting to the db";

    // Collect post variables
    $custid = $_POST['custid'];
    $drugid = $_POST['drugid'];
    $purchase = $_POST['purchase'];
    $docname = $_POST['docname'];
    $empid = $_POST['empid'];
    $sql = "INSERT INTO `pharmacy`.`purchases` (`Cust_id`, `Drug_code`, `Purchase_quantity`, `Date_Time`, `Doc_name`) VALUES ('$custid', '$drugid', '$purchase', current_timestamp(),'$docname');";
    $sql1 = "INSERT INTO `pharmacy`.`contacts` (`Emp_id`, `Cust_id`,`Date_Time`) VALUES ('$empid', '$custid',current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true && $con->query($sql1) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>