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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">

</head>

<style>
    div div.course1 h3{
    color: red;
    font-size: 50px;
}
</style>

<body>
    <h1 class="heading">Welcome again  <br> Your Courses:)</h1>
    <div>
        <div class="course1">
            <h3>React Js</h3>
    <iframe width="943" height="531" src="https://www.youtube.com/embed/LgB3j2y1b-4?list=PLtFbQRDJ11kEjXWZmwkOV-vfXmrEEsuEW" title="1 - ( React Js Tutorial ) What is  React Js &amp; Content of Course ? -- ما هى الريأكت ومحتوى الدورة" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   </div>
        <div class="course1">
            <h3>css </h3>
            <iframe width="944" height="531" src="https://www.youtube.com/embed/X1ulCwyhCVM?list=PLDoPjvoNmBAzjsz06gkzlSrlev53MGIKe" title="Learn CSS In Arabic 2021 - #01 - Introduction And What I Need To Learn" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>   </div>
        <div class="course1">
            <h3>html </h3>
            <iframe width="944" height="531" src="https://www.youtube.com/embed/6QAELgirvjs?list=PLDoPjvoNmBAw_t_XWUFbBX-c9MafPk9ji" title="تعلم HTML في 2021 - درس 01# - مقدمة وماذا تحتاج لتتعلم" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   </div>



</div>
</body>

</html>