<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pharmacy";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
 die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
}
$user = $_POST['user'];
$pass = $_POST['pass'];
$sql = "UPDATE `employee` SET `Lname` = '$pass' WHERE `Lname` = '$user'";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
if($result){
 echo "We updated the record successfully";
}
else{
 echo "We could not update the record successfully";
}
?>