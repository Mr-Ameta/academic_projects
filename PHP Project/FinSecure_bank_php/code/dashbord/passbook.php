<?php 
include("header.php");
include("conn.php");
session_start();
$uname = $_SESSION['username'];
if(!isset($_SESSION['username']))
{
  // not logged in
  
  header('Location: ../');
  exit();
}
$ac = $uname['account_no'];
$sql = "Select * from transactions WHERE `from_ac` = '$ac' OR `to_ac` = '$ac'";
  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
?>

<main>
    <?php include("sidebar.php")?>
    <div class="content-page">
    <div class="transction-stat" style="text-align:center; margin-left:10%">
        <h3>Finsecure Bank</h3>
        <h4>Coustmer Transection Report</h4>
        <div class="timestamp">
            <?php date_default_timezone_set("Asia/Kolkata"); echo date("Y/m/d")."<br>". date("h:i a");?>
        </div>
        <?php
        if($count != 0){
          echo "
          <div class='transaction-table'>
          <table style='width:100%;'>
          <tr>
          <th>Date</th>
          <th>Transection Id </th>
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
          ";
        }
        else{
          echo " <h4>No Transection Found!</h4>";
        }
        mysqli_close($con);
        ?>
        
       </div>
    </div>
    </div>
</main>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
