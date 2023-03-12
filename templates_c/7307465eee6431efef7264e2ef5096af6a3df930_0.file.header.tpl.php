<?php
/* Smarty version 4.0.0, created on 2023-03-12 18:06:13
  from 'C:\xampp\htdocs\Major-proj-2\templates\user\layouts\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_640e0685a187d3_87034288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7307465eee6431efef7264e2ef5096af6a3df930' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Major-proj-2\\templates\\user\\layouts\\header.tpl',
      1 => 1678640771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640e0685a187d3_87034288 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $_smarty_tpl->tpl_vars['g_base_url']->value;?>
/templates/assets/uploadImage/Logo/favicon.png">

    <style type="text/css">
        @media print {
            #printbtn {
                display: none;
            }
        }
    </style>
    <title>Cafeteen</title>

    
    <link href="<?php echo $_smarty_tpl->tpl_vars['g_base_url']->value;?>
\templates\assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">

            <link href="<?php echo $_smarty_tpl->tpl_vars['g_base_url']->value;?>
\templates\assets/css/style.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
    <div id="main-wrapper">
        <div class="header">
            <marquee class="d-lg-none d-block">
                <div class="ml-lg-5 pl-lg-5 ">

                    <b id="ti" class="ml-lg-5 pl-lg-5"></b>


                </div>
            </marquee>
            <nav class="navbar top-navbar navbar-expand-md navbar-light">

                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">


                        <b><img src="<?php echo $_smarty_tpl->tpl_vars['g_base_url']->value;?>
\templates\assets/uploadImage/Logo/logo.jpg" alt="homepage" class="dark-logo"
                                style="width:60%;height:auto;" /></b>

                    </a>
                </div>

                <div class="navbar-collapse">

                    <ul class="navbar-nav mr-auto mt-md-0">

                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  "
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  "
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>



                    </ul>
                    <marquee behavior="scroll" direction="left" scrollamount="1">
                        <p style="color: red;">
                            Welcome to cafeteen we are here with best food and best Quality..
                        </p>
                    </marquee>
                </div>
            </nav>
        </div>
     <?php }
}
