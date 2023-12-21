<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "finsecure_bank";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    else{
        $year = "SELECT * FROM users WHERE year(acc_create_date)  = 2023";
        $query = mysqli_query($con,$year);
        $result = mysqli_num_rows($query);
        print_r($result);
    }
?>  




<!-- Array ( [U_id] => Mahesh01 [Account_no] => 3610100018525 [Email] => Mrametabusiness@Gmail.Com [Password] => 21232f297a57a5a743894a0e4a801fc3 [F_name] => Mahesh [L_name] => Ameta [Contact] => 8160205701 [Alt_contact] => 9428492516 [Dob] => 2002-02-27 [Address] => Riddhi Siddhi Park Rajkot [Acc_create_date] => 2023-08-04 07:40:17 [Transction_pin] => 2722 [Usr_img] => Upload/Fs.Jpeg [Balance] => 5000 ) -->