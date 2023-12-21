<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1</title>
</head>
<body>
    <div class="box">
        <form action="f1.php" method="post">
            Name <input type="text" name="name" id="name">
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        session_start();
        $name = $_POST["name"];
        $host = "localhost";  
        $user = "root";  
        $password = '';  
        $db_name = "atmiya";  
          
        $conn = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        } 

        $sql = "INSERT INTO `employee`(`name`) VALUES ('$name') ";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            $_SESSION['name'] = $name;
            header("location:./f2.php");
        }
    }
?>