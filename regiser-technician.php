<?php include 'header.php';
    // session_start();
    if(!isset($_SESSION['firstname'])){
        header("Location:login.php");
    }
?>
<section >
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-2"></div>
            <div class="col-xl-6 col-lg-8 col-md-9 col-sm-10 col-11">
                <div class="warning m-3">
                    <p><span class="pr-2"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span> If you able to work done with Ethical and Honesty, then 
                        register. Otherwise not register.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-2"></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row my-2">
           <div class="col-lg-3"></div>
           <div class="col-lg-6">
                <div class="register-service">
                    <h4 class="h4 font-weight-bold">Become Our Service Partner</h4>
                    <hr>
                    <form action="techinican_signup.php" method="post">
                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" name="name" id="name" placeholder="Enter the name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email:</label>
                            <input type="email" name="email" id="email" placeholder="Enter the email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Mobile No:</label>
                            <input type="tel" name="mobilno" id="mobilno" placeholder="Enter the Mobile no" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">State:</label>
                            <input type="text" name="state" id="state" placeholder="Enter your state" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">City:</label>
                            <input type="text" name="city" id="city" placeholder="Enter your city" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Address:</label>
                            <input type="text" name="address" id="address" placeholder="Enter your address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Pincode:</label>
                            <input type="tel" name="pincode" id="pincode" placeholder="Enter your pincode" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password:</label>
                            <input type="password" name="password" id="password" placeholder="Enter the password" class="form-control" required>
                        </div>
                        <div class="form-group mb-5">
                        <input type="submit" name="submit" id="sumbit" value="submit" class="form-control btn btn-primary " style="width: 200px; float:right;"></input>
                        </div>
                        
                    </form>
                    <p class="font-weight-bold">Have an account? <a href="technician_login.php">Login here </a></p>
                </div>
           </div>
           <div class="col-lg-3"></div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>