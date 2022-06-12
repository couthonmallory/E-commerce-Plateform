<?php
    session_start();
    if (!$_SESSION['type'] == 'ADMIN') {
        redirect('home');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN | <?=$data['title']?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="<?=ASSETS."admin/"?>css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="<?=ASSETS."admin/"?>css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="<?=ASSETS."admin/"?>css/main.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>

<a href="<?=URLROOT?>home"
    class="btn btn-danger text-center rounded-circle d-flex align-items-center justify-content-center"
    style="position:fixed;bottom:20px;right:20px;font-size:30px; width:60px; height:60px; padding:0px; margin:0px;z-index:999;">
    <i class="bi bi-shop-window"></i>
</a>

<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.html">
                    <img style="width:300px" src="<?=ASSETS?>main/images/logo-inline.png" alt="GIVE'N'TAKE">
                </a>

                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link <?=$data['active'][0]?>" href="<?=URLROOT?>admin">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?=$data['active'][1]?>" href="<?=URLROOT?>admin/products">
                                <i class="fas fa-shopping-cart"></i>
                                Products
                            </a>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="accounts.html">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li> -->
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="<?=URLROOT?>Users/logout">Logout <i
                                    class="bi bi-box-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>