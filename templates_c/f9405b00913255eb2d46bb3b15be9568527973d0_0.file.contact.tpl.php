<?php
/* Smarty version 4.0.0, created on 2023-03-12 23:02:44
  from 'C:\xampp\htdocs\Major-proj-2\templates\user\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_640e4c041b2223_02972076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9405b00913255eb2d46bb3b15be9568527973d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Major-proj-2\\templates\\user\\contact.tpl',
      1 => 1678658562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640e4c041b2223_02972076 (Smarty_Internal_Template $_smarty_tpl) {
?><style>

    div.container{
        background-image: url('{$g_base_url}/templates/assets/myimages/contactBG.jpg');
        background-size: cover;
    }
    hr{
        background: white;
    }
    .contact-form{
        background: rgba(0,0,0, .6);
        color: white;
        margin-top: 100px;
        padding: 20px;
        box-shadow: 0px 0px 10px 3px grey;
    }
    .form-cotrol{
        width: 80%;
        padding: 0.4rem;
        opacity: 50%;
        margin-top: 5px;
        border-radius: 5px;
    }

</style>
<div class="container contact-form">
<h1>Contact Form</h1>
<hr>

<div class="row">

<div class="col-md-6">
<address>Gandhinagar, Bhopal</address>
<p>Email:- cafeteen@gmail.com</p>
<p>Phone:- 6264721665</p>
</div>

<div class="col-md-6">

<form>
<div class="row">
<div class="col-md-2"><label for="name">Name     </label></div>
<div class="col-md-10"><input type="text" id="name" class="form-cotrol"></div>

<div class="col-md-2"><label for="email">Email     </label></div>
<div class="col-md-10"><input type="text" name="" id="email" class="form-cotrol"></div>

<div class="col-md-2"><label>Message</label></div>
<div class="col-md-10"><textarea class="form-cotrol" cols="25" rows="5"></textarea></div>
</div>

<div class="form-group">
<button class="btn btn-primary btn-block">Send</button>
</div>
</form>
</div>

</div>

</div><?php }
}
