<?php


$insert = false;
if(isset($_POST['code'])){
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
    $code = $_POST['code'];
    $name = $_POST['name'];
    $type =$_POST['type'];
    $DOE =$_POST['DOE'];
    $cp=$_POST['cp'];
    $sp = $_POST['sp'];
    $DOM =$_POST['DOM'];
	$rd = $_POST['rd'];
    $cn = $_POST['cn'];
    $sn = $_POST['sn'];
    $an = $_POST['an'];
    $sql1 = "INSERT INTO `pharmacy`.`drugs` (`Code`, `Name`, `Type`, `Expiry`,`C_Price`,`S_Price`,`M_Date`,`Req_Dose`) VALUES ('$code', '$name','$type','$DOE','$cp','$sp','$DOM','$rd');";
    $sql2 = "INSERT INTO `pharmacy`.`container_location` (`Drug_code`,`Container_num`) VALUES ('$code','$cn');";
    $sql3 = "INSERT INTO `pharmacy`.`shelf_location` (`Container_num`,`Shelf_num`) VALUES ('$cn','$sn');";
    $sql4 = "INSERT INTO `pharmacy`.`aisle_location` (`Shelf_num`,`Aisle_num`) VALUES ('$sn','$an');";

    // echo $sql;
    // Execute the query
    if($con->query($sql1) == true && $con->query($sql2) == true && $con->query($sql3) == true && $con->query($sql4) == true){

        // Flag for successful insertion
        $insert = true;
        header('location:homepage.html');
    }
    else{
        echo "ERROR: $sql1 <br> $con->error";
        echo "ERROR: $sql2 <br> $con->error";
        echo "ERROR: $sql3 <br> $con->error";
        echo "ERROR: $sql4 <br> $con->error";
    }

    // Close the database connection;
    $con->close();
}
?>

