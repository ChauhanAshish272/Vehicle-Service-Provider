<?php
session_start();
$name=$_POST['name'];
$password=$_POST['password'];

$conn= new mysqli("localhost","root","","vehicle_management");
$sql= "SELECT * FROM signup WHERE name='$name' AND password='$password'";

$result =mysqli_query($conn, $sql);

if(mysqli_num_rows($result)==1)
{
    $row=mysqli_fetch_assoc($result);
    if($row['name']==$name && $row['password']==$password)
    {
        echo "Logged In";
       header("Location: Index2.html");
       exit();
    }
}
else{
    echo"Incorrect Name and Password";
    header("refresh: 3; Login.html");
}


?>

