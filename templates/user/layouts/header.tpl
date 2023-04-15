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
    <title>Cafeteen</title>
    <link href="{$g_base_url}\templates\assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="{$g_base_url}\templates\assets/css/style.css" rel="stylesheet">
    <link href="{$g_base_url}\templates\assets/css/layouts/header.css" rel="stylesheet">
    {literal}
    <style>
        .Nav-itms-no{
                display: none;
        }
        @media only screen and (max-width: 600px) {
            .header{
                background-color: antiquewhite;
                height: 80px;
            }
            .header .Nav-itms-no{
                display: block;
            }
            .navbar{
                padding: 0;
            }
            .Nav-itms-no div div{
                padding: 0.3rem 1rem;
                text-align: center;
            }
            

        }
    </style>
    {/literal}
</head>

<body class="fix-header fix-sidebar">
    <div id="main-wrapper">
        <div class="header">
            <div class="Nav-itms-no container ">
                <div class="row" >
                    <div class="col-4">
                        <a href="dashboard.php">Dashboard</a>
                    </div>
                    <div class="col-4">
                        <a href="contact.php">Contactus</a>
                    </div>
                    <div class="col-4">
                        <a href="track_order.php">track order</a>
                    </div>
                    <div class="col-4">
                        <a href="knowmore.php">Know more</a>
                    </div>
                    <div class="col-2">
                        <a href="logout.php">logout</a>
                    </div>
                    <div class="col-6">
                        <a class="btn-book-a-table" href="cart.php"> <i class="fa fa-cart-plus" aria-hidden="true"></i> &nbsp;&nbsp;  Cart</a>
                    </div>
                    
                    </div>
            </div>
            <nav class="navbar top-navbar navbar-expand-md navbar-light" id="navbar">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">
                            <b><img src="{$g_base_url}\templates\assets/uploadImage/Logo/logo.jpg" alt="homepage" class="dark-logo"
                                    style="width:60%;height:auto;" /></b>
                        </a>
                    </div>
                    <ul class="">
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="contact.php">Contactus</a></li>
                        <li><a href="knowmore.php">Know more</a></li>
                        <li><a href="logout.php">logout</a></li>
                    </ul>
                    <a class="btn-book-a-table" href="cart.php"> <i class="fa fa-cart-plus" aria-hidden="true"></i> &nbsp;&nbsp;  Cart</a>
                    <marquee behavior="scroll" direction="left" scrollamount="2">
                        <p style="color: red;">
                            Welcome to cafeteen we are here with best food and best Quality..
                        </p>
                    </marquee>
            </nav>

        </div>