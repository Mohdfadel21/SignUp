<?php
if($_SERVER['REQUEST_METHOD']=="GET"){

//     // $result= test_input($_REQUEST['result']);
//     if(empty($result)){

//     }else{
//            echo "<p style='    color: red;
//     font-size: 39px;
//     font-weight: 900;
//     display: inline;
//     padding: 10px;'>" . $result . "</p>";
// }
//     }

 
// function test_input($data){
//     $data=trim($data);
//     $data= stripslashes($data);
//     $data=htmlspecialchars($data);
//     return $data;
}
?>

<!Doctype html>
<html>
    <head>
        <title> Sign Up </title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <h1 class="heading">Sgin up</h1>
        <form action="<?php echo htmlspecialchars('singUpRe.php') ?>" method="post">
<table>
    <tr>
<td> <label for="username">User Name: </label></td>
<td><input type="text" id="username"  autocomplete="on" placeholder="User Name" name="userName"></td>
</tr>
<!-- ************** -->
<tr>
<td> <label for="password">Password: </label></td>
<td><input type="password" id="password"  autocomplete="on" placeholder="Password" name="password"></td>
</tr>

<!-- ************** -->
<tr>
<td> <label for="email">Email: </label></td>
<td><input type="email" id="email"  autocomplete="on" placeholder="Email" name="email"></td>
</tr>
<!-- ************** -->
<tr>
<td> <label for="phone">Phone: </label></td>
<td><input type="phone" id="phone"  autocomplete="on" placeholder="Phone" name="phone"></td>
</tr>
<!-- ************** -->
<tr>
<td> <label for="birthday">Birthday: </label></td>
<td><input type="date" id="birthday"  autocomplete="on" placeholder="Birthday" name="birthday"></td>
</tr>

</table>

<input type="submit" value="Sign up" class="button">


        </form>
    </body>
</html>