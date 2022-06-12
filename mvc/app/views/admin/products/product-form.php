<div class="modal fade" id="add-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class=" modal-body tm-bg-primary-dark tm-block tm-block-h-auto">

                <div class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-circle-fill"></i>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-block-title d-inline-block">Add Product</h2>
                    </div>
                </div>
                <div class="row tm-edit-product-row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <form action="<?=URLROOT?>admin/setProduct" class="tm-edit-product-form" method="post">
                            <div class="form-group mb-3">
                                <label for="title">Product Title
                                </label>
                                <input id="title" name="title" type="text" class="form-control validate" required />
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control validate" name="description" rows="3" required></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="category">Category</label>
                                <select class="custom-select tm-select-accounts" name="category" id="category" required>
                                    <option selected>Select category</option>
                                    <?php
                                    foreach( $data['categories'] as $category){
                                    echo '<option value="'.$category['category'].'">'.$category['category'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="price">Price
                                    </label>
                                    <input id="price" name="price" type="number" class="form-control validate"
                                        data-large-mode="true" required />
                                </div>
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="stock">Units In Stock
                                    </label>
                                    <input id="stock" name="stock" type="number" class="form-control validate"
                                        required />
                                </div>
                            </div>

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                        <div class="tm-product-img-dummy mx-auto">
                            <i class="fas fa-cloud-upload-alt tm-upload-icon"
                                onclick="document.getElementById('fileInput').click();"></i>
                        </div>
                        <div class="custom-file mt-3 mb-3">
                            <input id="fileInput" type="file" style="display:none;" />
                            <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD PRODUCT IMAGE"
                                onclick="document.getElementById('fileInput').click();" />
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block text-uppercase">Add
                            Product
                            Now</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>