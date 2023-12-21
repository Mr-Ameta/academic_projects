<?php include("header.php")?>
<?php include("nav2.php")?>

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
    <a class="nav-link active" id="tab-register" data-mdb-toggle="pill" href="" role="tab"
      aria-controls="pills-register" aria-selected="true">Register</a>
  </li>
</ul>
<!-- Pills navs -->
                <h2 id="heading">Open Your New  Account At FinSecure Bank</h2>
                <p>Fill all form field to go to next step</p>
                <form id="msform" action="usr_reg.php" method="POST" enctype="multipart/form-data">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Account</strong></li>
                        <li id="personal"><strong>Personal</strong></li>
                        <li id="payment"><strong>Image</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Account Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 1 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">Email: *</label> <input type="email" name="email" placeholder="Email Id" require/>  
                            <label class="fieldlabels">Password: *</label> 
                                <input type="password" name="pwd" placeholder="Password" require/> 
                            <label class="fieldlabels">Confirm Password: *</label> 
                                <input type="password" name="cpassword" placeholder="Confirm Password" require/>
                            <label class="fieldlabels">Traction pin: *</label> 
                                <input type="number" pattern="\d{4}"  autocomplete="off" name="tpin" placeholder="Set Tranction pin"require />
                        </div> 
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Personal Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">First Name: *</label> <input type="text" name="fname" placeholder="First Name" require/> <label class="fieldlabels">Last Name: *</label> <input type="text" name="lname" placeholder="Last Name" require/> <label class="fieldlabels">Contact No.: *</label> <input type="text" name="phno" placeholder="Contact No." require/> <label class="fieldlabels">Alternate Contact No.: *</label> <input type="text" name="phno_2" placeholder="Alternate Contact No." require/>
                            <label class="fieldlabels">Addrace.: *</label> 
                                <textarea name="address" id="addr" cols="30" rows="10" placeholder="Address"></textarea>
                            <label class="fieldlabels">Date Of Birth: *</label> 
                                <input type="date" name="dob" require/>
                            <!-- <input type="text" name="phno_2" placeholder="Alternate Contact No." /> -->
                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Image Upload:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 3 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">Upload Your Photo:</label> 
                            <input type="file" name="file" accept="image/*">
                        </div> <input type="submit" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("script.php")?>