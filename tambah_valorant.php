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
    <link rel="stylesheet" href="css/inlog.css">

    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <form class="box" action="" method="post" enctype="multipart/form-data">
                        <h1>Tambah</h1>
                        <ul>
                            <input type="text" name="judul" id="judul" placeholder="Judul" required>
                            <input type="text" name="deskripsi" id="deskripsi" placeholder="Detail Produk" required>
                            <input type="number" name="harga" id="harga" placeholder="Harga" required>

                            <input type="text" name="kontak" id="kontak"
                                placeholder="isikan Url contoh https://api.whatsapp.com/send/?phone=628*******"
                                required>
                            <input type="text" name="username" id="username" placeholder="username" required>
                            <input type="text" name="katagory" id="katagory" placeholder="katagory" required>

                            <input class="" type="file" name="gambar" id="gambar" placeholder="Gambar" required>
                            <input type="submit" name="submit"></button>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>