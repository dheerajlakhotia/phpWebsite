<?php

$con = mysqli_connect("localhost" , "root");
if($con){
  echo'conenction successful';
}else{
  echo'No connection';
}

mysqli_select_db($con , 'eventdata');
$fname=$_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$query = "insert into userinfodata(fname,lname,email,subject,message)
values ('$fname','$lname','$email','$number','$message')";

echo "$query";

mysqli_query($con,$query);

header('location:index.php');



?>