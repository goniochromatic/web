<?php
require "header.php";
if(isset($_SESSION['loggedin'])) header("Location: submit.php");

if(!isset($_POST['username']) || !isset($_POST['password'])) {
	header("Location: login_page.php");
}

$usr = $_POST['username'];
$pass = $_POST['password'];

#validating the username and password
if ($usr=="huginn" && $pass=="pass123") {
	$_SESSION['loggedin']=TRUE; 
	$_SESSION['username']="huginn";
	$correct=TRUE;

	header("Location: submit.php");
} else {
	header("Location: login_page.php");
}
//if credentials are correct, send users to submit.php

?>  