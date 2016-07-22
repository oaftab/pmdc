<?php
include_once 'sabre/workflow/ApiRequests.php';
include_once 'sabre/activities/CheapestFaresForDestinationActivity.php';

$destination = $_GET["city"];
$startdate = $_GET["startdate"];
$enddate = $_GET["enddate"];
$numGuests = $_GET["numguests"];

$workflow = new ApiRequests(new CheapestFaresForDestinationActivity($countryCode, $destination));
$result = $workflow->runWorkflow();
ob_start();
var_dump($result);
$dump = ob_get_clean();

$jasonbhai = json_decode($dump);
foreach ($jasonbhai as $k=>$v){
	echo $v; 
}
//echo $dump;
flush();




?>