<?php 
session_start();

// cek apakah yang mengakses halaman ini sudah login
// if (!isset($_SESSION["login"])) {
//     header("Location: login.php");
//     exit;
// }

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css"
        integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">




</head>

<body>

    <a href="logout.php">LOGOUT</a>

    <nav class="navbar navbar-expand-lg bg-transparent ">
        <div class="container">
            <a class="navbar-brand" href="index.php">FTSTORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                    <a class="nav-link" href="akun.php">AKUN</a>
                    <a class="nav-link" href="topup.php">TOPUP</a>
                    <a class="nav-link " href="item.php">ITEM </a>
                    <a href="joki.php" class="nav-link me-4">JOKI</a>
                    <a class="nav-link bg-danger log hidden" href="logout.php">Logout</a>

                </div>
            </div>
        </div>

    </nav>

    <div class="slide">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8 ms-4">
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

    <div class="info">

        <div class="container">
            <div class="row justify-content-sm-center info1">

                <div class="col-lg-3 ">
                    <Br>
                    <div class="card mt-5 card1">
                        <a href="akun.php"><img src="./img/akun.jpg" class="card-img-top" /></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <Br>
                    <div class="card mt-5">
                        <a href="topup.php"><img src="./img/topup.jpg" class="card-img-top" /></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <Br>
                    <div class="card mt-5">
                        <a href="item.php"><img src="./img/bg1.jpg" class="card-img-top" /></a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- VALORANT -->
    <div class="container-fluid" style="">
        <div class="container">
            <div class="row ">
                <!-- batas -->
                <?php include 'function.php' ?>
                <?php $ambil=$conn->query("SELECT * FROM valorant") ?>
                <?php while($perproduk=$ambil->fetch_assoc()){ ?>
                <?php $id = $perproduk["id"]; ?>
                <div class=" col-lg-2 ">
                    <div class="card card-deck bg-dark text-light mt-4 ms-2">
                        <div class=" card-body ">
                            <img src=" foto_produk/<?php echo $perproduk['gambar'] ?>" class="card-img-top" />
                            <h5 class="card-title mt-3"><?php echo $perproduk['judul'] ?></h5>
                            <!-- <p class="card-text"><?php echo $perproduk['deskripsi'] ?></p> -->
                            <h5 class="card-title">Rp.<?php echo number_format ($perproduk['harga']) ?></h5>

                            <p class="card-title "><?php echo $perproduk['katagory'] ?> </p>
                            <a href="detail-valorant.php?id=<?php echo $perproduk['id'] ?>"
                                class="btn btn-primary">Detail</a>
                            <a href=<?php echo  $perproduk['id'] ?> terget='_blank' class="btn btn-danger">Beli</a>

                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- END VALORANT -->
    <!-- POINTBLANK -->
    <div class="container-fluid">
        <div class="container">
            <div class="row ">
                <?php $ambil=$conn->query("SELECT * FROM pointblank")   ?>
                <?php while ($ambildata=$ambil->fetch_assoc()) {?>
                <div class="col-lg-2">
                    <div class="card card-deck bg-dark text-light mt-4 ms-2">
                        <div class="card-body  ">
                            <img src="foto_produk/<?php echo $ambildata['gambar'] ?>" class="card-img-top" />
                            <h5 class="card-title mt-3"><?php echo $ambildata['judul'] ?></h5>
                            <h5 class="card-title">Rp.<?php echo number_format ($ambildata['harga']) ?></h5>
                            <p class="card-title"><?php echo $ambildata['katagory'] ?></p>
                            <a href="detail-valorant.php?id=<?php echo $ambildata['id'] ?>"
                                class="btn btn-primary ">Detail</a>
                            <a href=<?php echo $ambildata["kontak"] ?> class="btn btn-danger">Beli</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- END POINTBLANK -->
    <!-- ROBLOX -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <?php $ambil=$conn->query("SELECT * FROM roblox")   ?>
                <?php while ($ambildata=$ambil->fetch_assoc()) {?>
                <div class="col-lg-2">
                    <div class="card card-deck bg-dark text-light mt-4 ms-2">
                        <div class="card-body  ">
                            <img src="foto_produk/<?php echo $ambildata['gambar'] ?>" class="card-img-top" />
                            <h5 class="card-title mt-3"><?php echo $ambildata['judul'] ?></h5>
                            <h5 class="card-title">Rp.<?php echo number_format ($ambildata['harga']) ?></h5>
                            <p class="card-title"><?php echo $ambildata['katagory'] ?></p>
                            <a href="detail-valorant.php?id=<?php echo $ambildata['id'] ?>"
                                class="btn btn-primary ">Detail</a>
                            <a href=<?php echo $ambildata["kontak"] ?> class="btn btn-danger">Beli</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- END ROBLOX -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>



    <div class="container text-center">
        <div class="row">

            <div class="fixed-footer ">
                <div class="container">Copyright &copy; 2022 homeku.site</div>
            </div>
</body>

</html>