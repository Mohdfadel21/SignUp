<?php
$Email = $_POST['Email'];
$password_log = $_POST['password'];



$cFlag = "0";
function test_input($data)
{

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}













if (empty($Email)) {
    $cFlag = "UserName Missing!!";
} else {
    if (empty($password_log)) {
        $cFlag = "Password Missing!!";
    } else {
        $Email = test_input($_POST['Email']);
        $password_log = test_input($_POST['password']);
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mydb101";
        $Email = test_input($_POST['Email']);
        $password_log = test_input($_POST['password']);
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT Email, Password FROM employee";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($Email == $row['Email']) {
                    if ($password_log == $row['Password']) {
                        $cFlag = "0";
                    } else {
                        $cFlag = "Email or password Faild";
                    }
                } else {
                    $cFlag = "Email or password Faild";
                }
            }
        } else {
            $cFlag = "No rows";
        }
    }
}



if ($cFlag == "0") {
    $userName = test_input($_POST['userName']);
    header('Location:HomePage.php?result= ' . $userName);
    exit;
} else {
    header('Location:logIn.php?result=' . $cFlag);
    exit;
}
