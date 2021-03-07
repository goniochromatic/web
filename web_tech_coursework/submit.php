<?php
require "header.php";
if(!isset($_SESSION['loggedin'])) header("Location: login_page.php");
if($_SESSION['loggedin']===FALSE) header("Location:  login_page.php")
?>

<head>
    <title>Huginn | Submit</title>
</head>

<section id="header" class="jumbotron text-center">
	<h1 id="_submit">Submit a new event!</h1>
	<p>Your event will appear in the events list in the <a href="events.php">events</a> section of the website.</p>
</section>
<div id="submit-box">
	<form method="POST" action="add_event.php">
			<label for="title">Title</label><br>
			<input type="text" name="title" autofocus placeholder="Title of the event" autofocus required><br>

			<label for="desc">Description</label><br>
			<input id="descr" type="text" name="desc" placeholder="Description of event" required><br>

			<label for="date">Date</label><br>
			<input type="date" name="date" placeholder="Date of the event" required><br>

			<label for="time">Time</label><br>
			<input type="time" name="time" placeholder="Time of the event" required><br>

			<label for="place">Location</label><br>
			<input type="text" name="place" placeholder="Location of event" required><br>

			<button id="sub-event" class="btn btn-outline-success" type="submit">Submit</button>
	</form>
</div>
<div class="logout-btn">
	<form action="logout.php" method="POST">
		<button id="logout" class="btn btn-success">Log out</button>
	</form>
</div>


<?php
require "footer.php";
?>