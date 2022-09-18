<?php 

$conn = mysqli_connect("localhost", "root", "", "user");


function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function hapus_valorant($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM valorant WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function registrasi($data){
	global $conn;

	$username =strtolower( stripslashes( $data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$level =strtolower( stripslashes( $data["level"]));


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
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password', '$level')");

	return mysqli_affected_rows ($conn);
}


function tambah_valorant($data){
	global $conn;

	// $foto_produk = htmlspecialchars($data['foto_produk']);
    $judul = htmlspecialchars($data['judul']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
	
    $kontak = htmlspecialchars($data['kontak']);
    $username = htmlspecialchars($data['username']);
	$katagory = htmlspecialchars($data['katagory']);

	$gambar = upload();
		if (!$gambar) {
			return false;
		}

	$query = "INSERT INTO valorant VALUES('', '$gambar', '$judul', '$deskripsi', '$harga', '$kontak','$username', '$katagory')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);


}

function tambah_pointblank ($data) {
	global $conn;

	$judul = htmlspecialchars($data['judul']);
	$deskripsi = htmlspecialchars($data['deskripsi']);
	$harga = htmlspecialchars($data['harga']);
	
	$kontak = htmlspecialchars($data['kontak']);
	$username = htmlspecialchars($data['username']);
	$katagory = htmlspecialchars($data['katagory']);

	$gambar = upload();
		if (!$gambar) {
			return false;
		}

	$query = "INSERT INTO pointblank VALUES('', '$gambar', '$judul', '$deskripsi', '$harga', '$kontak','$username', '$katagory')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

function tambah_roblox ($data) {
	global $conn;

	$judul = htmlspecialchars($data['judul']);
	$deskripsi = htmlspecialchars($data['deskripsi']);
	$harga = htmlspecialchars($data['harga']);
	
	$kontak = htmlspecialchars($data['kontak']);
	$username = htmlspecialchars($data['username']);
	$katagory = htmlspecialchars($data['katagory']);

	$gambar = upload();
		if (!$gambar) {
			return false;
		}

	$query = "INSERT INTO roblox VALUES('', '$gambar', '$judul', '$deskripsi', '$harga', '$kontak','$username', '$katagory')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}



function upload(){

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];


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