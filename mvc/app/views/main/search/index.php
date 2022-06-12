<?php
require_once TEMPLATES."header.php";
?>

<div style="padding-top : 100px">
    <form class="input-group container w-50 mt-5" action="<?=URLROOT?>home/search">
        <input type="search" class="form-control rounded-0" name="keywords" placeholder="Search" aria-label="Search"
            aria-describedby="search-addon" />
        <button type="submit" class="btn btn-danger rounded-0"><i class="bi bi-search"></i> search</button>
    </form>
</div>

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filters-content">
                    <div class="row grid">
                        <!-- Start Products -->
                        <?php
                        if(!empty($data['products'])){
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
                        } else {
                            echo '
                            <div class="col all des" style = "
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
                            Nothing found, try searching again.
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