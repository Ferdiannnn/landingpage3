<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/beli.css" />

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
                    <a class="nav-link" href="topup.php">TOPUP</a>
                    <a class="nav-link " href="item.php">ITEM </a>
                    <a href="joki.php" class="nav-link me-4">JOKI</a>
                    <a class="nav-link bg-danger log " href="logout.php">Logout</a>

                </div>
            </div>
        </div>

    </nav>


    <div>
        <div class="container">
            <div class="row mt-4">

                <?php include 'function.php'   ?>
                <?php $id = $_GET["id"]; ?>
                <?php   $ambil=$conn->query("SELECT * FROM toko WHERE id = '$id'")  ?>
                <?php while($pecah = $ambil->fetch_assoc()) { ?>
                <?php $order_id = $pecah["order_id"]; ?>
                <div class="col-sm-6">

                    <img src="foto_produk/<?php echo $pecah["gambar"]; ?>" class="card-img-top foto" />

                </div>
                <div class="col-sm-3">
                    <h1>Judul</h1>
                    <h3><?php echo $pecah['judul'] ?></h3>
                    <br>
                    <h3>Deskripsi</h3>
                    <p><?php echo $pecah['deskripsi'] ?></p>



                </div>
                <div class="col-sm-3 mt-3">

                    <h1>Harga</h1>
                    <h3>Rp. <?php echo number_format($pecah['harga']) ?></h3>
                    <br>
                    <?php 
                                if($pecah["stok"] == 0){
                                    echo "<a href='' class='btn btn-danger'>Habis</a>";
                                    ;

                                }else{
                                    echo "<a href='/website/landingpage/midtrans/examples/snap/checkout-process-simple-version.php?order_id=$order_id' class='btn btn-danger'>Beli</a>";
                                }
                            ?>


                </div>
                <?php } ?>
            </div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

</body>

</html>