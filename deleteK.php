<?php
include('config.php');
 
$id = $_GET['kd_kelas'];
 
$query = mysql_query("delete from kelas where kd_kelas='$id'") or die(mysql_error());
 
if ($query) {
<<<<<<< HEAD
   echo "<script>alert('berhasil menghapus');document.location='data_kelas.php?message=delete';</script>";
=======
   echo "<script>alert('berhasil menghapus');document.location='view_kelas.php?message=delete';</script>";
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
}
?>