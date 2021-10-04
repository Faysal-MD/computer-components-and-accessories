<?php 
include 'config.php';
$productid = $_GET["id"];
if(!$productid){
    header("location:products.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Product Details</title>
</head>

<body>
            <?php
				$query = "select * from products where product_id = '$productid'";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_assoc($result))
					{
				?>
    <img src="../db_images/<?php echo $row["product_image"]; ?>" class="img-responsive" /><br />
    
    <div class="container">
        <div class="row">
            <div class="col">
                Description
            </div>
        </div>
    </div>
    <p><?php echo $row["product_description"]; ?></p>
    <aside class="col-md-6">
        <div class="container">
            <div class="row">
                <div class="col">
                    Price
                </div>
            </div>
        </div>
        <div class="container">
            <p>Tk. <?php echo  $row["product_price"]; ?></p>
        </div>
    </aside>
    <aside class="col-md-6">
        <div class="container">
            <div class="row">
                <div class="col">
                    Warranty
                </div>
            </div>
        </div>
        <div class="container">
            <p><?php echo $row["product_warranty"];  ?></p>
        </div>
    </aside>
    <?php
					}
				}
			?>
</body>

</html>