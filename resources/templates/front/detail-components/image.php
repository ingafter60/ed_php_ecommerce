<?php  

   // http://localhost/ed_php_ecommerce/public/item.php?id=1
   $query = query(
      "
      SELECT * FROM products
      WHERE product_id= ".escape_string($_GET['id'])." 
      ");
      confirm($query);

      while ($row = fetch_array($query)):
?>

<div class="row">
   <div class="col-md-7">
      <img class="img-responsive" src="http://placehold.it/700x600" alt="">
   </div>
   <div class="col-md-5">
      <div class="thumbnail">
         <div class="caption-full">
            <h4><a href="#">Javascript Course</a> </h4>
            <hr>
            <h4 class="">
               <?php echo "&#36;" . $row['product_price']; ?>
            </h4>
            <div class="ratings">
               <p>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star-empty"></span>
                  4.0 stars
               </p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            <form action="">
               <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="ADD TO CART">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<?php endwhile; ?>