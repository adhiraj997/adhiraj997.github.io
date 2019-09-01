<?php
    

$name = addslashes(strip_tags(trim($_POST['name'])));
$email = addslashes(strip_tags(trim($_POST['email'])));
$message = addslashes(strip_tags(trim($_POST['message'])));

$msg = "From: ".$email." ".$message;



mail('chakravorty.adhiraj@gmail.com','Contact request',$msg);

echo "Successfully sent";



?>