<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
    $result= test_input($_REQUEST['result']);
    echo "<p style='    color: red;
    font-size: 39px;
    font-weight: 900;
    display: inline;
    padding: 10px;'>" . $result . "</p>";
}
function test_input($data){
    $data=trim($data);
    $data= stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>

<!Doctype html>
<html>
    <head>
        <title> Sign Up </title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <h1 class="heading">Log in</h1>
        <form action="<?php echo htmlspecialchars('VD.php') ?>" method="post">
<table>
    <tr>
<td> <label for="Email">Email: </label></td>
<td><input type="email" id="Email"  autocomplete="on" placeholder="Email" name="Email"></td>
</tr>
<!-- ************** -->
<tr>
<td> <label for="password">Password: </label></td>
<td><input type="password" id="password"  autocomplete="on" placeholder="Password" name="password"></td>
</tr>

<!-- ************** -->


</table>

<input type="submit" value="Log in" class="button">


        </form>
    </body>
</html>