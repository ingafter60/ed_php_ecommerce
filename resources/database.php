<?php  

   DEFINED("DB_HOST") ? null : DEFINE("DB_HOST", "localhost");
   DEFINED("DB_USER") ? null : DEFINE("DB_USER","root");
   DEFINED("DB_PASS") ? null : DEFINE("DB_PASS", "");
   DEFINED("DB_NAME") ? null : DEFINE("DB_NAME",  "ed_php_ecommerce");

   $connection = mysqli_connect(
   	DB_HOST,
   	DB_USER,
   	DB_PASS,
   	DB_NAME
   );

?>