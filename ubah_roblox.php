<?php 
session_start();

if (!isset($_SESSION["login"]) ) {
    header ("Location: login.php");
    exit;
}
require 'function.php';
$id = $_GET["id"];
$ubah = query("SELECT * FROM roblox WHERE id = $id")[0];

if (isset($_POST["submit"])) {



	if (ubah_roblox ($_POST) > 0 ) {
		echo "
		<script>
		alert('data berhasil di ubah');
		document.location.href = 'admin/table_roblox.php';
		</script>
		 ";
		
	}else{
		echo" <script>
		alert('data gagal di ubah');
		document.location.href = 'admin/table_roblox.php';
		</script>
		 ";
	}


}
?>
<!DOCTYPE html>
<html>

<head>

    <title>Ubah Data Roblox</title>
</head>

<body>
    <h1>Ubah Data Roblox</h1>



    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $ubah["id"]; ?>">
        <input type="hidden" name="gambarlama" value="<?= $ubah["gambar"]; ?>">
        <ul>
            <li>
                <label for="judul">judul : </label>
                <input type="text" name="judul" id="judul" value="<?= $ubah["judul"]; ?>">
            </li>
            <li>
                <label for="deskripsi">deskripsi : </label>
                <input type="text" name="deskripsi" id="deskripsi" value="<?= $ubah["deskripsi"]; ?>">
            </li>
            <li>
                <label for="harga">harga : </label>
                <input type="text" name="harga" id="harga" value="<?= $ubah["harga"]; ?>">
            </li>
            <li>
                <label for="kontak">kontak : </label>
                <input type="text" name="kontak" id="kontak" value="<?= $ubah["kontak"]; ?>">
            </li>
            <li>
                <label for="username">username : </label>
                <input type="text" name="username" id="username" value="<?= $ubah["username"]; ?>">
            </li>
            <li>
                <label for="katagory">katagory : </label>
                <input type="text" name="katagory" id="katagory" value="<?= $ubah["katagory"]; ?>">
            </li>
            <li>

                <label for="gambar">Gambar : </label>
                <br>
                <img src="foto_produk/<?= $ubah['gambar']; ?>" width="200">
                <br>
                <input class="" type="file" name="gambar" id="gambar" placeholder="Gambar">
            </li>

            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>

        </ul>




    </form>

</body>

</html>