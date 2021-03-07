<?php

//writing data to JSON file

function addEvent () {

	//opening the json file
	$str_file=file_get_contents('jsonEvents.json');
	$file=json_decode($str_file, true);

	//getting variables
	$title=$_POST['title'];
	$desc=$_POST['desc'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$place=$_POST['place'];

	//creating an array
	$event=array(
				"title"=>$title,
	 			"desc"=>$desc,
				"date"=>$date,
				"time"=>$time,
				"place"=>$place);


	//adding the data from form to file
	$file[$title]=$event;
	$finalFile=json_encode($file);
	file_put_contents('jsonEvents.json', $finalFile);
	$submitted=true;

}


//checking if file exists, if not make file; submitting data to json file
if(file_exists('jsonEvents.json')) {
	addEvent();
}else{
	fopen("jsonEvents.json", "w") or die("Unable to open file.");
	addEvent();
}

header("Location: successful_submission.php");

?>
