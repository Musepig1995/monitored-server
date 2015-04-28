<?php include('header.php');

require_once('Server.php');?>



<script> function doThis() {console.log('hi');}</script>

<div class="row absoluteLeft moveDown">
<div class="col-md-2 red fillDown">
	<?php include('sidebar.php'); ?>



</div>
	<div class="col-md-10">
		<div class="row">
  			<div class="col-md-1"><div class="circleBase statusCircle onCircle"></div>
							
						</div>
 			 <div class="col-md-11"><span class="infoHolder"><span id="serverNameHolder" class="big"></span>
							<span id="ipHolder" class="ip">10.192.168.0</span></span>

							<span class="up since">since 22/3/15</span></div>
  			
		

		
	
<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>
<div class="row"><div class="col-md-8">
<div id="containerr" style="height: 400px;"></div>



</div>

<div id="index-test"></div>


<script>
getServerUsage();
getAverageCPU();
</script>




<div class="col-md-4 middle">
	<span class="overallTitle">
Overall live performance
</span>
<div class="row">
	<div class="col-md-6">
	<div id="cpuHolder" class="statSquare circleBase middle">
		
		

		</div>
<span class="statSubtitle">CPU</span>
</div>
<div class="col-md-6">
	<div id="bandHolder" class="statSquare circleBase middle">

	
	</div>
	<span class="statSubtitle">Bandwidth</span>
</div>
</div>



<div class="row">
	<div class="col-md-6">
	<div id="ramHolder" class="statSquare circleBase middle">

		

		</div>
<span class="statSubtitle">Memory</span>
</div>
<div class="col-md-6">
	<div id="hddHolder" class="statSquare circleBase middle">

		

	</div>
<div class="statSubtitle">Hard Disk</div>
</div>
</div>



</div>

</div>
				
						

</div>

<script language="javascript" type="text/javascript" src="cpugraph.js"></script>




<br><br>


<div class="row"><div class="col-md-2">50% Load</div>
<div class="col-md-2">10% HDD</div>
<div class="col-md-2">35% CPU</div>
<div class="col-md-2">80% Memory</div>
<div class="col-md-2"></div>
</div></div>
<script>
graph();
</script>

		
		<?php include ('footer.php');?>









