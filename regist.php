<?php
//Include file koneksi ke database
include "config.php";

//menerima nilai dari kiriman form pendaftaran
$user=$_POST["username"];
$password=$_POST["password"]; //untuk password digunakan enskripsi md5
$email=$_POST["email"];




//Menginput data ke tabel
  $hasil=mysqli_query($mysqli, "INSERT INTO admin (username,password,email) VALUES('$user','$password','$email')");

//Kondisi apakah berhasil atau tidak
  if ($hasil) 
  {
	echo "<script>
				alert('Anda Berhasil Registrasi !');
				document.location='login.php';
		  </script>";
  }
  else 
  {
	echo "<script>
				alert('Registrasi Anda Gagal !');
				document.location='registrasi.php';
		  </script>";
  }
