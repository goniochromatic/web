<?php
require "header.php";
?>

<head>
    <title>Huginn | Event</title>
</head>

<?php

$request=$_GET['title'];

$handle=file_get_contents('jsonEvents.json');
$arrHandle=json_decode($handle, true);

foreach ($arrHandle as $event) {
	if($event['title'] == $request){

?>

	<div class="grid-container">
		<div class="event-content">
		<h1 class="event-title"><?=$event['title']?></h1>
		<p class="desc"><?=$event['desc']?></p>
		</div>
		<aside class="side">
			<div id="time-place">
				<p><img class="icon" src="icons/calendar.svg"> <?=$event['date']?></p>
				<hr class="line">
				<p><img class="icon" src="icons/clock.svg"> <?=$event['time']?></p>
				<hr class="line">
				<p><img class="icon" src="icons/location.svg"> <?=$event['place']?></p>
			</div>
		</aside>
	</div>

<?php
	}
}
?>

<?php
require "footer.php";
?>