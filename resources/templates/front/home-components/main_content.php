<!-- <#?php get_products(); ?> -->

<?php  
	$sql 			= "SELECT * FROM products";
	$result 		= $connection->query($sql);
	while($row  = mysqli_fetch_assoc($result)):
?>
<div class="col-sm-4 col-lg-4 col-md-4">
   <div class="thumbnail">
      <a href="item.php?id=1">
      <img src="" alt="">
      </a>	
      <div class="caption">
         <h4 class="pull-right">
         	<!-- To render price '$ 29.10' -->
         	&#36;<?php echo mysqli_real_escape_string($connection, $row['product_price']); ?></a>
         </h4>
         <h4>
            <a href="item.php?id=1">
            <?php echo $row['product_title']; ?></a>
         </h4>
         <p>See more snippets like this online store item at
            <a target="_blank" 
               href="">Bootsnipp</a>
         </p>
         <a class="btn btn-primary" 
            target="_blank" 
            href="item.php?id=1">Add to cart</a>
      </div>
      <br>
   </div>
</div>   
<?php endwhile; ?>
