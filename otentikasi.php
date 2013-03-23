<?php

include('config.php');

//menangkap data dari login
$nis = $_POST['nis'];
$password = $_POST['password'];
//$nis = mysql_real_escape_string($_POST['nis']);
//$password = mysql_real_escape_string($_POST['password']); 

//memastikan
//$clientdata = mysql_query("SELECT * FROM anggota WHERE id_anggota='$no' and password='$pass'")
 //or die (mysql_error());

//cek data yang dikirim, apakah kosong atau tidak
if (empty($nis) && empty($password)) {
	//kalau username dan password kosong
	header('location:login_siswa.php?error= 1');
	break;
} else if (empty($nis)) {
	//kalau username saja yang kosong
	header('location:login_siswa.php?error= 2');
	break;
} else if (empty($nis)) {
	//kalau password saja yang kosong
	header('location:login_siswa.php?error=3');
	break;
}
$perintahnya ="select * from siswa where nis='$nis' and password='$password'";
$jalankanperintahnya= mysql_query($perintahnya); 
$ada_apa_enggak = mysql_num_rows($jalankanperintahnya);
//$data = mysql_fetch_array($ada_apa_enggak,$con);

if ($ada_apa_enggak == 1) {
	//kalau username dan password sudah terdaftar di database
	//if(mysql_num_rows($perintahnya) == 1){
	// Start a new blank session. This will assign the user's server
	// with a session with an idividual ID
	//session_start();

	// With our session started, we can assign variables for a logged
	// in user to use until they log out.
	/*$_SESSION['nis'] = $_POST['nis'];
	$_SESSION['nm_siswa'] = $data['nm_siswa'];
	$_SESSION['almt_siswa'] = $data['almt_siswa'];
	$_SESSION['tmp_lahir'] = $data['tmp_lahir'];
	$_SESSION['tgl_lahir'] = $data['tgl_lahir'];
	$_SESSION['jk'] = $data['jk'];
	$_SESSION['agama'] = $data['agama'];
	$_SESSION['th_ajar'] = $data['th_ajar'];
	$_SESSION['kd_kelas'] = $data['kd_kelas'];*/
	

	// Redirect ke halaman muka
	//header('Location: utama.php');
$_SESSION['nis'] = $_POST['nis'];
header('Location: utama_siswa.php');

} else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:login_siswa.php?error= 4');
}
?>



