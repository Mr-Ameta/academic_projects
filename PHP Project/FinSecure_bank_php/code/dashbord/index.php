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
}
$ac = $uname['account_no'];
$sql = "Select * from transactions where `from_ac` = '$ac' OR `to_ac` = '$ac' LIMIT 5";
  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  


$total_bal = "SELECT SUM(amount) FROM transactions WHERE `date` >= DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH) AND `from_ac` = '$ac' OR `to_ac` = '$ac'";

$total_sql = mysqli_query($con, $total_bal);
$row = mysqli_fetch_array($total_sql);  
// print_r($row[0]);

$total_cr_bal = "SELECT SUM(amount) FROM transactions WHERE `date` >= DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH) AND `to_ac` = '$ac'";

$total_cr_sql = mysqli_query($con, $total_cr_bal);
$cr_row = mysqli_fetch_array($total_cr_sql);  
// print_r($cr_row[0]);

$total_dr_bal = "SELECT SUM(amount) FROM transactions WHERE `date` >= DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH) AND `from_ac` = '$ac'";

$total_dr_sql = mysqli_query($con, $total_dr_bal);
$dr_row = mysqli_fetch_array($total_dr_sql);  
mysqli_close($con);
// print_r($dr_row[0]);
?>
    
<main>
    <?php include("sidebar.php")?>
    
  <section>
    <div class="greeating">
      Welcome <br> <span><?php print_r($uname['f_name']);?></span>
    </div>
    <div class="content-page">
        <div class="acc_info">
          <h3>Account Information</h3>
          <div class="balance">
            <div class="bal-left">
              <h5>Your Balance </h5>
              <h2>&#8377 <?php print_r($uname['balance']);?></h2>
            </div>
            <div class="bal-right">
              <a class="bal-rig-btn" href="./passbook.php">Details <ion-icon name="chevron-forward-outline"></ion-icon></a>
            </div>
          </div>
          <div class="balance-stats">
            <h5>Stats(Last 28 Day):</h5>
            <div class="stats-sec">
            <ion-icon name="analytics-outline"></ion-icon>
            <div class="stats-info">
              <h5>Total Balance</h5>
              <h3>&#8377 <?php echo $row[0];?></h3>
            </div>
            </div>

            <div class="stats-sec">
            <ion-icon name="arrow-down-outline"></ion-icon>
            <div class="stats-info">
              <h5>Total Cradit</h5>
              <h3>&#8377 <?php echo $cr_row[0]?></h3>
            </div>
            </div>

            <div class="stats-sec">
            <ion-icon name="arrow-up-outline"></ion-icon>
            <div class="stats-info">
              <h5>Total Debit</h5>
              <h3>&#8377 <?php echo $dr_row[0]?></h3>
            </div>
            </div>
          </div>
       </div>

       <div class="transction-stat">
        <h3>Transactions:</h3>
        <?php
        if($count != 0){
          echo "
          <div class='transaction-table'>
          <table rs Info</h1>
          <table style='width:100%;'>
          <tr>
              <th>Transection Id </th>
              <th>Date</th>
              <th>Amount</th>
              <th>CR/DR</th>
          </tr>";
          while($row=mysqli_fetch_row($result)) { 
            if($uname['account_no'] == $row[2])
            {
              $type = "DR";
            }
            else{
              
              $type = "CR";
            }
             
            if($type == 'DR')
            {
              $color = 'red';
            }
            else{
              $color = 'green';
            }

            echo "
          <tr>
                <td>$row[1]</td>
              <td>$row[0]</td>
              <td style='color:$color'>$row[4]</td>
              <td style='color:$color'>$type</td>
          </tr>
          ";
          }
        echo " </table>
          </div>
          <a href='./passbook.php' class='more_btn'>More</a>
          ";
        }
        else{
          echo " <h4>No Transection Found!</h4>";
        }
        
        ?>

        
        
       </div>
    </div>
  </section>
</main>


<script>
  const body = document.querySelector("body");
function toggleMneu() {
  mysidebar.classList.toggle("shrink_sidebar");
}
</script>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

