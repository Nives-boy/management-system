<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration System</title>
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/grid.min.css"> 
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <style>
        .mt-40 {
            margin: 40px auto !important;
        }
        .font{
            font-size: 20px !important;
        }
        .navbar-nav{
            position: absolute;
            right: 10px;
        }
        .logo{
            margin-left: 10px;
        }
        .mt-40 {
            margin: 40px auto;
        }
        .upform, .regform, 
        .logform, .reset, .chk{
            box-shadow: 0 0 8px #c2c2c2;
        }
        .action{
            padding: 0 10px !important;
        }
        .pr-4{
            padding-right: 10px !important;
        }
    </style>
</head>
<body>
    <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h3 class="text-light logo">User-management</h3>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <?php
                        if (!$this->session->userdata("isLoggedIn")) { ?>
                            <li><a class="nav-link font" href="<?php echo base_url('auth') ?>">Login</a></li>
                            <li><a class="nav-link font" href="<?php echo base_url('auth/register') ?>">Signup</a></li>
                        <?php } else { ?>
                            <li><a class="nav-link font" href="<?php echo base_url('auth/logout') ?>">Logout</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
    </header>

    <!-- <div class="mobile-nav">
    <ul>    
        <?php if (!$islogin) { ?>
        <li><a href="<?php echo base_url('auth') ?>">Login</a></li>
        <li><a href="<?php echo base_url('register') ?>">Signup</a></li>
        <?php } else { ?>
        <li><a href="<?php echo base_url('logout') ?>">Logout</a></li>
        <?php } ?>
    </ul>
</div>
 -->