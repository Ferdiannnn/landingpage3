<?php 

require 'function.php';

	if (isset($_POST["register"])) {
		if (registrasi($_POST) > 0 ) {
			echo "<script> 
				alert('user baru berhasil di tambah');
			</script>";
		}else {
			echo mysqli_error($conn);
		}
	}


 ?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman Registrasi</title>
    <style>
    label {
        display: block;
    }
    </style>
    <link rel="stylesheet" href="css/inlog.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>



    <form class="box" action="" method="post">
        <h1>Registrasi</h1>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password2" placeholder="Ulang Password" required>
        <input type="text" name="level" placeholder="level" required>

        <input type="submit" name="register"></button>

        <a class="btn btn-danger br-3" href="login.php">Login</a>

    </form>

</body>

</html>