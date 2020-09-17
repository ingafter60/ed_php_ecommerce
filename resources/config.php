<?php 
   
   include('database.php');

   ob_start();
   
   session_start();
   
   DEFINED("DS") ? null : DEFINE("DS", DIRECTORY_SEPARATOR);
   
   DEFINED("TEMPLATE_FRONT") ? null : DEFINE("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");

   DEFINED("TEMPLATE_BACK") ? null : DEFINE("TEMPLATE_BACK", __DIR__ . DS . "templates/back");
   
   DEFINED("UPLOAD_DIRECTORY") ? null : DEFINE("UPLOAD_DIRECTORY", __DIR__ . DS . "uploads");
   
   require_once("functions.php");
   
?>