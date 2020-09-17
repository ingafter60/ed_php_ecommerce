<?php require_once('../resources/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php include(TEMPLATE_FRONT .DS. 'head.php' ); ?>
</head>
<body>
   <!-- Navigation -->
   <?php include(TEMPLATE_FRONT .DS. 'navbar.php' ); ?>
   <!-- end Navigation -->
   
   <!-- Content Container -->
   <div class="container">
      <div class="row">
         <!-- Categories -->
         <div class="col-md-3">
            <?php include(TEMPLATE_FRONT .DS. 'categories.php' ); ?>
         </div>
         <!-- end Categories -->
         <div class="col-md-9">
            <!-- Sliders -->
            <?php include(TEMPLATE_FRONT .DS. 'sliders.php' ); ?>
            <!-- end Sliders -->
            <!-- Main Content -->
            <div class="row">
               <?php include(TEMPLATE_FRONT .DS. 'main_content.php' ); ?>
            </div>
            <!-- end Main Content -->
         </div>
      </div>
   </div>
   <!-- end Content Container -->

   <!-- Footer Container -->
   <div class="container">
     <?php include(TEMPLATE_FRONT .DS. 'footer.php' ); ?>
   </div>
   <!-- end Footer Container -->
   <!-- Scripts -->
     <?php include(TEMPLATE_FRONT .DS. 'scripts.php' ); ?>
   <!-- end Scripts -->
</body>
</html>