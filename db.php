<?php

$servername="localhost";
$username="root";
$password="";
$dbname="mydb101";

$conn=new mysqli ($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Faild".$conn->connect_error);
}else{
    echo "Successfuly <br>";
$stmt=$conn->prepare("INSERT INTO employee(Name , Email, Phone, Password ,Birthday) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssss",$Name,$Email, $Phone,$Password,$Birthday);

$Name="ssss";
$Email="ssss";
$Phone="ssss";
$Password="ssss";
$Birthday="ssss";
$stmt->execute();
$stmt->close();
$conn->close();
}




?>