<!DOCTYPE html>
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

    <link rel="icon" type="image/png" sizes="16x16" href="{$g_base_url}/templates/assets/uploadImage/Logo/favicon.png">

    <style type="text/css">
        @media print {
            #printbtn {
                display: none;
            }
        }
    </style>
    <title>Cafeteen</title>

    {* <link href="{$g_base_url}\templates\assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="{$g_base_url}\templates\assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="{$g_base_url}\templates\assets/css/lib/owl.theme.default.min.css" rel="stylesheet" /> *}

    <link href="{$g_base_url}\templates\assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">

    {* <link href="{$g_base_url}\templates\assets/css/helper.css" rel="stylesheet">
    <link rel="stylesheet" href="{$g_base_url}\templates\assets/css/lib/html5-editor/bootstrap-wysihtml5.css" /> *}
    {* <link href="{$g_base_url}\templates\assets/css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="{$g_base_url}\templates\assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="{$g_base_url}\templates\assets/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="{$g_base_url}\templates\assets/css/lib/datepicker/bootstrap-datepicker3.min.css" rel="stylesheet"> *}
    <link href="{$g_base_url}\templates\assets/css/style.css" rel="stylesheet">
    <link href="{$g_base_url}\templates\assets/css/layouts/header.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
    <div id="main-wrapper">
        <div class="header">
            <marquee class="d-lg-none d-block">
                <div class="ml-lg-5 pl-lg-5 ">

                    <b id="ti" class="ml-lg-5 pl-lg-5"></b>


                </div>
            </marquee>
            <nav class="navbar top-navbar navbar-expand-md navbar-light" id="navbar">

                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">


                        <b><img src="{$g_base_url}\templates\assets/uploadImage/Logo/logo.jpg" alt="homepage" class="dark-logo"
                                style="width:60%;height:auto;" /></b>

                    </a>
                </div>
                <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="contact.php">Contactus</a></li>
                <li><a href="knowmore.php">Know more</a></li>
                <li><a href="logout.php">logout</a></li>
              </ul>
              <a class="btn-book-a-table" href="cart.php"> <i class="fa fa-cart-plus" aria-hidden="true"></i> &nbsp;&nbsp;  Cart</a>
              <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
              <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
                <div class="navbar-collapse">


                    <marquee behavior="scroll" direction="left" scrollamount="1">
                        <p style="color: red;">
                            Welcome to cafeteen we are here with best food and best Quality..
                        </p>
                    </marquee>
                </div>
            </nav>

        </div>