
<?php

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "atmiya";
     $conn = mysqli_connect($host, $user, $password, $db_name);  
     if(mysqli_connect_errno()) {  
         die("Failed to connect with MySQL: ". mysqli_connect_error());  
     } 
     session_start();
     $name = $_SESSION['name'];
     $sql = "SELECT * from employee where `name`='$name' ";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_array($result);
     $row_n = $row['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F2</title>
</head>
<body>
    <div class="box">
         <?php echo "My Name Is $row_n";?>
    </div>
</body>
</html>