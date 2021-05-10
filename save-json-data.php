<?php
if($_POST['name'] !="" && $_POST['age'] !="" && $_POST['add'] !=""){
    if(file_exists("json/student-data.json")){
        $currentData=file_get_contents("json/student-data.json");
        $arrData=json_decode($currentData,true);
        $newData=array(
            'name' => $_POST['name'],
            'age'  => $_POST['age'],
            'address' => $_POST['add']
        );
        $arrData[]=$newData;
        $jsonData=json_encode($arrData,JSON_PRETTY_PRINT);
        if(file_put_contents('json/student-data.json',$jsonData)){
            echo "<h3>File save Successfully</h3>";
        }else{
            echo "<h3>File  dose not saved</h3>";
        }


    }else{
        echo "<h3>File does not exits</h3>";
    }

}else{
    echo "<h3>All Fields are requered</h3>";
}


?>