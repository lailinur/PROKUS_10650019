<?php

//session_start();
include 'config.php';
 
//tangkap data dari form
$kd_kelas = $_POST['kd_kelas'];
$nm_kelas = $_POST['nm_kelas'];
<<<<<<< HEAD

 
//simpan data ke database
$query = mysql_query("insert into kelas values('$kd_kelas', '$nm_kelas')") or die(mysql_error());
=======
$nis = $_POST['nis'];
$th_ajar = $_POST['th_ajar'];

 
//simpan data ke database
$query = mysql_query("insert into kelas values('$kd_kelas', '$nm_kelas', '$nis', '$th_ajar')") or die(mysql_error());
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
 
if ($query) {
$_SESSION['user_admin'] = $_POST['user_admin'];
echo "<script>alert('berhasil menginputkan');document.location='data_kelas.php?message=success';</script>";

	}
?> 