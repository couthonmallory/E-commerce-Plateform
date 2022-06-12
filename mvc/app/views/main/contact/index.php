<?php
require_once TEMPLATES."header.php";
?>

<!-- Page Content -->
<div class="page-heading contact-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>contact us</h4>
                    <h2>let’s get in touch</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="find-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Our Location on Maps</h2>
                </div>
            </div>
            <div class="col-md-8">
                <!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                <div id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.3198919991637!2d-6.869790584433855!3d33.98431622875325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76ce7f9462dd1%3A0x2e9c39cfa1d9e8d7!2sNational%20school%20For%20Computer%20Science!5e0!3m2!1sen!2sma!4v1653351405741!5m2!1sen!2sma"
                        width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="left-content">
                    <h4>About our office</h4>
                    <p>Our office the main office of CINDH Club at ENSIAS</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once TEMPLATES."footer.php";
?>