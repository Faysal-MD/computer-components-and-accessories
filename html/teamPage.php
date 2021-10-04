<?php
include "config.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FT Solution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/teamPage.css">
</head>

<body>
    <h1 class=" text-center mt-5">Our Team Members</h1>


    <div class="member-details">
        <section id="service" style="background-color:#0e0329e5">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <?php
                    $query = "select * from team order by member_id";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                            <div class="col-md-4">
                                <div class="cardItem card">
                                    <div class="text-center">
                                        <img src="../images/<?php echo $row["member_image"]; ?>" class="member-img" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?php echo $row["member_name"]; ?></h5>
                                        <p class="card-text text-center"><?php echo $row["member_designation"]; ?></p>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>