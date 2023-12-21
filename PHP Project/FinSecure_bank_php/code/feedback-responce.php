<?php
    include("conn.php");
    $nm = $_POST['unm'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO `feedback` (`name`,`rating`,`comment`) VALUES ('$nm','$rating','$comment')";

$result = mysqli_query($conn, $sql);

if ($result) {

    header("Location:./");
}
?>