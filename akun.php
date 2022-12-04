<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AKUN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css

    " />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css"
        integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous" />





</head>

<body>



    <nav class="navbar navbar-expand-lg bg-transparent ">
        <div class="container">
            <a class="navbar-brand" href="index.php">FTSTORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="index.php">HOME</a>
                    <a class="nav-link" href="akun.php">AKUN</a>
                    <a class="nav-link" href="topup.php">TOPUP</a>
                    <a class="nav-link " href="item.php">ITEM </a>
                    <a href="joki.php" class="nav-link me-4">JOKI</a>
                    <!-- <a class="nav-link bg-danger log " href="logout.php">Logout</a> -->

                </div>
            </div>
        </div>

    </nav>


    <div class="slide">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-sm-8 ms-4">
                    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner ms-4">
                            <div class="carousel-item active">
                                <img src="./img/bg1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/bg1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/bg1.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    
    require 'function.php';
    
    

    ?>


    <div class="container-fluid">
        <div class="container d-flex justify-content-center">
            <div class="row ">

                <div class="col-sm-3">
                    <Br>
                    <div class="card mt-5 ">
                        <a href="valorant.php"><img src="./foto_menu/valorant.png" class=" img-thumbnail" alt="..."
                                style="width: 150px;" /></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <Br>
                    <div class="card mt-5 ">
                        <a href="pointblank.php"><img src="./foto_menu/pb.jpg" class=" img-thumbnail" alt="..."
                                style="width: 150px;" /></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <Br>
                    <div class="card mt-5 ">
                        <a href="roblox.php"><img src="./foto_menu/roblox.jpg" class=" img-thumbnail" alt="..."
                                style="width: 150px;" /></a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <Br>
                    <div class="card mt-5 ">
                        <a href="akun.php"><img src="./foto_menu/valorant.png" class=" img-thumbnail" alt="..."
                                style="width: 150px;" /></a>
                    </div>
                </div>

            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>