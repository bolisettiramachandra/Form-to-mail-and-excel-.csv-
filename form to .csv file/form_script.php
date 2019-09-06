<?php

$email=$_POST['email'];
$data=$email;


$file="file.csv";


file_put_contents($file, $data . PHP_EOL, FILE_APPEND);

?>
<html>
<head>
    <title>ThankYou Page</title>    
</head>
<body>
    <br><br><br><br><br><br><br>
    <h1 align=center>Thank you ..!</h1>
    <center>
<h4><a href="form.html">HOME</a> </h4> </center>   
    
</body>




</html>
