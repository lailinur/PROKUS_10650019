<?php
session_start();
include('config.php');
 
//tangkap data dari form
$nip = $_POST['nip'];
$nm_guru = $_POST['nm_guru'];
$pass_guru = $_POST['pass_guru'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
 

$query = mysql_query("update guru set nm_guru='$nm_guru', pass_guru='$pass_guru', jk='$jk', agama='$agama', alamat='$alamat' where nip='$nip'") or die(mysql_error());
if ($query) {
<<<<<<< HEAD
    header('location:data_guru.php?message=success');	
=======
    header('location:view_guru.php?message=success');	
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
}
?>