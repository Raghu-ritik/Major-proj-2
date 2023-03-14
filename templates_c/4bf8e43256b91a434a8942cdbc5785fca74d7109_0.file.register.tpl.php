<?php
/* Smarty version 4.0.0, created on 2023-03-12 21:25:19
  from 'C:\xampp\htdocs\Major-proj-2\templates\user\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_640e352f1087d0_69138594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bf8e43256b91a434a8942cdbc5785fca74d7109' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Major-proj-2\\templates\\user\\register.tpl',
      1 => 1678652715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640e352f1087d0_69138594 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    div#main-wrapper {
    background-image: url('<?php echo $_smarty_tpl->tpl_vars['g_base_url']->value;?>
\\templates\\assets/myimages/background.jpg');
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
                    <p class="text-center">Have an account? <a href="login_C_U.php">Log In</a> </p>
                </form>
            </article>
        </div> <!-- card.// -->

    </div>
    <!--container end.//-->
</div>
<?php }
}
