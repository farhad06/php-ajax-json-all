<?php
$conn= mysqli_connect('localhost','root','','ajax') or die("Connection Falied");
$sql="SELECT * FROM data";
$result=mysqli_query($conn,$sql);
$output=mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($output);
$jsonData = json_encode($output,JSON_PRETTY_PRINT);
$fileName="my-". date('d-m-Y'). ".json";
if(file_put_contents("json/{$fileName}",$jsonData)){
    echo "File created";
}else{
    echo "File can not be created";
}

?>