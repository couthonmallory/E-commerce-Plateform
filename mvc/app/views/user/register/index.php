<?php 
session_start();
if (isset($_SESSION['user'])) {
    redirect('home');
}

require_once USERTEMPLATES."header.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V17</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?=ASSETS."user/"?>images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>css/main.css">
    <!--===============================================================================================-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="<?php echo URLROOT?>Users/addUser" method="post">
                    <span class="login100-form-title p-b-34">
                        Account Register
                    </span>
                    <!-- First Name -->
                    <div class="wrap-input100 rs1-wrap-input100 .validate-input m-b-20" data-validate="Type user name">
                        <input class="input100" type="text" name="fName" placeholder="First Name" required>
                        <span class="focus-input100"></span>
                    </div>
                    <!-- Last Name -->
                    <div class="wrap-input100 rs2-wrap-input100 .validate-input m-b-20" data-validate="Type password">
                        <input class="input100" type="text" name="lName" placeholder="Last Name" required>
                        <span class="focus-input100"></span>
                    </div>
                    <!-- Username -->
                    <div class="wrap-input100 .validate-input m-b-20" data-validate="Type user name">
                        <input class="input100" type="text" name="username" placeholder="User name" required>
                        <span class="focus-input100"></span>
                    </div>
                    <!-- Email -->
                    <div class="wrap-input100 .validate-input m-b-20" data-validate="Type user name">
                        <input class="input100" type="email" name="email" placeholder="Email" required>
                        <span class="focus-input100"></span>
                    </div>
                    <!-- Password -->
                    <div class="wrap-input100 .validate-input m-b-20" data-validate="Type password">
                        <input class="input100" type="password" name="password" placeholder="Password" required>
                        <span class="focus-input100"></span>
                    </div>
                    <!-- Sexe -->
                    <div class="mb-3 wrap-input100">
                        <label class="login100-form-title">Sexe</label>
                        <div class="sexe_container d-flex justify-content-around">
                            <div class="form-check d-inline-block">
                                <input class="form-check-input" type="radio" id="male" name="sexe" value="M" required>
                                <label for="form-check-label">Male</label>
                            </div>
                            <div class="form-check d-inline-block">
                                <input class="form-check-input" type="radio" id="female" name="sexe" value="F" required>
                                <label for="form-check-label">Female</label>
                            </div>
                        </div>
                    </div>
                    <!-- Birthday -->
                    <div class="wrap-input100 .validate-input m-b-20" data-validate="Type password">
                        <input class="input100" type="date" name="bDay" required>
                        <span class="focus-input100"></span>
                    </div>
                    <!-- Address -->
                    <div class="wrap-input100 .validate-input m-b-20">
                        <textarea class="input100 pt-3" placeholder="Enter Your Address" rows="4" name="adresse"
                            required></textarea>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <input type="submit" class="login100-form-btn" value="Register">
                    </div>

                    <!-- <div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>
					</div> -->

                    <div class="w-full text-center p-t-27">
                        <a href="<?php echo URLROOT.'Users/login'?>" class="txt3">
                            Login
                        </a>
                    </div>
                </form>

                <div class="login100-more"
                    style="background-image: url('<?=ASSETS."user/"?>images/bg-02.jpg'); background-size:cover; background-position: center;">
                </div>
            </div>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?=ASSETS."user/"?>vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?=ASSETS."user/"?>vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?=ASSETS."user/"?>vendor/bootstrap/js/popper.js"></script>
    <script src="<?=ASSETS."user/"?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?=ASSETS."user/"?>vendor/select2/select2.min.js"></script>
    <script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
    </script>
    <!--===============================================================================================-->
    <script src="<?=ASSETS."user/"?>vendor/daterangepicker/moment.min.js"></script>
    <script src="<?=ASSETS."user/"?>vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?=ASSETS."user/"?>vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?=ASSETS."user/"?>js/main.js"></script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>

<?php

require_once USERTEMPLATES."footer.php";

?>