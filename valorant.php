<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css " />

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-transparent ">
        <div class="container">
            <a class="navbar-brand" href="#">FTSTORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="index12.php">HOME</a>
                    <a class="nav-link" href="akun.php">AKUN</a>
                    <a class="nav-link" href="#">TOPUP</a>
                    <a class="nav-link me-4">ITEM </a>
                    <a class="nav-link bg-danger log " href="logout.php">Logout</a>

                </div>
            </div>
        </div>

    </nav>

    <div class="slide">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6 ms-4 mt-2 ">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
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


    <div class="container-fluid">
        <div class="container ">
            <div class="row justify-content-md-center">
                <?php include 'function.php' ?>
                <?php $ambil=$conn->query("SELECT * FROM valorant") ?>
                <?php while($perproduk=$ambil->fetch_assoc()){ ?>
                <div class="col-sm-2 my-4  ">
                    <div class="card card-deck bg-dark text-light mt-4 " style="width: 200px;">
                        <div class="card-body  ">
                            <img src="foto_produk/<?php echo $perproduk['gambar'] ?>" class="card-img-top" />
                            <h5 class="card-title mt-3"><?php echo $perproduk['judul'] ?></h5>
                            <h5 class="card-title">Rp.<?php echo number_format ($perproduk['harga']) ?></h5>

                            <a href="detail-valorant.php?id=<?php echo $perproduk['id'] ?>"
                                class="btn btn-primary ">Detail</a>

                            <a href=<?php echo $perproduk["kontak"] ?> class="btn btn-danger">Beli</a>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>

        </div>
    </div>




    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>