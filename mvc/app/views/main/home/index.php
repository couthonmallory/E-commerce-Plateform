<?php
require_once TEMPLATES."header.php";
?>

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <h4>Best Offer</h4>
                <h2>New Arrivals On Sale</h2>
            </div>
        </div>
        <div class="banner-item-02">
            <div class="text-content">
                <h4>Flash Deals</h4>
                <h2>Get your best products</h2>
            </div>
        </div>
        <div class="banner-item-03">
            <div class="text-content">
                <h4>Last Minute</h4>
                <h2>Grab last minute deals</h2>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<!-- Search Bar Start -->
<form class="input-group container w-50 mt-5" action="<?=URLROOT?>home/search">
    <input type="search" class="form-control rounded-0" name="keywords" placeholder="Search" aria-label="Search"
        aria-describedby="search-addon" />
    <button type="submit" class="btn btn-danger rounded-0"><i class="bi bi-search"></i> search</button>
</form>
<!-- Search Bar End -->

<!-- Latest Products Start -->
<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest Products</h2>
                    <a href="<?=URLROOT?>home/products">view all products <i class="fa fa-angle-right"></i></a>
                </div>
            </div>

            <!-- Start Products -->
            <?php
        foreach ($data['products'] as $product){
            echo '<div class="col-lg-4 col-md-4 all des">
                    <div class="product-item">
                    <a href="'.URLROOT.'home/product/'.$product[0].'"><img src="'.ASSETS.'main/images/products/'.$product[2].'" alt=""></a>
                    <div class="down-content">
                        <a href="'.URLROOT.'home/product/'.$product[0].'"><h4>'.$product[1].'</h4></a>
                        <h6>$'.$product[6].'</h6>
                        <p>'.$product[3].'</p>
                    </div>
                    </div>
                  </div>';
        }
      ?>
            <!-- End Products -->
        </div>
    </div>
</div>
<!-- Latest Products Start -->

<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Creative &amp; Unique Products</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite
                                author nulla.</p>
                        </div>
                        <div class="col-md-4">
                            <a href="<?=URLROOT?>home/products" class="filled-button rounded-0">Purchase Now</a>
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