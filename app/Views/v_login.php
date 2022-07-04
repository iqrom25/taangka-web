<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/vendor/login/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/login/fonts/iconic/css/material-design-iconic-font.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/login/vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/login/vendor/css-hamburgers/hamburgers.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/login/vendor/animsition/css/animsition.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/login/vendor/select2/select2.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/login/vendor/daterangepicker/daterangepicker.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/login/css/util.css" />
    <link rel="stylesheet" type="text/css" href="/vendor/login/css/main.css" />
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('/vendor/login/images/bg-01.jpg')">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="/login/auth">
                    <?= csrf_field(); ?>
                    <span class="login100-form-logo">
                        <img src="/img/logo.png" style="width: 80%" />
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27"> Admin Login </span>


                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100 <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" type="text" name="username" placeholder="Username" value="<?= old('username'); ?>" autocomplete="off" />
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        <div class="invalid-feedback text-white">
                            <?= $validation->getError('username'); ?>
                        </div>

                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100 <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" type="password" name="password" placeholder="Password" />
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        <div class="invalid-feedback text-white">
                            <?= $validation->getError('password'); ?>
                        </div>
                    </div>
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="/vendor/login/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="/vendor/login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="/vendor/login/js/main.js"></script>
</body>

</html>