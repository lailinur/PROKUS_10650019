<?php

//session_start();
include 'config.php';
 
//tangkap data dari form
$nis = $_POST['nis'];
$nm_siswa = $_POST['nm_siswa'];
$password = $_POST['password'];
$almt_siswa = $_POST['almt_siswa'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$th_ajar = $_POST['th_ajar'];
$angkatan = $_POST['angkatan'];
 
//simpan data ke database
$query = mysql_query("insert into siswa values('$nis','$nm_siswa', '$password', '$almt_siswa', '$tmp_lahir', '$tgl_lahir','$jk','$agama', '$th_ajar','$angkatan')") or die(mysql_error());
 
if ($query) {
$_SESSION['user_admin'] = $_POST['user_admin'];

echo "<script>alert('berhasil menginputkan');document.location='data_siswa.php?message=success';</script>";

	}
?> 