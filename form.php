<?php
$email = $_POST['semail'];
$_SERVER = "localhost";
$username = "root";
$password = "";
$database = "rohit";

$conn = mysqli_connect($_SERVER,$username,$password,$database);

$sql = "INSERT INTO `data`(`email`) VALUES ('$email')";

$result = mysqli_query($conn,$sql);
 
header("Location:index.html");

mysqli_close($conn);

    
    ?>