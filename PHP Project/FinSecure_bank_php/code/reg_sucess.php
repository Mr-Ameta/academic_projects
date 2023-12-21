<?php include("header.php")?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
           
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                 <!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link " id="tab-login" data-mdb-toggle="pill" href="login.php" role="tab"
      aria-controls="pills-login" aria-selected="false">Login</a>
  </li>
  <li class="nav-item " role="presentation">
    <a class="nav-link active" id="tab-register" data-mdb-toggle="pill" href="#" role="tab"
      aria-controls="pills-register" aria-selected="true">Register</a>
  </li>
</ul>
<!-- Pills navs -->
                <h2 id="heading">Open Your New Bank Account</h2>
                <p>Fill all form field to go to next step</p>
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Account</strong></li>
                        <li class="active" id="personal"><strong>Personal</strong></li>
                        <li class="active" id="payment"><strong>Image</strong></li>
                        <li class="active" id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
<fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 4 - 4</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Register</h5>
                                    <input type="button" onclick="location.href='login.php'" value="Login To Your Account" class="btn btn-primary btn-block mb-4"/>
                                </div>
                            </div>
                        </div>
</fieldset>


            </div>
        </div>
    </div>
</div>
<?php include("footer.php")?>
<?php include("script.php")?>