<?php
session_start();
include('config.php');
 
//tangkap data dari form
$kd_kelas = $_POST['kd_kelas'];
$nm_kelas = $_POST['nm_kelas'];
<<<<<<< HEAD

 

$query = mysql_query("update kelas set nm_kelas='$nm_kelas' where kd_kelas='$kd_kelas'") or die(mysql_error());
 
if ($query) {
    header('location:data_kelas.php?message=success');	
=======
$nis = $_POST['nis'];
$th_ajar = $_POST['th_ajar'];

 

$query = mysql_query("update kelas set nm_kelas='$nm_kelas', nis='$nis', th_ajar='$th_ajar' where kd_kelas='$kd_kelas'") or die(mysql_error());
 
if ($query) {
    header('location:view_kelas.php?message=success');	
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
}
?>