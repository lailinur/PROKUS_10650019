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
<<<<<<< HEAD
$angkatan = $_POST['angkatan'];
$gb = $_FILES['gb']['name'];
$up = './foto/';
$alamat = $up.$gb;
$dir = './foto/';
$url = $dir.$gb; 
//simpan data ke database


/*$fileName = $_FILES['gb']['name']; //get the file name
$fileSize = $_FILES['gb']['size']; //get the size
$fileError = $_FILES['gb']['error']; //get the error when upload
if($fileSize > 0 || $fileError == 0){ //check if the file is corrupt or error
$move = move_uploaded_file($_FILES['gb']['tmp_name'], './foto'.$fileName); //save image to the folder
if($move){
*/

if(move_uploaded_file($_FILES['gb']['tmp_name'],$alamat)){
$query = mysql_query("insert into siswa values('$nis','$nm_siswa', '$password', '$almt_siswa', '$tmp_lahir', '$tgl_lahir','$jk','$agama', '$angkatan', '$alamat')") or die(mysql_error());

=======
$th_ajar = $_POST['th_ajar'];
$angkatan = $_POST['angkatan'];
 
//simpan data ke database
$query = mysql_query("insert into siswa values('$nis','$nm_siswa', '$password', '$almt_siswa', '$tmp_lahir', '$tgl_lahir','$jk','$agama', '$th_ajar','$angkatan')") or die(mysql_error());
 
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
if ($query) {
$_SESSION['user_admin'] = $_POST['user_admin'];

echo "<script>alert('berhasil menginputkan');document.location='data_siswa.php?message=success';</script>";
<<<<<<< HEAD
}
}
=======

	}
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
?> 