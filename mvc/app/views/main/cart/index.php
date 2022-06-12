<?php
require_once TEMPLATES."header.php";
?>

>
<div style="padding-top : 60px"></div>
<h1 class="text-center mt-5">Your Cart</h1>
<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filters-content ">
                    <!-- Start Products -->
                    <?php
                        if(!empty($data['products'])){
                            foreach ($data['products'] as $product){
                                echo '
                                <div class="container mt-2">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-10">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="text-center p-4 "> <img id="main-image" class="img-fluid"
                                                            src="'.ASSETS.'main/images/products/'.$product[3].'" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mt-4 mb-3">
                                                        <h5 class="text-uppercase">'.$product[2].'</h5>
                                                        <div class="price d-flex flex-row align-items-center">
                                                            <span class="act-price">Price $'.$product[7].'</span>
                                                        </div>
                                                    </div>
                                                    <p class="about">'.$product[4].'</p>
                                                    <div class="cart mt-4 align-items-center">
                                                        <a class="btn rounded-0 btn-danger text-uppercase mr-2 px-4" href="'.URLROOT.'home/payement/'.$product['productId'].'"><i class="bi bi-wallet-fill"></i> Buy Now </a>
                                                        <a class="btn rounded-0 btn-outline-danger text-uppercase mr-2 px-4" href="'.URLROOT.'home/removeFromCart/'.$product[0].'"><i class="bi bi-cart-plus-fill"></i> Remove from cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                            ';
                            }
                            } else {
                            echo '

                            <div class="row grid">
                                <div class="col all des" style="
                                                                width: 100%;
                                                                font-size : 30px;
                                                                padding: 100px 2rem;
                                                                margin-right: 15px;
                                                                margin-left: 15px;
                                                                color: #adb5bd;
                                                                text-align: center;
                                                                background-color: #f8f9fa;
                                                                border-radius: 0.5rem;
                                                                ">
                                    Nothing found
                                </div>
                            </div>';
                            }
                            ?>
                    <!-- End Products -->

                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php
require_once TEMPLATES."footer.php";
?>