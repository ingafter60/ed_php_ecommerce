<?php  

   // http://localhost/ed_php_ecommerce/public/item.php?id=1
   $sql = "SELECT * FROM products 
           WHERE product_id= ".$_GET['id']." 
          ";
   $query = $connection->query($sql);
   while ($row = fetch_array($query)):
?>

<div class="row">
   <div class="col-md-7">
      <img class="img-responsive" src="http://placehold.it/700x600" alt="">
   </div>
   <div class="col-md-5">
      <div class="thumbnail">
         <div class="caption-full">
            <h4>
               <a href="#"><?php echo mysqli_real_escape_string($connection, $row['product_title']); ?></a></a> 
            </h4>
            <hr>
            <h4 class="">
               <?php echo mysqli_real_escape_string($connection, $row['product_price']); ?></a>
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
            <p><?php echo mysqli_real_escape_string($connection, $row['short_desc']); ?></a></p>
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