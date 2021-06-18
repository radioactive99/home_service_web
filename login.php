<?php include 'header.php'; ?>
<section class="login-form">
    <div class="container">
        <div class="row no-gutters login-row">
            <div class="col-lg-5 login-img">
                <img src="image/login.jpg" alt="" class="d-none d-lg-block">
            </div>
            <div class="col-lg-7 px-5 pt-5">
                <h1 class=" py-3">  <a class="navbar-brand font-weight-bold" href="#" style="font-size: 30px;color:rgba(12,36,80,1);">
                    <i class="fa fa-home pr-3 " style="font-size: 50px; color:rgba(12,36,80,1);" aria-hidden="true"></i>Happy Home</a>
                </h1>
                <hr class="mt-0 pt-0">
                <h4>Sign into your account</h4>
                <form action="customer_login.php" method = "post">
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="email" placeholder = "email" name="email" class="form-control my-2 p-3">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" placeholder="password" name="password" class="form-control my-3 p-3">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="submit" class="btn btn-block btn-dark my-2" value="Login"></input>
                        </div>
                    </div>
                    <?php 
                        if(isset($error)){
                            echo  $error ;
                        }
                    ?>
                </form>
                <p class="my-3"><a href="" >Forgot Password</a></p>
                <p class="my-3">Don't have an account ? <a href="signup.php">Register here!</a></p>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>

