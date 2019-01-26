<div class="block has-background-light">&nbsp;</div>
<div class="block columns">
	<!--Package Bought-->
	<div class="column">
		<div class="card">
			<header class="card-header has-background-success">
				<p class="card-header-title is-title is-1">Package Bought</p>
			</header>
			<div class="card-content has-background-success">
				<div class="content has-background-success has-text-white is-title is-3">
					{{pkg_bought}} buckets
				</div>
			</div>
		</div>
	</div>

    <!--Amount Earned-->
	<div class="column">
		<div class="card">
			<header class="card-header has-background-primary">
				<p class="card-header-title is-title is-1">Amount Earned</p>
			</header>
			<div class="card-content has-background-primary">
				<div class="content has-text-right has-text-white is-title is-3">
					NGN {{amt_earned | currency : value=""}}
				</div>
			</div>
		</div>
	</div>

    <!--Amount Withdrawan-->
	<div class="column">
		<div class="card">
			<header class="card-header has-background-warning">
				<p class="card-header-title is-title is-1">Amount Withdrawn</p>
			</header>
			<div class="card-content has-background-warning">
				<div class="content has-text-right has-text-white is-title is-3">
					NGN {{amt_wdrawn | currency : value=""}}
				</div>
			</div>
		</div>
	</div>

    <!--Balance Amount-->
	<div class="column">
		<div class="card">
			<header class="card-header has-background-info">
				<p class="card-header-title is-title is-1">Balance Amount</p>
			</header>
		    <div class="card-content has-background-info">
				<div class="content has-text-right has-text-white is-title is-3">
					NGN {{amt_balance | currency : value=""}}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="block columns">
	<!--Membership Status-->
	<div class="column">
		<div class="card">
			<div class="card-content">
				<div class="content">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis doloremque facere illum praesentium incidunt sit!
				</div>
			</div>
		</div>
	</div>

    <!-- % Completed-->
	<div class="column">
		<div class="card">
			<div class="card-content">
				<div class="content">
				    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla commodi possimus aperiam autem quo explicabo.
				</div>
			</div>
		</div>
	</div>
</div>