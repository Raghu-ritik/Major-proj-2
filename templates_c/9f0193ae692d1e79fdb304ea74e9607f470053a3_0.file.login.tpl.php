<?php
/* Smarty version 4.0.0, created on 2023-03-19 07:49:00
  from 'C:\xampp\htdocs\Major-proj-2\templates\admin\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6416b05cb1da40_48152151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f0193ae692d1e79fdb304ea74e9607f470053a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Major-proj-2\\templates\\admin\\login.tpl',
      1 => 1679208539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6416b05cb1da40_48152151 (Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
    .registration-form{
      /* background: #f7f7f7; */
      padding: 20px;
     
      margin: 100px 0px;
      background: inherit;
      backdrop-filter: blur(10px);
    }
  .Admin-Back{
       
      background-color: #ffffff;
      background-size:cover;
      min-height:100vh
  }
</style>

<div class="container-fluid Admin-Back" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['g_base_url']->value;?>
/templates/assets/myimages/back.jpg');">
 <div class="row">
   <div class="col-sm-4">
   </div>
   <div class="col-sm-4">
    
    <!--====registration form====-->
    <div class="registration-form">
      <h4 class="text-center">Admin Panel</h4>
      <p class="text-success text-center"></p>

      <form action="" method="post">
       
        
        <!--// Email//-->
        <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control"  placeholder="Enter Email" name="MAuser" value="">
            <p class="err-msg">
                
            </p>
        </div>
        
        <!--//Password//-->
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control"  placeholder="Enter Password" name="MApass">
            <p class="err-msg">
                 
            </p>
        </div>

        
        <button type="submit" class="btn btn-secondary" name="login">Login</button>
      </form>
    </div>
   </div>
   <div class="col-sm-4">
   </div>
 </div>
  
</div>

 <?php }
}
