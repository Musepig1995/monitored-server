<?php include('header.php');
require_once('Server.php');
session_start(); ?>

<div class="container gapabove">
	<div class="row absoluteLeft">
		<div class="col-md-2 red fillDown red">
			<?php include('sidebar.php');?>
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-4 middle">
					<div class="statHeader">
						<img src="g.png" width="240px" height="180px" />
					</div>
					<br><br><br>
					<div class="alert alert-info smaller" role="alert">
						<b><?php echo sizeOf($sList); ?></b> Active servers: <b>3</b> on, <b>0</b> off.
					</div>
				</div>
				<div class="col-md-4 middle">
					<div class="statHeader">
						<p class = "statTitle">Whole system load at</p>
						<p class="statistic">45%</p>
						<p class = "statTitle">of total capacity</p>
					</div>
					<br><br><br>
					<div class="alert alert-info smaller" role="alert">
						<b>0</b> spells of 85%+ in the last 24 hours.
					</div>
				</div>
				<div class="col-md-4 middle">
					<div class="statHeader">
						<div class="circleBase type1">
						</div>
					</div>
					<br><br><br>
					<div class="alert alert-info smaller" role="alert">
						<b>0</b> spells of 85%+ in the last 24 hours.
					</div>
				</div>
			</div>
			<br><br>
			<div class="row">
				<table class="table table-striped" id="overview">
					<?php include('tablerows.php');?>
				</table>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>
