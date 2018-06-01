<?php
	$db = mysqli_connect("localhost", "root", "", "fpmbd_cadangan");
	if($db->error)
		echo $db->error;
?>
