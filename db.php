<?php
	$DB = new mysqli('localhost','root',NULL,'fpmbd');
	if($DB->error)
		echo $DB->error;
?>
