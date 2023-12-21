<?php include("header.php");
session_start();
if(!isset($_SESSION['username']))
{
  // not logged in
  
  header('Location: ../');
  exit();
}

// no of account featch
function get_usr()
{
  include("conn.php");
  $sql = "Select * from users";
  
  $result = mysqli_query($con, $sql);
  // print_r($result);
  
  $num = mysqli_num_rows($result); 
  
  return $num;
}

// no of feedback featch
function get_feedback()
{
  include("conn.php");
  $sql = "Select * from feedback ";
  
  $result = mysqli_query($con, $sql);
  
  $num = mysqli_num_rows($result); 
  
  return $num;
}

function get_money()
{
  include("conn.php");
  $sql = "Select SUM(balance) from users";
  
  $result = mysqli_query($con, $sql);
  $value = mysqli_fetch_array($result);
  // print_r($value[0]);
  
  // $num = mysqli_num_rows($result); 
  
  return $value[0];
}


$usr = get_usr();
$feedback = get_feedback();
$money = get_money();

?>
<main>
    <?php include("sidebar.php")?>
    
  <section>
    <div class="content-page">
    <h1>FinSecure Bank</h1>
     <div class="box-contianer">
      <div class="box">
        <h4>Total Account Opened</h4>
        <h3><?php echo $usr ?></h3>
        <a href="users.php"><h6>More Info <ion-icon name="arrow-forward-circle-outline"></ion-icon></h6></a>
      </div>
      <div class="box">
        <h4>Total Money Diposites</h4>
        <h3>&#8377; <?php echo $money ?></h3>
        <a href="users.php"><h6>More Info <ion-icon name="arrow-forward-circle-outline"></ion-icon></h6></a>
      </div>
      <div class="box">
        <h4>Total Feedback Recived</h4>
        <h3><?php echo $feedback ?></h3>
        <a href="feedback.php"><h6>More Info <ion-icon name="arrow-forward-circle-outline"></ion-icon></h6></a>
      </div>
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

