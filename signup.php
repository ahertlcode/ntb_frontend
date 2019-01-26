<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Tech Binary System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bulma/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="custom/css/master.css">
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
        <div class="column is-two-thirds"></div>
        <div ng-app="ntb-app" ng-controller="signUp" class="column">
            <div class="notification-hide">{{notify}}</div>
            <form class="form">
                <div class="field">
                    <label for="sponsorid" class="label">Enter the name of your sponsor</label>
                    <input id="sponsorid" ng-model="signup.refferer" type="text" class="input" required>
                </div>
                <div class="field">
                    <label for="username" class="label">User name.</label>
                    <input type="text" id="username" ng-model="signup.user_name" class="input" placeholder="Choose a username">
                </div>
                <div class="field">
                    <label for="firstname" class="label">First name</label>
                    <input type="text" id="firstname" ng-model="signup.first_name" class="input" placeholder="Enter your first name.">
                </div>
                <div class="field">
                    <label for="middlename" class="label">Middle name</label>
                    <input type="text" id="middlename" ng-model="signup.middle_name" class="input" placeholder="Enter your middle name.">
                </div>
                <div class="field">
                    <label for="lastname" class="label">Last name</label>
                    <input type="text" id="lastname" ng-model="signup.last_name" class="input" placeholder="Enter your last name.">
                </div>
                <div class="field">
                    <label for="email" class="label">E-mail</label>
                    <input type="email" id="email" ng-model="signup.email" class="input" placeholder="Enter your valid e-mail address.">
                </div>
                <div class="field">
                    <label for="mobile" class="label">Telephone number</label>
                    <input type="tel" ng-model="signup.telephone_numbers" class="input" id="mobile" placeholder="Enter your functional mobile phone number e.g. +2348033003000">
                </div>
                <div class="field">
                    <label for="password" class="label">Choose a password</label>
                    <input type="password" ng-model="signup.password" class="input" id="password">
                </div>
                <div class="field">
                    <label for="password_confirm" class="label">Retype Password</label>
                    <input id="password_confirm" type="password" class="input" ng-model="signup.password_confirmation">
                </div>
                <div class="field">
                    <label for="location" class="label">Location</label>
                        <select class="input" ng-model="signup.location_id">
                            <option value="0">Choose your City</option>
                            <option value="1">Venezuela</option>
                        </select>
                </div>
                <div class="field">
                    <input id="role" name="role" type="hidden" ng-init="signup.role='member'" ng-model="signup.role">
                </div>
                <br/>
                <div class="field">
                    <label class="checkbox">
                        <input id="chk_agree" name="chk_agree" type="checkbox" ng-click="enable_submit('chk_agree');" >
                        I agree to the <a href="#">terms and conditions</a>
                    </label>
                </div>
                <br/>
                <div class="field">
                    <button id="btnSignUp" ng-click="dsignup();" name="btnSignUp" class="button button-disabled is-medium" type="submit">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
    <footer class="footer columns">
        <div class="footer-start column">
            &copy; 2018 NEW TECH BINARY SYSTEM
        </div>
        <div class="footer-end column has-text-right">
            powered by:&nbsp;AHERTECH&trade;
        </div>
    </footer>
    <script src="jquery/jquery.min.js"></script>
    <script src="angularjs/angular.min.js"></script>
    <script src="custom/js/master.js"></script>
    <script src="custom/js/signup.js"></script>
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