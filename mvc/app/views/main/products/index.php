<?php
require_once TEMPLATES."header.php";
?>


<!-- Header Start -->
<div class="page-heading products-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>new arrivals</h4>
                    <h2>Our Products</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Search Start -->
<form class="input-group container w-50 mt-5" action="<?=URLROOT?>home/search">
    <input type="search" class="form-control rounded-0" name="keywords" placeholder="Search" aria-label="Search"
        aria-describedby="search-addon" />
    <button type="submit" class="btn btn-danger rounded-0"><i class="bi bi-search"></i> search</button>
</form>
<!-- Search End -->

<!-- Products Start -->
<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">All Products</li>
                        <li data-filter=".des">Featured</li>
                        <li data-filter=".dev">Flash Deals</li>
                        <li data-filter=".gra">Last Minute</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="filters-content">
                    <div class="row grid">
                        <!-- Start Products -->
                        <?php
                            foreach ($data['products'] as $product){
                                echo '
                                    <div class="col-lg-4 col-md-4 all des">
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
            <div class="col-md-12">
                <ul class="pages">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Products End -->


<?php
require_once TEMPLATES."footer.php";
?>