<?php
   //require_once 'utility.php';
   session_start();

   if(!SESSION('id')){
   header('location: tenant_login.php');
   die();
   }

   require_once 'db.php';

   echo "Under Construction";

?>
