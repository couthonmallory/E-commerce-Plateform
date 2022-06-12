<?php
require_once TEMPLATES."header.php";
?>

>
<div style="padding-top : 60px"></div>
<h1 class="text-center m-5">Payement</h1>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col col-md-6">
            <!-- Credit card form content -->
            <div class="tab-content">
                <!-- credit card info-->
                <div id="credit-card" class="tab-pane fade show active pt-3">
                    <form role="form" onsubmit="event.preventDefault()">
                        <div class="form-group">
                            <label for="username">
                                <h6>Card Owner</h6>
                            </label>
                            <input type="text" name="username" placeholder="Card Owner Name"
                                class="form-control rounded-0" required>
                        </div>
                        <div class="form-group"> <label for="cardNumber">
                                <h6>Card number</h6>
                            </label>
                            <div class="input-group">
                                <input type="text" name="cardNumber" placeholder="Valid card number"
                                    class="form-control rounded-0" required>
                                <div class="input-group-append ">
                                    <span class="input-group-text text-muted rounded-0">
                                        <i class="fab fa-cc-visa mx-1"></i>
                                        <i class="fab fa-cc-mastercard mx-1"></i>
                                        <i class="fab fa-cc-amex mx-1"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>
                                        <span class="hidden-xs">
                                            <h6>Expiration Date</h6>
                                        </span>
                                    </label>
                                    <div class="input-group">
                                        <input type="number" placeholder="MM" name="" class="form-control rounded-0"
                                            required>
                                        <input type="number" placeholder="YY" name="" class="form-control rounded-0"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-4">
                                    <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                        <h6>CVV</h6>
                                    </label>
                                    <input type="password" required class="form-control rounded-0" placeholder="123">
                                </div>
                            </div>
                        </div>
                        <div>
                            <a type="submit" class=" btn btn-danger rounded-0 btn-block shadow-sm"
                                href="<?=URLROOT?>home/checkPayement/<?=$data['product']?>">
                                Confirm
                                Payment</a>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- End -->
</div>


<?php
require_once TEMPLATES."footer.php";
?>