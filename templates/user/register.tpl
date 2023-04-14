<style>
    div#main-wrapper {
    background-image: url('{$g_base_url}\\templates\\assets/myimages/background.jpg');
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
                <form action="" method="POST" >
                    {if $registerMSG neq ''}
                        <div class="form-group input-group">
                            <div class="alert alert-warning" role="alert">
                                This is a warning alert—check it out!
                            </div>
                        </div> <!-- form-group// -->
                    {/if}
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input  class="form-control" placeholder="Full name" type="text" name="FullName">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input  class="form-control" placeholder="Email address" type="email" name="Emails">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <select class="custom-select1" style="max-width: 75px;">
                            <option selected="">+91</option>
                        </select>
                        <input  class="form-control" placeholder="Phone number" type="text" name="PhoneNums">
                    </div> <!-- form-group// -->

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Create password" type="password" name="Passwd">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Repeat password" type="password" name="ConfPasswd">
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" name="register" class="btn btn-primary btn-block"> Create Account </button>
                    </div> <!-- form-group// -->
                    </form>
                    <p class="text-center">Have an account? <a href="login_C_U.php">Log In</a> </p>
            </article>
        </div> <!-- card.// -->

    </div>
    <!--container end.//-->
</div>
