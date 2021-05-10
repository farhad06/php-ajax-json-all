<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <?php
        $conn=mysqli_connect('localhost','root','','ajax') or   die("Connection Faield");
        $sql="SELECT * FROM data";
        $result=mysqli_query($conn,$sql);
        $output="";
        if(mysqli_num_rows($result)>0){
            $output="<table class='table table-striped'>
            <thead>
               <tr>
                   <th>Id</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Password</th>
                   <th>Contact</th>
                   <th>Update</th>
                   <th>Delete</th>
               </tr> 
            </thead>";
            while($row=mysqli_fetch_assoc($result)){
                $output.="<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['password']}</td><td>{$row['contact']}</td><td><button type='button' class='btn btn-success' data-id={$row['id']} id='update-btn'>Update</button></td><td><button type='button' class='btn btn-danger' data-id={$row['id']} id='delete-btn'>Delete</button></td></tr>";
            }
            $output.="</table>";
            echo $output;
        }else{
            echo "Record not Found";
        }
        ?>
</div>
</body>
</html>