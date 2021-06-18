<?php include 'header.php' ?>
<section class="signup-form">
    <div class="container">
        <div class="row no-gutters signup-row">
            <div class="col-lg-5 signup-img">
                <img src="image/signup.jpg" alt="" class="d-none d-lg-block">
            </div>
            <div class="col-lg-7 px-5 pt-5">
                
                <h1 class=" py-3">  <a class="navbar-brand font-weight-bold" href="#" style="font-size: 30px;color:rgba(12,36,80,1);">
                    <i class="fa fa-home pr-3 " style="font-size: 50px; color:rgba(12,36,80,1);" aria-hidden="true"></i>Happy Home</a>
                </h1>
                <hr class="mt-0 pt-0">
                <h4>Sign up your account</h4>
                <form action="customer_signup.php" method="post" onsubmit = "return validateForm()">
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" placeholder="Enter Firstname" name="firstname" id="firstname" class="form-control my-2 p-3"  >
                            <span id="firstnameerror" style="color: red; font-size : 13px;"></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" placeholder="Enter Lastname" name="lastname" id="lastname" class="form-control my-2 p-3" required>
                            <!-- <span id="passworderror" style="color: red; font-size : 13px;"></span> -->
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" placeholder="Enter Mobile No" name="mobileno" id="mobileno" class="form-control my-2 p-3" required>
                            <span id="mobilenoerror" style="color: red; font-size : 13px;"></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="email" placeholder="Enter Email Address" name="email" id="email" class="form-control my-2 p-3" required> 
                            <!-- <span id="passworderror" style="color: red; font-size : 13px;"></span> -->
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" placeholder="Enter Password" name="password" id="password" class="form-control my-3 p-3" required>
                            <span id="passworderror" style="color: red; font-size : 13px;"></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="submit"   class="btn btn-block btn-dark my-2" name="submit" ></input>
                        </div>
                    </div>
                </form>
                
                
                <p class="my-3">have an account ? <a href="login.php">LogIn here!</a></p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php' ?>
<script>
    function validateForm(){
        const mobileno = document.getElementById("mobileno").value;
        const firstname = document.getElementById("firstname").value;
        const lastname = document.getElementById("lastname").value;
        const email = document.getElementById("email").value;
        const mobilenoerror = document.getElementById("mobilenoerror");
        const password = document.getElementById("password").value;
        const passworderror = document.getElementById("passworderror");

        if(isNaN(mobileno)){
            mobilenoerror.innerHTML = "Mobile no always digit so please type a digit"
            return false;
        }
        const length = mobileno.length;
        if(length != 10){
            mobilenoerror.innerHTML = "Mobile no must be 10 digit.."
            return false;
        }
        if(password.length < 8){
            passworderror.innerHTML = "Password length must be 8 character.."
            return false;
        }
    }
</script>