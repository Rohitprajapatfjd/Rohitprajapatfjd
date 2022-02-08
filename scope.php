<?php   
$_SERVER = "localhost";
$username = "root";
$password = "";
$database = "rohit";

$conn = mysqli_connect($_SERVER,$username,$password,$database);
$name = $_POST['name'];
$password = $_POST['pass'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];


print_r($password);

//exit();


$sql = "INSERT INTO `brick`( `username`, `pass`, `address`, `phoneno`, `email`, `city`) VALUES ('$name','$password','$address','$phone','$email','$city')";

$result = mysqli_query($conn,$sql) or die("Query failed");
 
header("Location:index.html");

mysqli_close($conn);








?>