<div class="modal fade" id="add-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class=" modal-body tm-bg-primary-dark tm-block tm-block-h-auto">

                <div class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-circle-fill"></i>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-block-title d-inline-block">Add Category</h2>
                    </div>
                </div>
                <form action="<?=URLROOT?>admin/addCategory" class="tm-edit-product-form">
                    <div class="form-group mb-3">
                        <label for="category">Category Name
                        </label>
                        <input id="category" name="category" type="text" class="form-control validate" required />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Add
                        Category
                        Now</button>
                </form>
            </div>
        </div>
    </div>