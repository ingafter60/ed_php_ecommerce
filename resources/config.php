<?php 
   
   ob_start();
   
   session_start();
   
   DEFINED("DS") ? null : DEFINE("DS", DIRECTORY_SEPARATOR);
   
   DEFINED("TEMPLATE_FRONT") ? null : DEFINE("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");

   DEFINED("TEMPLATE_BACK") ? null : DEFINE("TEMPLATE_BACK", __DIR__ . DS . "templates/back");
   
   DEFINED("UPLOAD_DIRECTORY") ? null : DEFINE("UPLOAD_DIRECTORY", __DIR__ . DS . "uploads");
   
   
   DEFINED("DB_HOST") ? null : DEFINE("DB_HOST", "localhost");
   
   DEFINED("DB_USER") ? null : DEFINE("DB_USER","root");
      
   DEFINED("DB_PASS") ? null : DEFINE("DB_PASS", "");
   
   DEFINED("DB_NAME") ? null : DEFINE("DB_NAME",  "ed_php_ecommerce");
   
   
   $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
   
   require_once("functions.php");
   
   
?>