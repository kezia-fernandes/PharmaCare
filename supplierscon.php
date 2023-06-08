<?php
// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'pharmacy');

$sql = "SELECT * FROM supplier";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>