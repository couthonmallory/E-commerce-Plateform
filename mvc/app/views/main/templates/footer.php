    <!-- Footer Start -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright &copy; <?=date("Y")?> GIVE'N'TAKE Co., Ltd.
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?=ASSETS."main/"?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=ASSETS."main/"?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="<?=ASSETS."main/"?>js/custom.js"></script>
    <script src="<?=ASSETS."main/"?>js/owl.js"></script>
    <script src="<?=ASSETS."main/"?>js/slick.js"></script>
    <script src="<?=ASSETS."main/"?>js/isotope.js"></script>
    <script src="<?=ASSETS."main/"?>js/accordions.js"></script>


    <script language="text/Javascript">
cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
function clearField(t) { //declaring the array outside of the
    if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
    }
}
    </script>


    </body>

    </html>