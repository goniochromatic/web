<?php
require "header.php";
?>

<head>
    <title>Huginn | Events</title>
</head>

	<section id="header" class="jumbotron text-center">
        <h1 class="display-3">Keele Events</h1>
        <p>Here you can find a list of all the awesome events happening at Keele!</p>
    </section>

    <section id="gallery">
       <div class="container">
            <div class="row">

<?php

$handle=file_get_contents('jsonEvents.json');
$arrHandle=json_decode($handle, true);


foreach ($arrHandle as $event) {

?>



                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?=$event['title']?></h5>
                            <p class="card-text"><?=$event['desc']?></p>
                            <a href="event.php?title=<?=$event['title']?>" class="btn btn-outline-success">Go to event <img class="icon" src="icons/arrow.svg"></a>
                        </div>
                    </div>
                </div>

<?php
                
}

?>

<?php
require "footer.php";
?>