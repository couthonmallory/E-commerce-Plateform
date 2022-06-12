<?php
require_once ADMINTEMPLATES."header.php";
?>

<style>
.col {
    width: auto;
}
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <p class="text-dark mt-5 mb-5">Welcome back, <b>Admin</b></p>
        </div>
    </div>
    <!-- row -->
    <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
            <div class="tm-bg-primary-dark tm-block">
                <h2 class="tm-block-title">Latest Hits</h2>
                <canvas id="lineChart"></canvas>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
            <div class="tm-bg-primary-dark tm-block">
                <h2 class="tm-block-title">Performance</h2>
                <canvas id="barChart"></canvas>
            </div>
        </div>
        <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                <h2 class="tm-block-title">Orders List</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ORDER NO.</th>
                            <th scope="col">CLIENT</th>
                            <th class="col">PRODUCT</th>
                            <th class="col">TIMESTAMP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($data['orders'] as $order){
                        echo '
                            <tr>
                                <td><b>#'.$order['order'].'</b></td>
                                <td>'.$order['Nom'].' '.$order['Prenom'].'</td>
                                <td><b>'.$order['title'].'</b></td>
                                <td>'.$order['time_stamp'].'</td>
                            </tr>
                            ';
                        };
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
require_once ADMINTEMPLATES."footer.php";
?>