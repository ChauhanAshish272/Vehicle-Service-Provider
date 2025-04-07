<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$conn= new mysqli("localhost","root","","vehicle_management");
if($conn->connect_error)
{
    die('Connection Failed:'.$conn->connect_error);
}
else
{
    
    $query = "INSERT INTO signup (name,email, password) VALUES ('$name','$email', '$password')";
    mysqli_query($conn, $query);
    echo "signup successfully";
    header("refresh: 3 ; url=login.html");
}
?>

