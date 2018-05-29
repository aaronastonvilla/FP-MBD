<?php
   //require_once 'utility.php';
   session_start();

   if(!SESSION('id')){
   header('location: event_login.php');
   die();
   }

   require_once 'db.php';

   echo "Under Construction";

?>
