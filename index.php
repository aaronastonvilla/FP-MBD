<?php
	session_start();
	if(!isset($_SESSION['id'])){
		header('location: login.php');
		die();
	}else{
		header('location: note.php');
		die();
	}
?>
