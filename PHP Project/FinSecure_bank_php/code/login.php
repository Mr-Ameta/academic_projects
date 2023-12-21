<?php include("header.php")?>
<?php include("nav2.php");
// session_start();

if(isset($_SESSION['username']))
{
  //  logged in
  
  header('Location: ./');
  exit();
}

?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
           
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
    <!-- Pills navs -->
    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#" role="tab"
          aria-controls="pills-login" aria-selected="true">Login</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="register.php" role="tab"
          aria-controls="pills-register" aria-selected="false">Register</a>
      </li>
    </ul>
<!-- Pills navs -->

<h2 id="heading">Login To Your Bank Account</h2>
                <p>Enter Your Crenditionals </p>

<!-- Pills content -->
    <div class="tab-content">
      <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
        <form  method="POST" action="auth.php" onsubmit = "return validation()"  name="f1">
          

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="loginName" class="form-control" name="user"/>
            <label class="form-label" for="loginName">Account no/email/username</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="loginPassword" class="form-control" name="pass"/>
            <label class="form-label" for="loginPassword">Password</label>
          </div>

          <!-- 2 column grid layout -->
          <div class="row mb-4">
            <div class="col-md-6 d-flex justify-content-center">
              <!-- Checkbox -->
              <!-- <div class="form-check mb-3 mb-md-0">
                <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                <label class="form-check-label" for="loginCheck"> Remember me </label>q
              </div> -->
            </div>

            <div class="col-md-6 d-flex justify-content-center">
              <!-- Simple link -->
              <a href="#!">Forgot password?</a>
            </div>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

         
        </form>
      </div>
      
    </div>
<!-- Pills content -->
</div>
</div>
</div>

<script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script> 

<?php include("footer.php")?>
<?php include("script.php")?>