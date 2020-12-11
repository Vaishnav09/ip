<?php
include_once('config.php');
$em=mysqli_real_escape_string($con, $_POST['em1']);
$email = filter_var($em, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
$sub=mysqli_real_escape_string($con, $_POST['sub1']);
$name = filter_var($sub, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$com=mysqli_real_escape_string($con, $_POST['com1']);
$message = filter_var($com, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$mobile=mysqli_real_escape_string($con,$_POST['spm']);
//insert into database
mysqli_query($con,"INSERT INTO contact_us(id,name, email,mobile,message) VALUES('','$name','$email','$mobile','$message')");

//send message back to AJAX
echo '<div class="alert alert-success">Thank you for contacting us. Someone will get back to you within 1 Business Day.</div>';
$con->close();
?>