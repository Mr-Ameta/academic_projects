<?php include("header.php");
session_start();
if(!isset($_SESSION['username']))
{
  // not logged in
  
  header('Location: ../');
  exit();
}

$user = $_SESSION['username'];



  
?>
<head>
    <style>
        .card{
	background-color: #fff;
	width: auto;
    height: auto;
	border-radius: 33px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	padding: 2rem !important;
}
.top-container{
	display: flex;
	align-items: center;
}
.profile-image{
	border-radius: 10px;
	border: 2px solid #5957f9;
}
.name{
	font-size: 15px;
	font-weight: bold;
	color: #272727;
	position: relative;
	top: 8px;
}
.mail{
	font-size: 14px;
	color: grey;
	position: relative;
	top: 2px;
}
.middle-container{
	background-color: #eee;
	border-radius: 12px;

}
.middle-container:hover {
	border: 1px solid #5957f9;
}
.dollar-div{
	background-color: #5957f9;
	padding: 12px;
	border-radius: 10px;
}
.round-div{
	border-radius: 50%;
	width: 35px;
	height: 35px;
	background-color: #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	text-align: center;
}
.dollar{
	font-size: 16px !important;
	color: #5957f9 !important;
	font-weight: bold !important;
}


.current-balance{
	font-size: 15px;
	color: #272727;
	font-weight: bold;
}
.amount{
	color: #5957f9;
	font-size: 16px;
	font-weight: bold;
}
.dollar-sign{
	font-size: 16px;
	color: #272727;
	font-weight: bold;
}

.recent-border{
	border-left: 2px solid #5957f9;
	display: flex;
	align-items: center;

}
.recent-border:hover {
	border-bottom: 1px solid #dee2e6!important;
}

.recent-orders{
	font-size: 16px;
	font-weight: 700;
	color: #5957f9;
	margin-left: 2px;
}

.wishlist{
	font-size: 16px;
	font-weight: 700;
	color: #272727;

}
.wishlist-border:hover{
	border-bottom: 1px solid #dee2e6!important;
}
.fashion-studio{
	font-size: 16px;
	font-weight: 700;
	color: #272727;
}
.fashion-studio-border:hover {
	border-bottom: 1px solid #dee2e6!important;
}

.profile
{
	border: 1px solid black;
	padding: 2%;
	margin: 10% 20%;	
	width:70%;
	border-radius:20px;
	background: #fff;
}
.profile-top{
	display:flex;
	justify-content:space-between;
}
.profile-top-left{
	line-height:40px
}
.profile-top-left span{
	background: #e8f9ff;
	padding:5px;
	border-radius:10px;
}
.profile-top-right img{
	border-radius:100%;
	height:100px;
	width:100px;
}
.profile-bottom
{
	width:60%;
	margin:5% auto;
	text-align:center;
	box-shadow: 0px 0px 10px #888888;
	display:flex;
	justify-content:center;
	align-items:center;
}
ul {
    list-style: none;
    padding: 10%;
}
</style>
</head>

<main>
    <?php include("sidebar.php")?>
    
  <section>
    <div class="content-page" >
		<div class="profile">
			<div class="profile-top">
				<div class="profile-top-left">
					<h4><?php echo $user['f_name']." ".$user['l_name'];?></h4>
					<h5>User Id: <?php echo $user['u_id'];?></h5>
					<span>Last login: <?php echo $user['last_login'];?></span>
				</div>
				<div class="profile-top-right">
					<img src="../<?php echo $user['usr_img'];?>" alt="#">
				</div>		
			</div>

			<div class="profile-bottom">
				
					<ul>
						<li><a href="#">
							<ion-icon name="person-outline"></ion-icon>
							Contact Detail
							<ion-icon name="chevron-forward-outline"></ion-icon>
						</a></li>
						<li><a href="#">
							<ion-icon name="log-in-outline"></ion-icon>
							Change Login Password
							<ion-icon name="chevron-forward-outline"></ion-icon>
						</a></li>
						<li><a href="#">
							<ion-icon name="cash-outline"></ion-icon>
							change Transection pin
							<ion-icon name="chevron-forward-outline"></ion-icon>
						</a></li>
					</ul>
				
				</div>
		</div>
    </div>
  </section>
</main>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>