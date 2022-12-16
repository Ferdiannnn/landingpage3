<?php 

$conn = mysqli_connect("localhost", "root", "", "tokoonline");


function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function hapus($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM toko WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function registrasi($data){
	global $conn;

	$username =strtolower( stripslashes( $data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);


	//cek sudah ada ato belum

	$result=mysqli_query($conn, "SELECT username FROM user WHERE
				username = '$username'");
	if ( mysqli_fetch_assoc($result)) {
		echo "<script>
			alert('username sudah terdaftar');
			</script>";

			return false;
	}
	//cek konfrim password
	if ($password !== $password2) {
		echo "<script>
			alert('konfrim password tidak sama');
			</script>";

			return false;
	}
	//endkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);


	//tambahakan user baru
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows ($conn);
}


function tambah($data){
	global $conn;

	// $foto_produk = htmlspecialchars($data['foto_produk']);
    $judul = htmlspecialchars($data['judul']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
	$order_id = rand();
	$game = htmlspecialchars($data['game']);
	$stok = htmlspecialchars($data['stok']);
	$transaction_status= 1;
	$transaction_id="";
	$username = htmlspecialchars($data['username']);

	$gambar = upload();
		if (!$gambar) {
			return false;
		}

	$query = "INSERT INTO toko VALUES('', '$gambar', '$judul', '$deskripsi', '$harga','$order_id', '$game','$stok','$transaction_status','$transaction_id','$username')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function tambahtopup($data){
	global $conn;

	$judul = htmlspecialchars($data['judul']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
	$order_id = rand();
	$game = htmlspecialchars($data['game']);
	$stok = htmlspecialchars($data['stok']);
	$transaction_status= 1;
	$transaction_id="";
	$username = htmlspecialchars($data['username']);
	

	$gambar = upload();
		if (!$gambar) {
			return false;
		}

	$query = "INSERT INTO toko VALUES('', '$gambar', '$judul', '$deskripsi', '$harga','$order_id', '$transaction_id','$transaction_status','$game','$stok','$username')";
	mysqli_query($conn, $query);
}


function ubah($data){
	global $conn;

	$id = $data["id"];
	$judul = htmlspecialchars($data["judul"]);
	$gambarlama = htmlspecialchars($data["gambarlama"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$harga = htmlspecialchars($data["harga"]);
	$order_id = htmlspecialchars($data["order_id"]);
	$game = htmlspecialchars($data["game"]);
	$stok = htmlspecialchars($data["stok"]);
	$transaction_status = htmlspecialchars($data["transaction_status"]);
	$transaction_id = htmlspecialchars($data["transaction_id"]);
	$username = htmlspecialchars($data["username"]);
	

	// cek apakah user pilih gambar baru

	if($_FILES['gambar']['error'] === 4){
		$gambar = $gambarlama;

	}else {
		$gambar = $upload();
	}
	



	$query = "UPDATE toko SET 
			gambar = '$gambar',
			judul = '$judul',
			deskripsi = '$deskripsi',
			harga = '$harga',
			order_id = '$order_id',
			game = '$game',
			stok = '$stok',
			transaction_status = '$transaction_status',
			transaction_id = '$transaction_id',
			username = '$username'
			WHERE id = $id

			";
mysqli_query($conn,$query);


return mysqli_affected_rows($conn);

}

function upload(){

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$size   = $_FILES['gambar']['size']; 

	$width_size = 100;
	
	if ($error === 4) {
		echo "<script>
				alert('pilih gambar terlebih dahulu');
				</script>";
		return false;
	}

	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('yang anda pilih bukan gambar');
				</script>";
		return false;
	}
	if ($ukuranFile > 10000000) {
		echo "<script>
				alert('ukuran gambar terlalu besar');
				</script>";
		return false;
	}
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'foto_produk/' . $namaFileBaru);
	return $namaFileBaru;
}






 ?>