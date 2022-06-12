<footer class="tm-footer row tm-mt-small">
    <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <?=date("Y")?> GIVE'N'TAKE Co., Ltd.
        </p>
    </div>
</footer>
</div>

<script src="<?=ASSETS."admin/"?>js/jquery-3.3.1.min.js"></script>
<!-- https://jquery.com/download/ -->
<script src="<?=ASSETS."admin/"?>js/moment.min.js"></script>
<!-- https://momentjs.com/ -->
<script src="<?=ASSETS."admin/"?>js/Chart.min.js"></script>
<!-- http://www.chartjs.org/docs/latest/ -->
<script src="<?=ASSETS."admin/"?>js/bootstrap.min.js"></script>
<!-- https://getbootstrap.com/ -->
<script src="<?=ASSETS."admin/"?>js/tooplate-scripts.js"></script>
<script>
Chart.defaults.global.defaultFontColor = 'white';
let ctxLine,
    ctxBar,
    optionsLine,
    optionsBar,
    configLine,
    configBar,
    lineChart,
    barChart;
// DOM is ready
$(function() {
    drawLineChart(); // Line Chart
    drawBarChart(); // Bar Chart

    $(window).resize(function() {
        updateLineChart();
        updateBarChart();
    });
})
</script>
</body>

</html>