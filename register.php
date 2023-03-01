<!------ Include the above in your HEAD tag ---------->
<?php
include('./constant/layout/customHeader.php');
// include('./constant/connect.php');
?>
<style>
    div#main-wrapper {
    background-image: url('assets/myimages/background.jpg');
    background-color: #ffffff;
    background-size: cover;
    min-height: 100vh;
}

.card-bg-trans {
    background: inherit;
    backdrop-filter: blur(7px);
}

.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}

.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;
    z-index: 2;
}

.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}

.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
</style>
<div id="main-wrapper">
    <div class="container">
        <div class="card card-bg-trans">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center text-dark">Create Account</h4>
                <p class="text-center text-dark ">Get started & have a bite of delicious food</p>
                <p>
                    <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> Login via facebook</a>
                    <a href="" class="btn btn-block  btn btn-outline-dark"> <i class="fab fa-google"></i> Login with Google</a>
                </p>
                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p>
                <form>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="" class="form-control" placeholder="Full name" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="" class="form-control" placeholder="Email address" type="email">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <select class="custom-select1" style="max-width: 75px;">
                            <option selected="">+91</option>
                        </select>
                        <input name="" class="form-control" placeholder="Phone number" type="text">
                    </div> <!-- form-group// -->

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Create password" type="password">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Repeat password" type="password">
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
                    </div> <!-- form-group// -->
                    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>
                </form>
            </article>
        </div> <!-- card.// -->

    </div>
    <!--container end.//-->
</div>

<?php
include('./constant/layout/customFooter.php');