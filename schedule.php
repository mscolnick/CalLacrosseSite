<?php
$title = 'Schedule';
include 'header.php';?>
<div class="row">
	<h4 class="top-title">2015 Season Schedule</h4>
</div>
<div class="row" id="sched">
	<script type="text/javascript" src="http://api.mcla.us/simple/?api_key=3b6c078115a8955450e071d42cb32061&version=1.2&method=schedule_widget&team=california_berkeley&width=800">
	</script>
</div>
<?php include 'footer.php';?>