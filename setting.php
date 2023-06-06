<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $email = $_POST['email'];
    header("Location: datasiswa.php");

    echo "Data telah di update";

    // update user data
    $result = mysqli_query($mysqli, "UPDATE siswa SET nis='$nis', nama='$nama',kelas='$kelas',email='$email' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: datasiswa.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM siswa WHERE id=$id ");

while ($user_data = mysqli_fetch_array($result)) {
    $nis    = $user_data['nis'];
    $nama   = $user_data['nama'];
    $kelas  = $user_data['kelas'];
    $email  = $user_data['email'];
}
?>
<html>
<center>

    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <script src="js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

        <link rel="stylesheet" href="font awesome/css/font-awesome.min.css" />

        <style>
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

            .primary {
                background: #46de4b;
                color: white;
                font-size: 11pt;
                width: 100%;
                border: none;
                border-radius: 3px;
                padding: 10px 20px;
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
                </div>
            </div>
        </nav>
        <img src="telkom2.jpeg" width="100px" height="90px" alt="">
        <figure>
            <blockquote class="blockquote">
                <p> Update Data Siswa </p>
            </blockquote>
        </figure>
        <div class="container">

            <form name="update_user" method="post" action="setting.php">
                <table border="2">
                    <tr>
                        <td>Nis</td>
                        <td><input type="text" name="nis" class="form-control" value=<?php echo $nis; ?>></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" class="form-control" value=<?php echo $nama; ?>></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>
                            <select name="kelas" class="form-control" id="kelas">
                                <option value=""> Choose Class</option>
                                <option value="XI T1" <?php if ($kelas == 'XI T1') {
                                                            echo "selected";
                                                        } ?>>XI TEL 1</option>
                                <option value="XI T2" <?php if ($kelas == 'XI T2') {
                                                            echo "selected";
                                                        } ?>>XI TEL 2</option>
                                <option value="XI T3" <?php if ($kelas == 'XI T3') {
                                                            echo "selected";
                                                        } ?>>XI TEL 3</option>
                                <option value="XI T4" <?php if ($kelas == 'XI T4') {
                                                            echo "selected";
                                                        } ?>>XI TEL 4</option>
                                <option value="XI T5" <?php if ($kelas == 'XI T5') {
                                                            echo "selected";
                                                        } ?>>XI TEL 5</option>
                                <option value="XI T6" <?php if ($kelas == 'XI T6') {
                                                            echo "selected";
                                                        } ?>>XI TEL 6</option>
                                <option value="XI T7" <?php if ($kelas == 'XI T7') {
                                                            echo "selected";
                                                        } ?>>XI TEL 7</option>
                                <option value="XI T8" <?php if ($kelas == 'XI T8') {
                                                            echo "selected";
                                                        } ?>>XI TEL 8</option>
                                <option value="XI T9" <?php if ($kelas == 'XI T9') {
                                                            echo "selected";
                                                        } ?>>XI TEL 9</option>
                                <option value="XI T10" <?php if ($kelas == 'XI T10') {
                                                            echo "selected";
                                                        } ?>>XI TEL 10</option>
                                <option value="XI T11" <?php if ($kelas == 'XI T11') {
                                                            echo "selected";
                                                        } ?>>XI TEL 11</option>
                                <option value="XI T12" <?php if ($kelas == 'XI T12') {
                                                            echo "selected";
                                                        } ?>>XI TEL 12</option>
                                <option value="XI T13" <?php if ($kelas == 'XI T13') {
                                                            echo "selected";
                                                        } ?>>XI TEL 13</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" class="form-control" value=<?php echo $email; ?>></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                        <td><input type="submit" name="update" value="update" class=" primary"></td>
                    </tr>
                </table>
            </form>
</center>
</div>
</body>

</html>