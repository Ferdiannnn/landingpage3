<?php 
session_start();

require 'function.php';
// cek cookie

if (isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

// ambil username dari id

	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id" );
	$row = mysqli_fetch_assoc($result);

	//cek username dan cookie
	if ( $key === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;
	}
}


if (isset($_SESSION["login"])) {



	header("Location: admin/index.php");
	exit;
}




if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];


	$result = mysqli_query($conn, "SELECT * FROM user WHERE 
		username = '$username'" );
    $data = mysqli_num_rows($result);

		//cek username
		if (mysqli_num_rows($result) === 1 ) {
		
			// cek password
			$row = mysqli_fetch_assoc($result);
			if (password_verify($password, $row["password"])){

				//set session
				$_SESSION["login"] = true;

				//cek remember me
				if (isset($_POST['remember'])) {

					// buat cookie 

					setcookie('id',$row['id'], time()+60);
					setcookie('key',hash('sha256', $row['username']), time()+60);
				}

				header("Location: admin/index.php");
				exit;
		}
}

$error = true;
}





 ?>


<!DOCTYPE html>
<html>

<head>
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <style type="text/css">

    </style>

    <title>
        Login
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/update1.css">
</head>

<body class="bodyy">




    <?php if (isset($error)) : ?>
    <p class="text-center" style="color: red; font-style: italic;">username / password salah</p>
    <?php endif; ?>

    <h1></h1>
    <div class="container">
        <div class="row">
            <div class="col">

                <form class="box" action="" method="post">

                    <ul>
                        <h1 class="mt-2 loginh1"> Login</h1>

                        <input type="text" name="username" placeholder="username">

                        <input type="password" name="password" placeholder="password">
                        <br>
                        <input type="checkbox" name="remember" id="remember">



                        <label for="remember">remember me :</label>
                        <br>
                        <input type="submit" name="login"></button>

                    </ul>

                    <ul>
                        <button class="btn btn-danger regis" type="button"
                            onclick="window.location.href='registrasi.php'">Register</button>
                    </ul>

                </form>
            </div>
        </div>
    </div>

</body>

</html>