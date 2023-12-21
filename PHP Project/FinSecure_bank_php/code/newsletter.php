<?php

include("conn.php");
if (isset($_POST['subscribe'])) {
  $email = $_POST['email'];
  $sql = "INSERT INTO `newsletter`(`email`) VALUES ('$email')";
  $result = mysqli_query($conn,$sql);
  if ($result) {
    echo "<script>alert('Thanks For Subscribing our Newsletter.')</script>";
  }
  header('Location: ./');
  exit();
}
?>