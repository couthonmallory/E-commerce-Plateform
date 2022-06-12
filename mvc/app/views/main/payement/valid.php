<?php
if(!$data['valid']){
    redirect('main/home/index');
}
?>

<?php
require_once TEMPLATES."header.php";
?>

<div style="padding-top : 100px">
</div>

<div class="products">
    <div class="container">
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
            <i class="bi bi-check-circle-fill display-1 text-success"></i><br>
            Payement has been done successfully<br>
            <a href="<?=URLROOT?>home" class="text-danger"><i class="bi bi-arrow-left-circle"></i> Home</a>
        </div>
    </div>
</div>


<?php
require_once TEMPLATES."footer.php";
?>