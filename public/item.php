<?php require_once('../resources/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php include(TEMPLATE_FRONT .DS. 'common/head.php' ); ?>
</head>
<body>
   <!-- Navigation -->
   <?php include(TEMPLATE_FRONT .DS. 'common/navbar.php' ); ?>
   <!-- end Navigation -->

   <!-- Content Container -->
   <div class="container">
         <!-- Categories -->
         <div class="col-md-3">
            <?php include(TEMPLATE_FRONT .DS. 'common/categories.php' ); ?>
         </div>
         <!-- end Categories -->
      <div class="col-md-9">
         <!--Image & description-->
            <?php include(TEMPLATE_FRONT .DS. 'detail-components/image.php' ); ?>
         <!--end Image & description-->
         <hr>
         <!--Tab panel-->
            <?php include(TEMPLATE_FRONT .DS. 'detail-components/tab-panel.php' ); ?>
         <!--Tab panel-->
      </div>
   </div>
   <!-- end Content Container -->

   <!-- Footer Container -->
   <div class="container">
     <?php include(TEMPLATE_FRONT .DS. 'common/footer.php' ); ?>
   </div>
   <!-- end Footer Container -->
   <!-- Scripts -->
     <?php include(TEMPLATE_FRONT .DS. 'common/scripts.php' ); ?>
   <!-- end Scripts -->
</body>
</html>