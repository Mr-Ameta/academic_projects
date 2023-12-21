<?php      
    include('conn.php');  
    session_start();
    $username = $_POST['user'];  
    $password = md5($_POST['pass']);  
   
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from users where `email` = '$username' OR `u_id` = '$username' OR `account_no`  = '$username' AND password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            // header("Refresh:1");
            $_SESSION['username'] = $row;
            date_default_timezone_set("Asia/Kolkata"); 
            $date =  date("Y/m/d") ."  ".date("h:i a") ;
            echo $date;
            $account = $row['account_no'];
            $sql_update = "UPDATE `users` SET `last_login`='$date' WHERE `account_no`='$account'";
            $result_update = mysqli_query($conn, $sql_update);
            // print_r($row);
            header("Location:./dashbord/"); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  