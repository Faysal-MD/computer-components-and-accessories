<?php 
include 'config.php';
if(isset($_POST["details"])){
	//header("location:productDetails.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Products</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/style.css">
    	<link rel="stylesheet" href="../css/font-awesome/all.css">
    	<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
	<header class="d-flex">
        <div>
            <h2 class="logo mt-3">FT Solution</h2>
        </div>
        <div>
            <?php
                include "navbar.php";
            ?>
        </div>
    </header> 
		<div class="container">
			<?php
				$query = "select * from products order by product_id";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="productDetails.php?id=<?php echo $row["product_id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" allign="center">
						<img src="../db_images/<?php echo $row["product_image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["product_name"]; ?></h4>

						<h4 class="text-danger">Tk. <?php echo $row["product_price"]; ?></h4>

						<input type="submit" name="details" style="margin-top:5px;" class="btn btn-success" value="Details" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
		</div>
		
	</body>
</html>
