<!-- <p class="lead">Shop Name</p>
<div class="list-group">

	<#?php get_categories(); ?>

</div>
 -->
<?php  
	$sql 			= "SELECT * FROM categories";
	$result 		= $connection->query($sql);
	while($row 	= mysqli_fetch_assoc($result)):
?>

<p class="lead">Shop Name</p>
<div class="list-group">

<a href='category.php?id=31' 
	class='list-group-item'>
	<!-- to render product title 'PRODUCT 1' -->
	<?php echo mysqli_real_escape_string($connection, $row['cat_title']); ?></a>
</div>         

<?php endwhile; ?>

