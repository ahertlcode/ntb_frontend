<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="bulma/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="custom/css/master.css">
    <title>NTB::Password reset</title>
</head>
<body>
<div class="block has-background-black has-text-white firstblock">
    <div class="columns" style="font-size:12px; height:30px;">
        <div class="column is-hidden-touch">&nbsp;</div>
        <div class="column is-hidden-touch">&nbsp;</div>
        <div class="column" style="text-align:right; padding:10px; padding-right:20px;"><i class="fa fa-envelope"></i>&nbsp;info@ntbs.com&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;+234-803-300-3000&nbsp;&nbsp;&nbsp;<a href="signup.php" class="link">Sign Up</a>&nbsp;|&nbsp;<a href="signin.php" class="link">Sign-In</a></div>
    </div>
    </div>
    <div class="block secondblock">
        <div class="navbar is-primary" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a href="javascript:void(0);" class="navbar-item is-inverse">
                    <h1 class="title is-1">New Tech Bs</h1>
                </a>
                <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div class="navbar-end navbar-menu" id="navMenu">
                <a href="index.php" class="navbar-item"><i class="fa fa-home"></i>&nbsp;Home</a>
                <a href="aboutus.php" class="navbar-item">About NTB</a>
                <a href="contactus.php" class="navbar-item">Contact us</a>
                <a href="faqs.php" class="navbar-item">FAQ</a>
            </div>
        </div>
    </div>
    <div class="block columns">
        <div class="column is-desktop">&nbsp;</div>
        <div ng-app="ntb-app1" ng-controller="passwordReset" class="column">
            <div class="notification-hide">{{notify}}</div>
            <div class="card">

                <div class="card-header-title">
                    <h1 class="title is-3">
                        Reset Password
                    </h1>
                </div>
                <div class="card-content">
                    <form class="form">
                        <div class="field">
                            <label for="email" class="label">E-mail</label>
                            <input class="input" type="email" id="txtEmail" ng-model="reset.email" >
                        </div>
                        <div class="field">
                            <button class="button is-primary" id="btnValidate" ng-click="doValidate();" right>Validate</button>
                        </div>
                    </form>
                </div>
                <div ng-if="validate != false" class="card-content">
                    <form class="form">
                        <div class="field">
                            <label for="verifycode" class="label">Verification Code</label>
                            <input id="txtVerifyCode" type="text" class="input" ng-model="reset.token">
                        </div>
                        <div class="field">
                            <label for="password" class="label">New Password</label>
                            <input class="input" type="password" id="txtPassword" ng-model="reset.password" >
                        </div>
                        <div class="field">
                            <label for="password" class="label">New Password</label>
                            <input class="input" type="password" id="txtCPassword" ng-model="reset.password_confirmation" >
                        </div>
                        <div class="field">
                            <button id="btnReset" type="button" class="button is-primary" ng-click="doReset();" right>Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="column is-desktop">&nbsp;</div>
    </div>
    <footer class="footer columns">
        <div class="footer-start column">
            &copy; 2018 NTB SYSTEM
        </div>
        <div class="footer-end column has-text-right">
            powered by:&nbsp;AHERTECH&trade;
        </div>
    </footer>
<script src="jquery/jquery.min.js"></script>
<script src="angularjs/angular.min.js"></script>
<script src="custom/js/master.js"></script>
<script src="custom/js/password.js"></script>
<script>
        document.addEventListener('DOMContentLoaded', () => {
            //Get all navbar-burger elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            //Check if there are any navbar burgers
            if ($navbarBurgers.length > 0) {
                //Add a click event on each of them
                $navbarBurgers.forEach(el => {
                    el.addEventListener('click', () => {

                        //Get the target from the data-target attribute
                        const target = el.dataset.target;
                        const $target = document.getElementById(target);

                        //Toggle the is-active class on both the navbar-burger and the navbar-menu
                        el.classList.toggle('is-active');
                        $target.classList.toggle('is-active');
                    });
                });
            }
        });
    </script>
</body>
</html>