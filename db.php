<?php
	$db = mysqli_connect("localhost", "root", "", "fpmbd");
	if($db->error)
		echo $db->error;
?>
