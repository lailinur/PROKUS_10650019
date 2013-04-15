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
$th_ajar = $_POST['th_ajar'];
$angkatan = $_POST['angkatan'];
 
//update data di database sesuai user_id
$query = mysql_query("update siswa set nm_siswa='$nm_siswa', password='$password', almt_siswa='$almt_siswa', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir',jk='$jk',agama='$agama', th_ajar='$th_ajar',angkatan='$angkatan' where nis='$no'") or die(mysql_error());
 
if ($query) {
    header('location:view_siswa.php?message=success');	
}
?>