<?php
// Create database connection using config file
include_once("config.php");
$no_urut = 0;




// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM siswa ORDER BY nama ASC");
?>
<?php
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: Login.php");
} else {
?>

    <html>

    <head>
        <title>Homepage</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <script src="js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
        <link rel="stylesheet" href="font awesome/css/font-awesome.min.css" />

        <style>
            .nav-item {
                display: flex;
                justify-content: center;
            }

            tr {
                background-color: aliceblue;
            }

            .dts {
                background-color: red;
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
                    <form action="datasiswa.php" method="GET" class="d-flex" role="search">
                        <a href="logout.php" class="btn btn-danger">Logout</a>

                        <input name="kata_cari" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="<?php if (isset($_GET['kata_cari'])) {
                                                                                                                                            echo $_GET['kata_cari'];
                                                                                                                                        } ?>" />
                        <button class="btn btn-outline-success" type="submit">
                            Search
                        </button>
                        <a class="btn btn-danger" href="datasiswa.php" type="button">
                            Reset
                        </a>

                    </form>

                </div>
            </div>
        </nav>
        <div class="container">
            <center>
                <form action="" method="POST" class="login-email">
                    <?php echo "<h1>Selamat Datang, " . $_SESSION['login_user'] . "!" . "</h1>"; ?>

                </form>
            </center>
            <h1 class="mt-4">Data siswa</h1>
            <figure>
                <blockquote class="blockquote">
                    <p>Data Siswa yang telah disimpan</p>

                </blockquote>
            </figure>

            <div class="table-responsive">
                <table id="" class="table align-middle table-bordered table-hover">
                    <thead>
                        <tr class="dts">
                            <th colspan="5">
                                <center>Data siswa</center>
                            </th>
                        </tr>
                        <tr>
                            <center>
                                <th>
                                    <center>No</center>
                                </th>
                                <th>
                                    <center>Nis</center>
                                </th>
                                <th>
                                    <center>Nama</center>
                                </th>
                                <th>
                                    <center>Kelas</center>
                                </th>
                                <th>
                                    <center>Email</center>
                                </th>
                            </center>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        //untuk menyambungkan dengan file koneksi.php
                        include_once("config.php");

                        //jika kita klik cari, maka yang tampil query cari ini
                        if (isset($_GET['kata_cari'])) {
                            //menampung variabel kata_cari dari form pencarian
                            $kata_cari = $_GET['kata_cari'];

                            //mencari data dengan menggunakan query
                            $query = "SELECT * FROM siswa WHERE nis like '%" . $kata_cari . "%' OR nama like '%" . $kata_cari . "%' OR kelas like '%" . $kata_cari . "%' OR email like '%" . $kata_cari . "%' ORDER BY nama ASC";
                        } else {
                            //jika tidak ada pencarian, default yang dijalankan query ini
                            $query = "SELECT * FROM siswa ORDER BY nama ASC";
                        }


                        $result = mysqli_query($mysqli, $query);

                        if (!$result) {
                            die("Query Error : " . mysqli_errno($mysqli) . " - " . mysqli_error($mysqli));
                        }

                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result)) {
                            $no_urut++;
                        ?>
                            <tr>
                                <td>
                                    <center><?php echo $no_urut ?> </center>
                                </td>
                                <td>
                                    <center><?php echo $user_data['nis']; ?> </center>
                                </td>
                                <td>
                                    <center><?php echo $user_data['nama']; ?> </center>
                                </td>
                                <td>
                                    <center><?php echo $user_data['kelas']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $user_data['email']; ?></center>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>

    </html>
<?php } ?>