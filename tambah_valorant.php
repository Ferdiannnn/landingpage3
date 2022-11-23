<?php 
session_start();


if (!isset($_SESSION["login"]) ) {
	header ("Location: login.php");
	exit;
}

require 'function.php';

if (isset($_POST["submit"])) {
    
    if(tambah_valorant($_POST) > 0){
        echo "
        <script>
        alert('data berhasil di tambah');
        document.location.href = 'admin/index.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal di tambah');
        document.location.href = 'admin/index.php';
        </script>
        ";
    }



    

   
}

?>


<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" href="css/inlog.css"> -->

    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/update1.css">
</head>

<body>

    <div class="container-fluid">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 ">

                    <form class="box" action="" method="post" enctype="multipart/form-data">
                        <h1>Tambah Akun Valorant</h1>
                        <ul>
                            <input type="text" name="judul" id="judul" placeholder="Judul" required>
                            <input type="text" name="deskripsi" id="deskripsi" placeholder="Detail Produk" required>
                            <input type="number" name="harga" id="harga" placeholder="Harga" required>

                            <input type="text" name="kontak" id="kontak"
                                placeholder="isikan Url contoh https://api.whatsapp.com/send/?phone=628*******"
                                required>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop"> !

                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            untuk mempermudah penggunaan link whatsapp anda bisa mengklik link berikut
                                            ini

                                            <button class="btn btn-primary bg-light"> <a href="autogeneratelinkwa.php"
                                                    target="_blank">untuk
                                                    auto
                                                    generate wa </a></button>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="text" name="username" id="username" placeholder="username" required>
                            <input type="text" name="katagory" id="katagory" placeholder="katagory" required>

                            <br>
                            <input class="" type="file" name="gambar" id="gambar" placeholder="Gambar" required>
                            <br>
                            <br>
                            <input type="submit" class="btn btn-primary" name="submit"></button>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>