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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/update1.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form class="box" action="" method="post">
                    <ul>
                        <h1 class="mt-2 regish1"> Registrasi</h1>
                        <input type="text" name="username" placeholder="username" required>
                        <input type="password" name="password" placeholder="password" required>
                        <br>
                        <input type="password" name="password2" placeholder="Ulang Password" required
                            style="width: 430px;">
                        <input hidden type="text" name="level" placeholder="level" value="member" required>

                        <br>
                        <input type="submit" name="register"></button>
                    </ul>
                    <ul>
                        <button class="btn btn-danger login" type="button"
                            onclick="window.location.href='login.php'">Sudah memiliki akun</button>
                    </ul>
                </form>
            </div>
        </div>
    </div>

</body>

</html>