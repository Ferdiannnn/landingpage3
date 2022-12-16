<?php 
session_start();


require 'function.php';
if (!isset($_SESSION["login"]) ) {
	header ("Location: login.php");
	exit;
}
$username = $_SESSION["username"];
$data = query("SELECT * FROM user ORDER BY id  ");


if (isset($_POST["submit"])) {
    
    if(tambahtopup($_POST) > 0){
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

    <title>TOP UP || </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/update1.css">
</head>

<body>

    <div class="container mt-4">
        <div class="row">
            <form class="box" action="" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="judul">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="deskripsi">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Game</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="game" id="game" value="Valorant"
                                    checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Valorant
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="game" id="game" value="Roblox">
                                <label class="form-check-label" for="gridRadios2">
                                    Roblox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="game" id="game" value="Pointblank">
                                <label class="form-check-label" for="gridRadios2">
                                    Pointblank
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="stok" id="stok" placeholder="stok">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="harga" id="harga" placeholder="harga">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1" class="col-sm-2 col-form-label">Gambar</label>
                    <input type="file" class="form-control-file " name="gambar" id="gambar" placeholder="Gambar">
                </div>

                <div class="form-group row" hidden>
                    <label for="inputPassword3" class="col-sm-2 col-form-label">username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="username" id="username" placeholder="username"
                            value="<?= $_SESSION["username"] ?>">
                    </div>
                </div>



                <input type="submit" class="btn btn-primary" name="submit"></button>

            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>