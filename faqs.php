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
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div class="navbar-end navbar-menu">
                <a href="index.php" class="navbar-item"><i class="fa fa-home"></i>&nbsp;Home</a>
                <a href="aboutus.php" class="navbar-item">About NTB</a>
                <a href="contactus.php" class="navbar-item">Contact us</a>
                <a href="faqs.php" class="navbar-item">FAQ</a>
            </div>
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
    <script src="chartjs/dist/Chart.min.js"></script>
    <script>
        $(document).ready(function() {

            // Check for click events on the navbar burger icon
            $(".navbar-burger").click(function() {

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                $(".navbar-burger").toggleClass("is-active");
                $(".navbar-menu").toggleClass("is-active");
            });
        });
    </script>
</body>
</html>