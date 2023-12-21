<div class="header_section">
      <div class="header_left">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo"><a href="index.html"><img src="images/logo-dark.png" class="logo-img"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link underline-effect" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link underline-effect" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link underline-effect" href="services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link underline-effect" href="contact.php">Contact Us</a>
              </li>
              
              <?php
                session_start();
                if(isset($_SESSION['username']))
                {
                  echo "
                  <li class='nav-item'>
                  <a class='nav-link login-btn' href='./dashbord/'>Dashbord</a>
                  </li>
                  ";
                }
                ?>
              
              <li class="nav-item">
                <?php
               
                if(!isset($_SESSION['username']))
                {
                  // not logged in
                  
                  echo "<a class='nav-link login-btn' href='login.php'>Login</a>";
                }
                else
                {
                  echo "<a class='nav-link ' href='./dashbord/logout.php'>Logout</a>";
               
                }
                ?>
                
              </li>
            </ul>
          </div>
        </nav>
       