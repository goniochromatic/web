<?php
require "header.php";
if(isset($_SESSION['loggedin'])) header("Location: submit.php");
?>

<head>
    <title>Huginn | Log in</title>
</head>

<div class="wrapper">
	<form action="login.php" method="POST">
		<img id="mountain" src="icons/mountain.jpg" alt="">
		<h5>Log in</h5>
		<input type="text" name="username" placeholder="Username" autofocus required><br>

		<input type="password" name="password" placeholder="Password" required><br>
		<button class="btn btn-outline-success" type="submit">Log in</button>
	</form>
</div>

<?php
require "footer.php";
?>