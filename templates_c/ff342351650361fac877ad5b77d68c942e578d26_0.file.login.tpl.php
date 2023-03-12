<?php
/* Smarty version 4.0.0, created on 2023-03-12 21:25:39
  from 'C:\xampp\htdocs\Major-proj-2\templates\user\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_640e3543b67d14_66241911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff342351650361fac877ad5b77d68c942e578d26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Major-proj-2\\templates\\user\\login.tpl',
      1 => 1678652737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640e3543b67d14_66241911 (Smarty_Internal_Template $_smarty_tpl) {
?>
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

<div id="main-wrapper">
  <div class="unix-login">

    <div class="container-fluid background-SET" style=" background-image: url('<?php echo $_smarty_tpl->tpl_vars['g_base_url']->value;?>
/templates/assets/myimages/background.jpg');"  >
      <div class="row">
        <div class="col-lg-3  login-form-upperdiv">
          <div class="login-content">
            <div class="login-form">
              <center><img src="<?php echo $_smarty_tpl->tpl_vars['g_base_url']->value;?>
/templates/assets/uploadImage/Logo/logo.png" style="width: 100%;"></center><br>
              
              <form action="" method="post" id="loginForm">
              <div class="form-group">

                <?php if ($_smarty_tpl->tpl_vars['redirection']->value) {?>
                    <input type="hidden" name="redirection" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redirection']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                <?php }?>
                 </div>
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


 <?php }
}
