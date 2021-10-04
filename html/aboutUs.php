<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../css/aboutUs.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <section class="about-us"
        style="background-image:url(../images/Wave.png); background-repeat:no-repeat; overflow:hidden; width: 100%">
        <div class="row mt-4 d-flex container" style="overflow:hidden">
            <aside class="col-md-7">
                <img class="img-fluid" src="../images/aboutUs.png" width="500" alt="">
            </aside>
            <aside class="row  mt-5 col-md-5" >
                <div class="p-2 borderRadius shadow d-flex justify-content-center align-items-center">
                    <div>
                        <img class="img-fluid" src="../images/icon/fit.png" width="70" alt="">
                    </div>
                    <div class="details">
                        <h4>Find the Perfect Gadget</h4>
                        <small>
                            <p>Everybody is different, which is why we offer various gadgets for every body.</p>
                        </small>
                    </div>
                </div>
                <div class="p-2 borderRadius shadow mt-3 d-flex justify-content-center align-items-center">
                    <div>
                        <img class="img-fluid" src="../images/icon/exchange.png" width="70" alt="">
                    </div>
                    <div class="details">
                        <h4>Free Exchanges</h4>
                        <small>
                            <p>One of the many reasons you can shop with peace of mind.</p>
                        </small>
                    </div>
                </div>
                <div class="p-2 borderRadius shadow d-flex mt-3 justify-content-center align-items-center mb-5">
                    <div>
                        <img class="img-fluid" src="../images/icon/contact.png" width="70" alt="">
                    </div>
                    <div class="details">
                        <h4>Contact Our Seller</h4>
                        <small>
                            <p>They are here to help you. That's quite literally what we pay them for.</p>
                        </small>
                    </div>
                </div>
            </aside>
        </div>
    </section>
    <section>
        <h2 class="service-heading text-center mt-5">Our Services</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="cardItem card shadow border-0">
                        <div class="text-center">
                            <img src="images/icon1.png" class="topIcon rounded-circle" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Exciting Offers for Users</h5>
                            <p class="card-text text-center">Cloud-based services can offer our customers single
                                tenat dedicated environments</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cardItem card shadow border-0">
                        <div class="text-center">
                            <img src="images/icon2.png" class="topIcon rounded-circle" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">All Type of PC Parts</h5>
                            <p class="card-text text-center">Working with customers making 100-4,000 highers per
                                annum
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="cardItem card shadow border-0">
                        <div class="text-center">
                            <img src="images/icon3.png" class="topIcon rounded-circle" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Used Products</h5>
                            <p class="card-text text-center">All of our customers' data is validated. We build
                                accurate
                                data banks reporting</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h2 class="service-heading text-center mt-5 mb-3">Our Mission</h2>
        <div class=" mt-6">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel hic architecto pariatur voluptatem
                    fugiat
                    incidunt error optio maxime provident beatae ullam corrupti molestias autem modi expedita quasi sunt
                    tenetur perspiciatis sed cumque adipisci rerum, recusandae blanditiis ipsam. Accusamus minima eaque,
                    error quae magni placeat porro! Beatae magni similique a consequuntur!</p>
        </div>
    </section>

    <footer>
        <?php
            include "footer.php";
        ?>  
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>