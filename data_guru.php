<<<<<<< HEAD
<?php
include('config.php');
session_start();
$user_admin = $_SESSION['user_admin'];

if (!isset($_SESSION['user_admin'])){
header("Location:./login_admin.php");
}
?>

=======
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<<<<<<< HEAD
<title>SIA SMP N 1 Bantul</title>
=======
<title>Halaman Admin</title>
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
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
<<<<<<< HEAD
			<li><a href="logout.php"><img src ="images/home.png" /><span>Logout</span></a></li>
=======
		<li><a href="logout.php"><img src ="images/home.png" /><span>Logout</span></a></li>
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
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
<<<<<<< HEAD
	<!-- end #menu -->	
	<div id="page">
		<div id="content">
			<div class="contentbg">
				<h2>DATA GURU</h2>
				<table border="1" cellpadding="5" cellspacing="0">
    <tbody>
        <tr class='dark'>
			<td>No.</td>
            <td>NIP</td>
			<td>Nama</td>
			<td>Password</td>
			<td>Jenis Kelamin</td>
            <td>Agama</td>
            <td>Alamat</td>
			<td colspan="2">Aksi</td>
        </tr>
    <?php
    $query = mysql_query("select * from guru");
 
    $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr class='light'>
		<td><?php echo $no; ?></td>
            <td><?php echo $data['nip']; ?></td>
            <td><?php echo $data['nm_guru']; ?></td>
			<td><?php echo $data['pass_guru']; ?></td>
            <td><?php echo $data['jk']; ?></td>
            <td><?php echo $data['agama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
            
            <td><a href="edit_guru.php?nip=<?php echo $data['nip']; ?>"><img src ="images/edit.png" /></a></td>
			<td><a href="deleteG.php?nip=<?php echo $data['nip']; ?>"><img src ="images/bin.png" /></a></td>
        </tr>
    <?php
        $no++;
    }
    ?>
    </tbody>
</table>
			</div>
		</div>
		<!-- end #content -->
		<div id="sidebar-bg">
			<div id="sidebar">
				<h2 class="title">Input Data Guru</h2>
<form name="input_data" action="insertG.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr class='dark'>
=======
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
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
            <td>NIP</td>
            <td>:</td>
            <td><input type="text" name="nip" required="required" /></td>
        </tr>
<<<<<<< HEAD
        <tr class='light'>
=======
        <tr>
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
            <td>Nama Guru</td>
            <td>:</td>
            <td><input type="text" name="nm_guru" required="required" /></td>
        </tr>
<<<<<<< HEAD
        <tr class='dark'>
=======
        <tr>
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
            <td>Password</td>
            <td>:</td>
            <td><input type="text" name="pass_guru" required="required"> </textarea></td>
        </tr>
<<<<<<< HEAD
        <tr class='light'>
            <td>Jenis Kelamin</td>
			<td>:</td>
			<td><select name="jk">
				<option value="L">Laki-laki</option>
				<option value="P">Perempuan</option>
				</select></td>
        </tr>
        <tr class='dark'>
=======
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jk" required="required" /></td>
        </tr>
        <tr>
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
            <td>Agama</td>
            <td>:</td>
            <td><input type="text" name="agama"  required="required" /></td>
        </tr>
<<<<<<< HEAD
		<tr class='light'>
=======
		<tr>
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
            <td>Alamat</td>
            <td>:</td>
            <td><input type="year" name="alamat" required="required" /></td>
        </tr>
<<<<<<< HEAD
        <tr class='dark'>
=======
        <tr>
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
            <td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
		
    </tbody>
</table>
<<<<<<< HEAD
</form>
			</div>
		</div>
		<!-- end #sidebar -->
=======

</form>
<a href="view_guru.php"><h3>Lihat Data</h3></a>
			
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>2013. SIA SMP N 1 Bantul. Design by <a href="http://www.smpn1bantul.net">Herucakra</a>.</p>
</div>
<!-- end #footer -->
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> a324517994fd517582318f938a2a41a8e4d738eb
