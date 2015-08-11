
<html>

<style type="text/css">
body {
	background-color: #D2691E;
}
</style>
<body onload = "displayTime()">
<?php 
$connection = new MongoClient();//connection

$db = $connection->DateTime;//database creation

$collection = $db->date_time;// collection creation

$data  = array('dateAndTime' => date("Y-m-d h:i:sa") ); //data to be inserted

$collection->insert($data);// insert data in collection

?>
	<div>
		<p id = "panel" style="font-size:60px; border-style:solid" align = "center"></p></br>
	</div>
	
	<script>
	function displayTime() {

		var date = Date();
		
		var time = date.split(" ");
		var d_time = time[4]+" "+"PM";
		var d_date = time[0]+" "+time[2]+" "+time[1]+"."+" "+time[3]+d_time;
		document.getElementById("panel").innerHTML = d_date;

		var t = setTimeout(function(){displayTime()});
	}
	</script>
	<a href="assignHome.html">Home</a>
</body>
</html>
