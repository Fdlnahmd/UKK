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
        <form method="POST" action="regist.php">
            <img class="mb-4" src="telkom2.jpeg" alt="" width="80" height="80">
            <h1 class="h3 mb-3 fw-normal">Sign Up</h1>

            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" maxlength="8" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <p class="up">
                Sudah punya akun?
                <a href="login.php">Login di sini</a>
            </p>
            <span>
                <button type="register" class="w-100 btn btn-lg btn-primary" name="" value="SIGN UP">Sign Up</button>
            </span>
        </form>
    </main>



</body>

</html>