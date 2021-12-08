<?php 


if($_SERVER['REQUEST_METHOD']=='POST'){


require_once('connect.php'); 

$fname = $_POST['firstname'];
$mname = $_POST['middlename'];
$lname = $_POST['lastname'];
$bday = date('m-d-Y', strtotime($_POST['birthday']));
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email= $_POST['emailadd'];
$course= $_POST['course'];
$date=date('m-d-Y');

$sql = "INSERT INTO student (firstname, middlename, lastname, bday, age, gender, address, mobile, emailadd, registered, course) VALUES ('$fname', '$mname', '$lname', '$bday', '$age', '$gender', '$address', '$mobile', '$email', '$date', '$course')";

if(mysqli_query($con,$sql))
{
    echo "<script> alert('Successfully Registered!! An email or text will be sent to you for your schedule. Thank You!!');window.location='studentregistration.php' </script>";

}
else{
    echo "failed";
}

}
?> 
