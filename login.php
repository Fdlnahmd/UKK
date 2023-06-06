<?php

include 'config.php';

if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memilih tabel
    $cek_data = mysqli_query($mysqli, "SELECT * FROM admin WHERE username = '$user' AND password = '$password'");
    $hasil = mysqli_fetch_array($cek_data);
    $login_user = $hasil['username'];
    $row = mysqli_num_rows($cek_data);

    // Pengecekan Kondisi Login Berhasil/Tidak
    if ($row > 0) {
        session_start();
        $_SESSION['login_user'] = $login_user; {
            header('location: datasiswa.php');
        }
    } else {
        header("location: login.php");
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>


    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="font awesome/css/font-awesome.min.css" />
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>


</head>

<body class="text-center">

    <main class="form-signin">
        <form method="POST">
            <img class="mb-4" src="telkom2.jpeg" alt="" width="80" height="80">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" maxlength="8" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <p class="up">
                Belum punya akun?
                <a href="register.php">Register di sini</a>
            </p>
            <span>
                <button type="submit" class="w-100 btn btn-lg btn-primary" name="submit" value="LOGIN">Login</button>
            </span>
        </form>
    </main>



</body>

</html>