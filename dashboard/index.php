<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>NTBS::Administrator Portal</title>
		<meta content-type="html/text" charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="../bulma/css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="../bulma/css/bulma-accordion.min.css" />
        <link rel="stylesheet" type="text/css" href="../custom/css/master.css" />	</head>
	<body>
    <div id="app" ng-app="ntb-dash">
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
                                <a href="javascript:void(0);" class="navbar-item">
                                    <span class="icon">
                                    <i class="fa fa-1.5x fa-trophy"></i>
                                </span>&nbsp;&nbsp;Payment Statement</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="navbar-item">
                                    <span class="icon">
                                    <i class="fa fa-1 5x fa-trophy"></i>
                                    </span>&nbsp;&nbsp;Upgrade Account
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="navbar-item">
                                    <span class="icon"><i class="fa fa-1.5x fa-book"></i>
                                </span>&nbsp;&nbsp;Earnings Details</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="navbar-item">
                                    <span class="icon"><i class="fa fa-1.5x fa-first-aid"></i>
                                    </span>&nbsp;&nbsp;Binary Tree Structure
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="navbar-item">
                                    <span class="icon"><i class="fa fa-1.5x fa-cogs"></i>
                                    </span>&nbsp;&nbsp;Profile
                                </a>
                            </li>
                            <li>
                                <a ng-click="logout();" href="javascript:void(0);" class="navbar-item">
                                    <span class="icon">
                                        <i class="fa fa-1.5x fa-sign-out-alt"></i>
                                    </span>&nbsp;&nbsp;Exit</a>
                            </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
		<div class="block columns" ng-controller="homeController">
			<div class="column has-background-dark has-text-white is-one-fifth is-hidden-touch">
				<div class="brand">
					<h1 class="title is-2 has-text-white">Dashboard</h1>
					<span class="slogan">...your #1 network solution!</span>
				</div>
				<figure class="centred is-line-height-single">
					<img class="avatar" src="../images/profile/{{user.user_name}}.jpg" />
					<figcaption><b>{{user.first_name | uppercase}}&nbsp;{{user.last_name | uppercase}}</b><br/>@{{user.user_name}}</figcaption>
				</figure>
				<aside class="accordions">
                    <article class="accordion">
                        <div class="accordion-header toggle">
                            <p class="menu-label">Profile</p>
                        </div>
                        <div class="accordion-body">
                            <ul class="menu-list accordion-content">
						        <li><a href="#/profpix">Update Picture</a></li>
						        <li><a>Update Profile</a></li>
						        <li><a ng-click="logout();">Logout</a></li>
					        </ul>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-header toggle">
                            <p class="menu-label">General Ledger</p>
                        </div>
                        <div class="accordion-body">
                            <ul class="menu-list">
                                <li><a href="#/autopost">Auto Posting</a></li>
                                <li><a href="#/journals">Post Journal</a></li>
                                <li><a href="#/bjournals">Batch Posting</a></li>
                                <li><a href="#/dailypost">Daily Posting</a></li>
                                <li><a href="#/statement_gl">GL Statement</a></li>
                                <li><a href="#/trialbalance">Trial Balance</a></li>
                                <li><a href="#/balancesheet">Balance Sheet</a></li>
                                <li><a href="#/cashflow">Cash Flow</a></li>
                                <li><a href="#/pnl">Profit/Loss</a></li>
                            </ul>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-header toggle">
                            <p class="menu-label">Reconciliation</p>
                        </div>
                        <div class="accordion-body">
                            <ul class="menu-list">
                                <li><a href="#/autorec">Auto Reconciliation</a></li>
                                <li><a href="#/assistedrec">Assisted Reconciliation</a></li>
                                <li><a href="#/manualrec">Manual Reconciliation</a></li>
                                <li><a href="#/reportrec">Reports</a></li>
                            </ul>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-header toggle">
                            <p class="menu-label">Account Types</p>
                        </div>
                        <div class="accordion-body">
                            <ul class="menu-list">
                                <li><a href="#/acctttype">Manage Account Type</a></li>
                            </ul>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-header toggle">
                            <p class="menu-label">Clients Banks</p>
                        </div>
                        <div class="accordion-body">
                            <ul class="menu-list">
                                <li><a href="#/bankclmng">Manage Client Banks</a></li>
                            </ul>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-header toggle">
                            <p class="menu-label">Commercial Banks</p>
                        </div>
                        <div class="accordion-body">
                            <ul class="menu-list">
                                <li><a href="#/bankmng">Manage Banks</a></li>
                            </ul>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-header toggle">
                            <p class="menu-label">Master Accounts</p>
                        </div>
                        <div class="accordion-body">
                            <ul class="menu-list">
                                <li><a href="#/ma_acct_mng">Manager Master Accounts</a></li>
                            </ul>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-header toggle">
                            <p class="menu-label">Sub Accounts</p>
                        </div>
                        <div class="accordion-body">
                            <ul class="menu-list">
                                <li><a href="#/sb_acct_mng">Manage Sub Accounts</a></li>
                            </ul>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-header toggle">
                            <p class="menu-label">Messages</p>
                        </div>
                        <div class="accordion-body">
                            <ul class="menu-list">
                                <li><a href="#/send_msg">Send Message</a></li>
                                <li><a href="#/read_msg">Read Messages</a></li>
                            </ul>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-header toggle">
                            <p class="menu-label">Users</p>
                        </div>
                        <div class="accordion-body">
                            <ul class="menu-list">
                                <li><a href="#/users">Manage Users</a></li>
                            </ul>
                        </div>
                    </article>
				</aside>
			</div>
			<div class="column has-background-light display" ng-view></div>
        </div>
		</div>
    <script src="../jquery/jquery.min.js"></script>
    <script src="../angularjs/angular.min.js"></script>
	<script src="//code.angularjs.org/1.6.9/angular-route.js"></script>
    <script src="../bulma/js/bulma-accordion.min.js"></script>
	<script src="../custom/js/master.js"></script>
	<script src="../custom/js/dashboard.js"></script>
    <script src="../chartjs/dist/Chart.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var accordions = bulmaAccordion.attach(); // accordions now contains an array of all Accordion instances
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