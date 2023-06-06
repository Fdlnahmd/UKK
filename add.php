    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $email = $_POST['email'];
        header("Location: datasiswa.php");

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO siswa(nis,nama,kelas,email) VALUES('$nis','$nama','$kelas','$email')");


        // Show message when user added
        echo "Data Siswa added successfully.";
    }
    ?>
    <html>

    <head>
        <title>Add Users</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <script src="js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="font awesome/css/font-awesome.min.css" />
        <style>
            li {
                cursor: default;
            }

            .links a {
                font-size: 30px;
                color: #3d535f;
                /*top right bottom left*/
                margin: 10px -10px 0px 20px;
            }

            .yt:hover {
                color: red;
            }

            .ig:hover {
                color: palevioletred;
            }

            table {
                width: 50%;
            }

            td {
                padding: 25px 50px 5px 70px;
            }

            .form-control {
                box-sizing: border-box;
                width: 100%;
                padding: 10px;
                font-size: 11pt;
                margin-bottom: 20px;
            }

            .add {
                background: #46de4b;
                color: white;
                font-size: 11pt;
                width: 100%;
                border: none;
                border-radius: 3px;
                padding: 10px 20px;
            }

            .reset {
                background: red;
                color: white;
                font-size: 11pt;
                width: 100%;
                border: none;
                border-radius: 3px;
                padding: 10px 20px;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
            <div class="container">
                <a class="navbar-brand" href="datasiswa.php"><img src="telkom.jpeg" width="100" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="add.php" type="button" class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                                Tambah Data
                            </a>
                        </li>
                        &emsp;
                        <li class="nav-item">
                            <a href="edit.php" type="button" class="btn btn-success">
                                <i class="fa fa-pencil"></i> Edit Data
                            </a>
                        </li>
                        &emsp;
                        <li class="nav-item">
                            <a href="delete.php" type="button" class="btn btn-danger ">
                                <i class="fa fa-trash"></i> Delete Data
                            </a>
                        </li>
                        <div class="links">
                            <a href="https://www.instagram.com/smktelkomjakarta/"><i class="ig fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/@smktelkom.jakarta"><i class="yt fab fa-youtube"></i></a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <center>
                <img src="telkom2.jpeg" width="100px" height="90px" alt="">
                <figure>
                    <blockquote class="blockquote">
                        <p>Tambah Data Siswa</p>
                    </blockquote>
                </figure>
                <form action="add.php" method="post" name="form1">
                    <table border="2">
                        <td>
                            <div class="mb-3 row">
                                <label for="nis" class="col-sm-2 col-form-label">Nis</label>
                                <div class="col-sm-10">
                                    <input type="" class="form-control" name="nis" maxlength="9" placeholder="Example : 5392" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nis" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" placeholder="Example : Andi" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nis" class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-10">
                                    <select name="kelas" id="kelas" class="form-control" required>
                                        <option value=""> Choose Class</option>
                                        <option value="XI T1">XI TEL 1</option>
                                        <option value="XI T2">XI TEL 2</option>
                                        <option value="XI T3">XI TEL 3</option>
                                        <option value="XI T4">XI TEL 4</option>
                                        <option value="XI T5">XI TEL 5</option>
                                        <option value="XI T6">XI TEL 6</option>
                                        <option value="XI T7">XI TEL 7</option>
                                        <option value="XI T8">XI TEL 8</option>
                                        <option value="XI T9">XI TEL 9</option>
                                        <option value="XI T10">XI TEL 10</option>
                                        <option value="XI T11">XI TEL 11</option>
                                        <option value="XI T12">XI TEL 12</option>
                                        <option value="XI T13">XI TEL 13</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nis" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                                </div>
                            </div>
                            <tr>
                                <td><input class="add " type="submit" name="Submit" value="Add"> <input class="reset " type="reset" value="Reset"></td>
                            </tr>
                        <td></td>
                        </td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>



    </body>

    </html>