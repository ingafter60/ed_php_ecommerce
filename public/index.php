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
      <div class="row">
         <!-- Categories -->
         <div class="col-md-3">
            <?php include(TEMPLATE_FRONT .DS. 'common/categories.php' ); ?>
         </div>
         <!-- end Categories -->
         <div class="col-md-9">
            <!-- Sliders -->
            <?php include(TEMPLATE_FRONT .DS. 'home-components/sliders.php' ); ?>
            <!-- end Sliders -->
            <!-- Main Content -->
            <div class="row">
               <?php include(TEMPLATE_FRONT .DS. 'home-components/main_content.php' ); ?>
            </div>
            <!-- end Main Content -->
         </div>
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