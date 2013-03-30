<?php
	session_start();
	include "config.php";
	if(!isset($_SESSION['user_admin'])){
		echo "<script>alert('Anda tidak punya hak untuk mengakses file ini');document.location='login_admin.php';</script>";
	}else if(($_SESSION['user_admin'])){
		$nip = $_POST['nip'];
		$nama = $_POST['nm_guru'];
		$alamat = $_POST['alamat'];
		$jk = $_POST['jk'];
		$edit = mysql_query("UPDATE guru SET nm_guru='$nama',alamat='$alamat',jk='$jk' WHERE nip='$nip'");
		if($edit){
			echo "<script>alert('Data berhasil diubah');document.location='utama_admin.php';</script>";
		}else{
			echo "<script>alert('Data gagal diubah');document.location='utama_admin.php';</script>";
		}
	}else{
		echo "<script>alert('Anda tidak punya hak untuk mengakses file ini');document.location='login_admin';</script>";	
}
?>