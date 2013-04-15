<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Halaman Admin</title>
<link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.dropotron-1.0.js"></script>
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#">SIA SMP N 1 Bantul</a></h1>
				<p>Jl. RA. Kartini No. 44 Bantul 55714 Telp./Fax.(0274) 367319 Yogyakarta</p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu-wrapper">
		<ul id="menu">
		<li><a href="logout.php"><img src ="images/home.png" /><span>Logout</span></a></li>
		<li><img src ="images/nilai.png" /><span>Input</span></a>
			<ul>
					<li class="first"> <a href="data_siswa.php"><img src ="images/page_edit.png" />Input Data Siswa</a> </li>
					<li> <a href="data_jadwal.php"><img src ="images/page_edit.png" />Input Data Jadwal</a> </li>
					<li> <a href="data_mapel.php"><img src ="images/page_edit.png" />Input Data Mapel</a> </li>
					<li> <a href="data_kelas.php"><img src ="images/page_edit.png" />Input Data Kelas</a> </li>
					<li class="last"> <a href="data_berita.php"><img src ="images/page_edit.png" />Input Data Berita</a> </li>
			</ul>
		</li>
		</ul>
		<script type="text/javascript">
			$('#menu').dropotron();
		</script>
	</div>
	<!-- end #menu -->
	<!-- <div id="splash"><img src="images/pics01.jpg" width="980" height="300" alt="" /></div> -->
	<div id="page">

			<h2 class="title">Data Guru</h2>
<?php
session_start();
include 'config.php';
$user_admin = $_SESSION['user_admin'];



if (!isset($_SESSION['user_admin'])){
header("Location:./login_admin.php");
}
$conn=mysql_connect("localhost", "root", "");
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3>Berhasil menambah data!</h3>';
}
?>

<form name="input_data" action="insertG.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr>
            <td>NIP</td>
            <td>:</td>
            <td><input type="text" name="nip" required="required" /></td>
        </tr>
        <tr>
            <td>Nama Guru</td>
            <td>:</td>
            <td><input type="text" name="nm_guru" required="required" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="text" name="pass_guru" required="required"> </textarea></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jk" required="required" /></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><input type="text" name="agama"  required="required" /></td>
        </tr>
		<tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="year" name="alamat" required="required" /></td>
        </tr>
        <tr>
            <td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
		
    </tbody>
</table>

</form>
<a href="view_guru.php"><h3>Lihat Data</h3></a>
			
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>2013. SIA SMP N 1 Bantul. Design by <a href="http://www.smpn1bantul.net">Herucakra</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
