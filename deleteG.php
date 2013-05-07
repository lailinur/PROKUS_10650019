<?php
include('config.php');
 
$nip = $_GET['nip'];
 
$query = mysql_query("delete from guru where nip='$nip'") or die(mysql_error());
 
if ($query) {
    
<<<<<<< HEAD
	echo "<script>alert('berhasil menghapus');document.location='data_guru.php?message=delete';</script>";
=======
	echo "<script>alert('berhasil menghapus');document.location='view_guru.php?message=delete';</script>";
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
}
?>