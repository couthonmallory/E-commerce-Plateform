<?php
require_once TEMPLATES."header.php";
?>

<!-- Page Content -->
<div class="page-heading products-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>new arrivals</h4>
                    <h2>GIVE'N'TAKE products</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-center p-4 "> <img id="main-image" class="img-fluid"
                                src="<?php echo ASSETS.'main/images/products/'.$data['product'][2]?>" /> </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="<?php echo "javascript:history.go(-1)" ?>" class="d-flex align-items-center">
                                    <i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span>
                                </a>
                                <i class="bi bi-cart-plus-fill"></i>
                            </div>
                            <div class="mt-4 mb-3">
                                <h5 class="text-uppercase h2"><?= $data['product'][1] ?></h5>
                                <div class="price d-flex flex-row align-items-center">
                                    <span class="act-price h3">$<?=$data['product'][6]?></span>
                                </div>
                            </div>
                            <p class="about"><?= $data['product'][3] ?></p>
                            <div class="cart mt-4 align-items-center">
                                <a class="btn btn-danger rounded-0 text-uppercase mr-2 px-4"
                                    href="<?=URLROOT?>home/payement/<?=$data['product']['productId']?>"><i
                                        class=" bi bi-wallet-fill"></i>
                                    Buy Now
                                </a>
                                <a class="btn btn-outline-danger rounded-0 text-uppercase mr-2 px-4"
                                    href="<?=URLROOT?>home/addToCart/<?=$data['product'][0]?>"><i
                                        class="bi bi-cart-plus-fill"></i> Add to
                                    cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
require_once TEMPLATES."footer.php";
?>