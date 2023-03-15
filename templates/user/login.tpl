{literal}
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
  .background-SET{
       
      /* background-color: #ffffff; */
      background-size:cover;
      min-height:100vh
  }
</style>
<<<<<<< HEAD
{/literal}
=======
<<<<<<<< HEAD:templates/user/login.tpl
{/literal}
========
<?php
include('./constant/layout/customHeader.php');
require('../DAO/UsersDAO.php');
require('../POJO/UsersPOJO.php');
$usertype='Customer';
if(isset($_POST['username']) && isset($_POST['password']) && isset($usertype)){
    $u= new UsersPOJO();
    $u->setEmail($_POST['username']);
    $u->setPassword($_POST['password']);
    $u->setUserType($usertype);
    $userDao = UsersDAO::validateUser($u);
    // <?php echo $_SERVER['PHP_SELF']
}
?>
>>>>>>>> baa08fb136b2f9687213a0879046da78503f2860:UI/login.php
>>>>>>> 0452cdaf7d084ad40d06787566337105de86dd64
<div id="main-wrapper">
  <div class="unix-login">

    <div class="container-fluid background-SET" style=" background-image: url('{$g_base_url}/templates/assets/myimages/background.jpg');"  >
      <div class="row">
        <div class="col-lg-3  login-form-upperdiv">
          <div class="login-content">
            <div class="login-form">
<<<<<<< HEAD
=======
<<<<<<<< HEAD:templates/user/login.tpl
>>>>>>> 0452cdaf7d084ad40d06787566337105de86dd64
              <center><img src="{$g_base_url}/templates/assets/uploadImage/Logo/logo.png" style="width: 100%;"></center><br>
              
              <form action="" method="post" id="loginForm">
              <div class="form-group">

                {if $redirection}
                    <input type="hidden" name="redirection" value="{$redirection|escape}">
                {/if}
                 </div>
<<<<<<< HEAD
=======
========
              <center><img src="./assets/uploadImage/Logo/logo.png" style="width: 100%;"></center><br>
              
              <form action="" method="post" id="loginForm">
>>>>>>>> baa08fb136b2f9687213a0879046da78503f2860:UI/login.php
>>>>>>> 0452cdaf7d084ad40d06787566337105de86dd64
                <div class="form-group">

                  <input type="text" name="frmuser" id="username" class="form-control" placeholder="Username" required="">

                </div>
                <div class="form-group">

                  <input type="password" name="frmpass" id="password" class="form-control" placeholder="Password" required="">
                </div>

                  <button type="submit" name="login" class="f-w-600 btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
          
                <div class="forgot-phone text-right f-right">
                  <a href="#" class="text-right f-w-600"> Forgot Password?</a>
                </div>
                <div class="form-group py-2">
                  Didn't have account? <a href="register_C_U.php" rel="noopener noreferrer" style="color:red">Signup</a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<<<<<<< HEAD
 
=======
<<<<<<<< HEAD:templates/user/login.tpl
 
========

<?php include('./constant/layout/customFooter.php'); ?>
>>>>>>>> baa08fb136b2f9687213a0879046da78503f2860:UI/login.php
>>>>>>> 0452cdaf7d084ad40d06787566337105de86dd64
