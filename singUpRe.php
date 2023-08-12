 <?php
$userName=$_POST['userName'];
// echo "<br>";
// echo $userName;
$password=$_POST['password'];
// echo "<br>";
// echo $password;
 
$email=$_POST['email'];
// echo "<br>";
// echo $email;
 
$phone=$_POST['phone'];
// echo "<br>";
// echo $phone;
 
$birthday=$_POST['birthday'];
// echo "<br>";
// echo $birthday;
 
function test_input($data){
    $data=trim($data);
    $data= stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

$cFlag="0";
if(empty($userName)){
$cFlag="Please enter your UserName!!!";
}else{
    if(empty($password)){
        $cFlag="Please enter your password!!!";
 }if(empty($email)){
    $cFlag="Please enter your email!!!";
 }else{
    if(empty($phone)){
        $cFlag="Please enter your phone number!!!";
    }else{
        if(empty($birthday)){
            $cFlag="Please enter your  birthday!!!";
        } 
        else{
            $userName=test_input( $_POST['userName']);
            $password=test_input( $_POST['password']);
            $email=test_input( $_POST['email']);
            $phone=test_input( $_POST['phone']);
            $birthday=test_input( $_POST['birthday']);
        }
    }
 }
   
}
 
if($cFlag=="0"){
$servername="localhost";
$username="root";
$password="";
$dbname="mydb101";

$conn=new mysqli ($servername,$username,$password,$dbname);

$stmt= $conn->prepare("INSERT INTO employee(Name , Email, Phone, Password ,Birthday) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssss",$Name,$Email, $Phone,$Password,$Birthday);

$Name=test_input($_POST['userName']);
$Email=test_input($_POST['email']);
$Phone=test_input($_POST['phone']);
$Password=test_input($_POST['password']);
$Birthday=test_input($_POST['birthday']);
$stmt->execute();

$stmt->close();
$conn->close();

    header('Location:login.php');
    exit;
}else{
    header('Location:signUp.php?result='.$cFlag);
    exit;
}




 
 
 
 
 
 
 
 
 
 
 ?>