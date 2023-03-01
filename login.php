<link rel="stylesheet" href="assets/css/popup_style.css">
<style>
  .footer1 {
    position: fixed;
    bottom: 0;
    width: 100%;
    color: #5c4ac7;
    text-align: center;
  }

  div.login-form-upperdiv {
    margin: 0px 16rem;
  }

  .login-form {
    background: inherit;
    backdrop-filter: blur(10px);
  }
</style>
<?php
include('./constant/layout/customHeader.php');
?>
<div id="main-wrapper">
  <div class="unix-login">

    <div class="container-fluid" style="background-image: url('assets/myimages/background.jpg');
      background-color: #ffffff;background-size:cover;min-height:100vh">
      <div class="row">
        <div class="col-lg-3  login-form-upperdiv">
          <div class="login-content">
            <div class="login-form">
              <center><img src="./assets/uploadImage/Logo/logo.png" style="width: 100%;"></center><br>
              <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="loginForm">
                <div class="form-group">

                  <input type="text" name="username" id="username" class="form-control" placeholder="Username" required="">

                </div>
                <div class="form-group">

                  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
 
                  <button type="submit" name="login" class="f-w-600 btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
          
                <div class="forgot-phone text-right f-right">
                  <a href="#" class="text-right f-w-600"> Forgot Password?</a>
                </div>
                <div class="form-group py-2">
                  Didn't have account? <a href="./register.php" rel="noopener noreferrer" style="color:red">Signup</a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php
include('./constant/layout/customFooter.php');
