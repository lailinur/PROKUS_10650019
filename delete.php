<?php
include('config.php');
 
$nis = $_GET['nis'];
 
$query = mysql_query("delete from siswa where nis='$nis'") or die(mysql_error());
 
if ($query) {
    
<<<<<<< HEAD
	echo "<script>alert('berhasil menghapus');document.location='data_siswa.php?message=delete';</script>";
=======
	echo "<script>alert('berhasil menghapus');document.location='view_siswa.php?message=delete';</script>";
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
}
?>