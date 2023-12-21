<?php include("header.php");


include("conn.php");
    $nm = $_POST['Name'];
    $pn = $_POST['Phone_Number'];
    $email = $_POST['Email'];
    $msg = $_POST['Message'];

    $sql = "INSERT INTO `contact` (`name`,`mobileno`,`email`,`message`) VALUES ('$nm','$pn','$email','$msg')";

$result = mysqli_query($conn, $sql);

if ($result) {

    header("Location:index.php");

}
?>