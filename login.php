<?php
include 'includes/header.php';
$page = 'home';
?>
<main>
    <section class="login-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-6 col-sm-12 col-12">
                    <div class="featured-img"><img class="img-fluid" src="images/login-featured.png" alt=""></div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="login-form">
                        <h3><span>Hello,</span> Welcome back</h3>
                        <h6>New user? <a href="javascript:;">sign up here</a></h6>
                        <div class="input-field"><input type="text" placeholder="Email or Username" /></div>
                        <div class="input-field"><input type="password" placeholder="Password" /></div>
                        <div class="rem-for">
                            <div class="checkbox-field">
                                <input type="checkbox" name="" id="remember-log">
                                <label for="remember-log">Remember me</label>
                            </div>
                            <a href="javascript:;">Forgot password</a>
                        </div>
                        <button class="submit-btn">login now</button>
                        <p><span>or login with</span></p>
                        <ul class="bottom-link">
                            <li><a href="javascript:;"><img class="img-fluid" src="images/google.png" alt=""></a></li>
                            <li><a href="javascript:;"><img class="img-fluid" src="images/facebook.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include 'includes/footer.php';
$page = 'home';
?>