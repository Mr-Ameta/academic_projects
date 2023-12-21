
<?php

$showAlert = false; 
$showError = false; 
$exists=false;
    
// if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'conn.php';

    // Account Information
    $email = $_POST["email"]; 
    $password = $_POST["pwd"]; 
    $cpassword = $_POST["cpassword"];
    $transaction_pin = $_POST["tpin"];

    // Personal Information
    $fnm = $_POST["fname"];
    $lnm = $_POST["lname"];
    $contact = $_POST["phno"];
    $alt_contact = $_POST["phno_2"];
    $address = $_POST["address"];
    $dob = $_POST["dob"];
    $userid=uniqid();
    
    $sql = "Select * from users where u_id='$userid'";
    
    $result = mysqli_query($conn, $sql);
    // print_r($result);
    
    $num = mysqli_num_rows($result); 
    // print_r($num);
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) {
        if($password == $cpassword && $exists==false) {
    
            $hash = password_hash($password, 
                                PASSWORD_DEFAULT);
            // echo "$hash";

            $file = FileUpload();
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO `users` (`u_id`,`account_no`,`email`, 
                `password`, `f_name`,`l_name`,`contact`,`alt_contact`,`dob`,`address`,`acc_create_date`,`transction_pin`,`usr_img`,`balance`) VALUES ('$userid',NULL,'$email', 
                '$hash', '$fnm','$lnm','$contact','$alt_contact','$dob','$address',NULL,'$transaction_pin','$file',0)";
    
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $showAlert = true; 
                header("Location:./reg_sucess.php");
            }
        } 
        else { 
            $showError = "Passwords do not match"; 
        }      
    }// end if 
    
   if($num > 0) 
   {
      echo"Email already existes"; 
   } 
   mysqli_close($conn);
// }//end if   
    
function FileUpload()
{
     // Image Upload
    // $usr_img = $_POST["pic"];
   
    # Get file name
    $filename = $_FILES['file']['name'];


    # Get File size
    $filesize = $_FILES['file']['size'];

    # Location
    $location = "upload/".$userid;

    # create directory if not exists in upload/ directory
    if(!is_dir($location)){
      mkdir($location, 0755);
    }

    $location .= "/".$filename;

    # Upload file
    if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
       echo "File uploaded. <br>";
    }
    return $location;
}
?>