<?php
$id=$_POST['id'];
$conn=mysqli_connect('localhost','root','','ajax') or   die("Connection Faield");
$sql="DELETE FROM data WHERE id='{$id}'";
if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}
?>