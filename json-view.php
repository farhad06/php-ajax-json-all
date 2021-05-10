<?php
$conn= mysqli_connect('localhost','root','','ajax') or die("Connection Falied");
$sql="SELECT * FROM data";
$result=mysqli_query($conn,$sql);
$output=mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($output);
echo json_encode($output);
?>