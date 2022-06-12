<?php
require_once ADMINTEMPLATES."header.php";
?>

<div class="container mt-5">
    <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-products">
                <div class="tm-product-table-container">
                    <table class="table table-hover tm-table-small tm-product-table">
                        <thead class="sticky-top">
                            <tr>
                                <th scope="col">Product ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Stock</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($data['products'] as $product){
                                    echo '
                                    <tr>
                                    <td class="tm-product-name">'.$product['productId'].'</td>
                                        <td><img src="'.ASSETS.'main/images/products/'.$product['Image'].'" class="img-fluid" alt=""></td>
                                        <td class="tm-product-name">'.$product['title'].'</td>
                                        <td>'.$product['price'].'</td>
                                        <td>'.$product['stock'].'</td>
                                        <td>
                                            <a href="'.URLROOT.'admin/removeProduct/'.$product['productId'].'" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- table container -->
                <button class="btn btn-primary btn-block text-uppercase mb-3" type="button" data-toggle="modal"
                    data-target="#add-product">Add
                    new
                    product</button>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
                <h2 class="tm-block-title">Product Categories</h2>
                <div class="tm-product-table-container">
                    <table class="table tm-table-small tm-product-table">
                        <tbody>
                            <?php
                                foreach ($data['categories'] as $category){
                                    echo '
                            <tr>
                                <td class="tm-product-name">'.$category['category'].'</td>
                                <td class="text-center d-flex justify-content-end">
                                    <a href="'.URLROOT.'admin/removeCategory/'.$category['category'].'" class="tm-product-delete-link">
                                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                    </a>
                                </td>
                            </tr>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
                <!-- table container -->
                <button class="btn btn-primary btn-block text-uppercase mb-3" type="button" data-toggle="modal"
                    data-target="#add-category">
                    Add new category
                </button>
            </div>
        </div>
    </div>
</div>

<?php 
    include ROOTPATH."views/admin/products/product-form.php";
    ?>
<?php 
    include ROOTPATH."views/admin/products/category-form.php";
    ?>
<?php
require_once ADMINTEMPLATES."footer.php";
?>