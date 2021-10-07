<?php
$sql = "select * from footer";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<section class="container d-flex justify-content-evenly">
    <div class="row d-flex justify-content-center mt-5">
        <div class="text-center col-md-4 sm-12 ">
            <i class="text-center fas fa-map-marker-alt fa-2x mt-3 text-white"></i>
            <p class="text-center text-white mt-3 "><?php echo $row['address']; ?></p>
        </div>
        <div class="text-center col-md-4 sm-12">
            <i class="fas fa-headset fa-2x mt-3 text-white"></i>
            <p class="text-center text-white mt-3"><?php echo $row['phone_no']; ?></p>
        </div>
        <div class="text-center col-md-4 sm-12">
            <i class="fas fa-envelope fa-2x mt-3 text-white"></i>
            <p class="text-center text-white mt-3"><?php echo $row['email']; ?></p>
        </div>
    </div>
</section>
<div class="container d-flex justify-content-center mb-4">
    <img  src="../images/facebook.png" alt="">
    <img  src="../images/instagram.png" alt="" style="margin: 0 10px 0 10px">
    <img  src="../images/twitter.png" alt="">
</div>
<div>
    <p class="text-center" style="color: white">© Copyright 2021, FT Solutions, BD</p>
</div>

    <!-- <i class="far fa-arrow-alt-circle-up fa-4x" style="margin-left: 1100px"></i> -->