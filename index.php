
<?php 
/* 
| Developed by: Tauseef Ahmad
| Last Upate: 28-08-2020 10:30 PM
| Facebook: www.facebook.com/ahmadlogs
| Twitter: www.twitter.com/ahmadlogs
| YouTube: https://www.youtube.com/channel/UCOXYfOHgu-C-UfGyDcu5sYw/
| Blog: https://ahmadlogs.wordpress.com/
 */ 
 
 

// Include configuration file 
// include_once 'include/config.php'; 
 include_once 'config.php';
// Include database connection file 
// include_once 'include/db_connect.php'; 
include_once 'db_connect.php';
$title = "Ahmad logs - JazzCash Payment Gateway Part ".PART;

// include("include/header.php"); 
include 'header.php';
?>
	
 <!-- container --> 
  <section class="showcase">
    <div class="container">
      <div class="pb-2 mt-4 mb-2 border-bottom">
        <h2>Part <?php echo PART;?>: JAZZCASH Payment Gateway Integration in PHP - Home Page</h2>
      </div>
      
      <div class="row">
		<!-- --------------------------------------------------------------------------- -->
		<?php 
			//Fetch products from the database
			$results = $conn->query("SELECT * FROM product"); 
			$i = 0; 
		?>
		<!-- --------------------------------------------------------------------------- -->
		
		
		<!-- --------------------------------------------------------------------------- -->
		<?php 
			// Fetch products from the database 
			while($row = $results->fetch_array()):
		?>
		<div class="col-lg-3 col-md-3 mb-3">
			<div class="card h-100">
				<!-- <a href="#"><img src="<?php echo BASE_URL.$row['image'];?>" alt="product 10" title="product 10" class="card-img-top"></a> -->
				<a href="#"><img src="./images/1" alt="product 10" title="product 10" class="card-img-top"></a>
				<div class="card-body">
					<h4 class="card-title"><a href="#"><?php echo $row['name'];?></a></h4>
					<h5>₹<?php echo $row['price'];?></h5>
					<p class="card-text"><?php echo $row['description'];?></p>
				</div>
				<div class="card-footer text-right">
					<a href="<?php echo 'checkout.php?product_id='.$row['product_id'];?>" class="add-to-cart btn-success btn btn-sm" title="Add to Cart"><i class="fa fa-shopping-cart fa-fw"></i> Buy Now</a>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
		<!-- --------------------------------------------------------------------------- -->

    </div>
    </div>
  </section>

<?php include "footer.php"; ?>
