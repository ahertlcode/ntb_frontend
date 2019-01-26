<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>NTBS::Membership Portal</title>
		<meta content-type="html/text" charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="../bulma/css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="../custom/css/master.css" />	</head>
	<body>
    <div id="app" ng-app="ntb-app">
    <div class="block is-hidden-desktop">
        <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <!--navbar items, navbar burger...-->
                <a href="javascript:void(0);" class="navbar-item is-inverse">
                    <h1 class="title is-1">New Tech BS</h1>
                </a>
                <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div ng-if="user != null" class="navbar-menu" id="navMenu">
                <!--navbar start, navbar end-->
                <div class="navbar-end">
                    <ul>
                        <li>
                            <ul>
                                <a href="#/profpix" class="navbar-item">
                                    <span class="icon">
                                    <i class="fa fa-1.5x fa-user"></i>
                                </span>&nbsp;&nbsp;Update Picture</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="navbar-item">
                                    <span class="icon">
                                    <i class="fa fa-1 5x fa-edit"></i>
                                    </span>&nbsp;&nbsp;Update Profile
                                </a>
                            </li>
                            <li>
                                <a href="#acct_bal" class="navbar-item">
                                    <span class="icon"><i class="fa fa-1.5x fa-book"></i>
                                </span>&nbsp;&nbsp;Account Balance</a>
                            </li>
                            <li>
                                <a href="#/stat_acct" class="navbar-item">
                                    <span class="icon"><i class="fa fa-1.5x fa-first-aid"></i>
                                    </span>&nbsp;&nbsp;Account Statement
                                </a>
                            </li>
                            <li>
                                <a href="#/withdraw" class="navbar-item">
                                    <span class="icon"><i class="fa fa-1.5x fa-cogs"></i>
                                    </span>&nbsp;&nbsp;Withdrawal
                                </a>
                            </li>
                            <li>
                                <a href="#/reg_new" class="navbar-item">
                                    <span class="icon"><i class="fa fa-1.5x fa-cogs"></i>
                                    </span>&nbsp;&nbsp;Register
                                </a>
                            </li>
                            <li>
                                <a href="#/my_tree" class="navbar-item">
                                    <span class="icon"><i class="fa fa-1.5x fa-cogs"></i>
                                    </span>&nbsp;&nbsp;View Tree
                                </a>
                            </li>
                            <li>
                                <a href="#/my_list" class="navbar-item">
                                    <span class="icon"><i class="fa fa-1.5x fa-cogs"></i>
                                    </span>&nbsp;&nbsp;Downline List
                                </a>
                            </li>
                            <li>
                                <a ng-click="logout();" href="javascript:void(0);" class="navbar-item">
                                    <span class="icon">
                                        <i class="fa fa-1.5x fa-sign-out-alt"></i>
                                    </span>&nbsp;&nbsp;log out</a>
                            </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
		<div class="block columns" ng-controller="memberHomeController">
			<div class="column has-background-dark has-text-white is-one-fifth is-hidden-touch">
				<div class="brand">
					<h1 class="title is-2 has-text-white">Dashboard</h1>
					<span class="slogan">...your #1 network solution!</span>
				</div>
				<figure class="centred is-line-height-single">
					<img class="avatar" src="../images/profile/{{user.user_name}}.jpg" />
					<figcaption><b>{{user.first_name | uppercase}}&nbsp;{{user.last_name | uppercase}}</b><br/>@{{user.user_name | lowercase}}</figcaption>
				</figure>
				<aside class="menu">
                    <p class="menu-label">Dashboard</p>
                    <ul class="menu-list"><li>
                    <a class="menu-item" href="#">
                    <i class="fa fa-home"></i>&nbsp;Home</a></li></ul>
					<p class="menu-label">Profile</p>
					<ul class="menu-list">
						<li><a href="#/profpix">Update Picture</a></li>
						<li><a href="#/profile_update">Update Profile</a></li>
						<li><a ng-click="logout();">Logout</a></li>
					</ul>
					<p class="menu-label">Accounting</p>
					<ul class="menu-list">
                        <li ng-show="user.status=0"><a href="#/activate">Activate Account</a></li>
						<li><a href="#/acct_bal">Account Balance</a></li>
						<li><a href="#/stat_acct">Statement</a></li>
                        <li><a href="#/buy_bucket">Buy more Bucket</a></li>
						<li><a href="#/withdraw">Withdrawal</a></li>
					</ul>
					<p class="menu-label">Binary Tree</p>
					<ul class="menu-list">
						<li><a href="#/reg_new">Register Member</a></li>
						<li><a href="#/my_tree">View Tree</a></li>
						<li><a href="#/my_list">Downline List</a></li>
					</ul>
				</aside>
			</div>
			<div class="column has-background-light display" ng-view>

			</div>
		</div>
        </div>
    <script src="../jquery/jquery.min.js"></script>
    <script src="../angularjs/angular.min.js"></script>
	<script src="//code.angularjs.org/1.6.9/angular-route.js"></script>
    <script src="../bulma/js/bulma-accordion.min.js"></script>
    <script src="../custom/js/master.js"></script>
	<script src="../custom/js/member.js"></script>
    <script src="../chartjs/dist/Chart.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".navbar-burger").click(function(){
                $(".navbar-burger").toggleClass("is-active");
                $(".navbar-menu").toggleClass("is-active")
            })
        })
    </script>
	</body>
</html>