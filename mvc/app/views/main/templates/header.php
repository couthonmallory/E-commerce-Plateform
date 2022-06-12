<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title><?=$data['title']?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="<?=ASSETS."main/"?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?=ASSETS."main/"?>css/fontawesome.css">
    <link rel="stylesheet" href="<?=ASSETS."main/"?>css/main.css">
    <link rel="stylesheet" href="<?=ASSETS."main/"?>css/owl.css">

</head>
<style>
#navbarResponsive {
    justify-content: flex-end !important;
}
</style>

<body>


    <?php
        session_start();
        if($_SESSION['type']=='ADMIN'){
        echo '
    <a href="'.URLROOT.'admin" class="btn btn-danger text-center rounded-circle d-flex align-items-center justify-content-center"
    style="position:fixed;bottom:20px;right:20px;font-size:30px; width:60px; height:60px; padding:0px; margin:0px;z-index:">
    <i class="bi bi-gear"></i>
    </a>
        ';
        }
    ?>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header Start -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?=URLROOT?>home">
                    <img style="width:300px" src="<?=ASSETS?>main/images/logo-inline.png" alt="GIVE'N'TAKE">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?=$data['active'][0]?>">
                            <a class="nav-link" href="<?=URLROOT?>home">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item <?=$data['active'][1]?>">
                            <a class="nav-link" href="<?=URLROOT?>home/products">Our Products</a>
                        </li>
                        <li class="nav-item <?=$data['active'][2]?>">
                            <a class="nav-link" href="<?=URLROOT?>home/about">About Us</a>
                        </li>
                        <li class="nav-item <?=$data['active'][3]?>">
                            <a class="nav-link" href="<?=URLROOT?>home/contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-danger rounded-0" href="<?=URLROOT?>home/cart"><i
                                    class="bi bi-basket3-fill"></i> Cart </a>
                        </li>
                        <?php
                        session_start();
                        if(isset($_SESSION['user'])) {
                            echo
                            '<li class="nav-item">
                                <a class="nav-link btn btn-danger rounded-0" href="'.URLROOT.'Users/logout">Logout
                        <i class="bi bi-box-arrow-right"></i>
                        </a>
                        </li>';
                        } else {
                        echo
                        '<li class="nav-item">
                            <a class="nav-link btn btn-danger rounded-0" href="'.URLROOT.'Users/login">Login
                        <i class="bi bi-person"></i>
                        </a>
                        </li>';
                        }?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header End -->