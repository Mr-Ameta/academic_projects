<?php 
include("header.php");
include("conn.php");
session_start();
$uname = $_SESSION['username'];
if(!isset($_SESSION['username']))
{
  // not logged in
  
  header('Location: ../login.php');
  exit();
}?>

<style>
    .box{
        width:70%;
        height:90vh;
        margin-left:35%;
        /* border:1px solid red; */
        display:flex;
        flex-direction:column;
        gap:50px;
        justify-content:center;
        align-items:center;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<main>
    <?php include("sidebar.php")?>
    
    <div class="content-page">
        <div class="box">
        <h2 id="heading">Add Money To Your Bank Account</h2>
        <form method="POST" action="add_money.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Amount</label>
    <input type="number" class="form-control" id="exampleInputEmail1"  name="amount">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Transection Pin</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="t_pin">
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
        </div>
    </div>
  <section>

  
<script>
  const body = document.querySelector("body");
function toggleMneu() {
  mysidebar.classList.toggle("shrink_sidebar");
}
</script>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <?php
    if (isset($_POST['submit'])) {
        $ac = $uname["account_no"];
        $db_amount_query = "SELECT balance from users WHERE account_no = $ac ";
        $db_amount = mysqli_query($con,$db_amount_query);
        $db_amount_row = mysqli_fetch_array($db_amount);
        // print_r($db_amount_row[0]);
        $amount = $_POST['amount'];
        $pin = $_POST['t_pin'];
        if($uname['transction_pin'] == $pin && isset($_POST['amount']))
        {
            $final_bal = $db_amount_row[0] + $amount;
            $sql = "UPDATE `users` SET `balance`='$final_bal' WHERE account_no = $ac";
            $result = mysqli_query($con,$sql);
            $t_id=uniqid();

            $sql = "INSERT INTO `transactions`(`transection_id`,`to_ac`, `amount`) VALUES ('$t_id','$ac','$amount')";
                $result = mysqli_query($con,$sql);
        }
        else{
            echo "<script>alert('transection pin is invalid or amount must have to fill. Try Again')</script>";
        }
        
        if($result)
        {
            echo "<script>alert('$amount Added To your Account')</script>";
        }
        mysqli_close($con);
    }
  ?>