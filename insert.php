<?php
$name=$_POST['name'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$contact=$_POST['contact'];
$conn=mysqli_connect('localhost','root','','ajax') or   die("Connection Faield");
$sql="INSERT INTO data (name,email,password,contact) VALUES ('{$name}','{$email}','{$pwd}','{$contact}')";
//$result=mysqli_query($conn,$sql);
if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}

?>