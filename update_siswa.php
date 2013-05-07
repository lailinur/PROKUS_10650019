<?php
session_start();
include('config.php');
 
//tangkap data dari form
$no = $_POST['nis'];
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
$up = '.foto/';
$alamat = $up.$gb;
$dir = './foto/';
$url = $dir.$gb;
//update data di database sesuai user_id

if(move_uploaded_file($_FILES['gb']['tmp_name'],$alamat)){
$query = mysql_query("update siswa set nm_siswa='$nm_siswa', password='$password', almt_siswa='$almt_siswa', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir',jk='$jk',agama='$agama', angkatan='$angkatan', gb='$url' where nis='$no'") or die(mysql_error());
 
if ($query) {
    header('location:data_siswa.php?message=success');	
}
=======
$th_ajar = $_POST['th_ajar'];
$angkatan = $_POST['angkatan'];
 
//update data di database sesuai user_id
$query = mysql_query("update siswa set nm_siswa='$nm_siswa', password='$password', almt_siswa='$almt_siswa', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir',jk='$jk',agama='$agama', th_ajar='$th_ajar',angkatan='$angkatan' where nis='$no'") or die(mysql_error());
 
if ($query) {
    header('location:view_siswa.php?message=success');	
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
}
?>