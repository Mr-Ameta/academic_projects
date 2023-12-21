<?php include("header.php");
session_start();
if(!isset($_SESSION['username']))
{
  // not logged in
  
  header('Location: ../');
  exit();
}

include("conn.php");
  $sql = "Select account_no ,f_name,l_name,acc_create_date,balance from users";
  
  $result = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result); 

  
?>
<head>
    <style>
        table, th, td {
  border: 1px solid black;
  text-align:center;
}
    </style>
</head>

<main>
    <?php include("sidebar.php")?>
    
  <section>
    <div class="content-page">
        <h1>Users Info</h1>
        <table style="width:90%; height:20%">
            <tr>
                <th>Account No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Account Create On</th>
                <th>Account Balance</th>
            </tr>
           <?php
           while($row=mysqli_fetch_row($result)) { 
                echo "
            <tr>
                <td>$row[0]</td>
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
                <td>&#8377; $row[4]</td>
            </tr>
            ";
            }
           ?>
        </table>
    </div>
  </section>
</main>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>