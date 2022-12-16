<?php 
session_start();

if (!isset($_SESSION["login"]) ) {
    header ("Location: login.php");
    exit;
}
require 'function.php';
$id = $_GET["id"];
$ubah = query("SELECT * FROM toko WHERE id = $id")[0];
$game = $ubah["game"];

 


if (isset($_POST["submit"])) {

    
	if (ubah ($_POST) > 0 ) {
		echo "
		<script>
		alert('data berhasil di ubah');
		document.location.href = 'admin/table.php';
		</script>
		 ";
		
	}else{
		echo" <script>
		alert('data gagal di ubah');
		document.location.href = 'admin/table.php';
		</script>
		 ";
       
	}
    
}
?>
<!DOCTYPE html>
<html>

<head>

    <title>Ubah Data </title>

</head>

<body>
    <h1>Ubah Data </h1>



    <form action="" method="post" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $ubah["id"]; ?>">
        <input type="hidden" name="gambarlama" value="<?= $ubah["gambar"]; ?>">
        <input type="hidden" name="order_id" value="<?= $ubah["order_id"]; ?>">
        <input type="hidden" name="transaction_status" value="<?= $ubah["transaction_status"]; ?>">
        <input type="hidden" name="transaction_id" value="<?= $ubah["transaction_id"]; ?>">
        <input type="hidden" name="username" value="<?= $ubah["username"]; ?>">

        <ul>
            <li>
                <label for="judul">judul : </label>
                <input type="text" name="judul" id="judul" required value="<?= $ubah["judul"]; ?>">
            </li>
            <li>
                <label for="deskripsi">deskripsi : </label>
                <input type="text" name="deskripsi" id="deskripsi" required value="<?= $ubah["deskripsi"]; ?>">
            </li>
            <li>
                <label for="harga">harga : </label>
                <input type="text" name="harga" id="harga" required value="<?= $ubah["harga"]; ?>">
            </li>
            <li>
                <label for="game">game : </label>
                <input type="radio" name="game" id="game" value="Valorant"
                    <?= ($game=="Valorant")?"checked":""?>>Valorant
                <input type="radio" name="game" id="game" value="Pointblank"
                    <?= ($game=="Pointblank")?"checked":""?>>Pointblank
                <input type="radio" name="game" id="game" value="Roblox" <?= ($game=="Roblox")?"checked":""?>>Roblox
            </li>
            <li>
                <label for="stok">stok : </label>
                <input type="stok" name="stok" id="stok" required value="<?= $ubah["stok"]; ?>">

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