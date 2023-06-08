<?php
$insert = false;
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "pharmacy";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$db= $conn;



    // Create a database connection
    // $con = mysqli_connect($server, $username, $password);
    // echo 12;

    // // Check for connection success
    // if(!$con){
    //     die("connection to this database failed due to" . mysqli_connect_error());
    // }
    //  echo "Success connecting to the db";

    // Collect post variables

    $supid = $_POST['supid'];
    $drugid = $_POST['drugid'];
    $tq = $_POST['tq'];
    $sql = "INSERT INTO `supplies` (`Sup_id`, `Drug_id`, `Tot_quantity`) VALUES ('$supid', '$drugid', '$tq');";
    // echo $sql;

    // Execute the query
    if($conn->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
        echo "It worked!!";
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }

    // Close the database connection
    $conn->close();

?>