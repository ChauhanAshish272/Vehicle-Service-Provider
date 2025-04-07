<?php
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$_date=$_POST['date'];
$_vehicle=$_POST['vehicle'];
$_model=$_POST['model'];
$_service=$_POST['service'];

$conn= new mysqli("localhost","root","","vehicle_management");
if($conn->connect_error)
{
    die('Connection Failed:'.$conn->connect_error);
}
else
{
    
    $query = "INSERT INTO service (name,number,email,date,vehicle,model,service) VALUES ('$name','$number','$email','$_date','$_vehicle','$_model','$_service')";
    mysqli_query($conn, $query);
    echo "Appointment Booked Successfully";
    header("refresh: 3 ; url=Index2.html");
}
?>