<?php
include('config.php');
?>
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


<?php
session_start();
$user_admin = $_SESSION['user_admin'];



if (!isset($_SESSION['user_admin'])){
header("Location:./login_admin.php");
}
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3>Berhasil meng-update data!</h3>';
}
?>
<a href="data_guru.php"><img src ="images/add.png" /><h3>DATA</h3></a>
 
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
			<td>No.</td>
            <td>NIP</td>
			<td>Nama</td>
			<td>Password</td>
			<td>Jenis Kelamin</td>
            <td>Agama</td>
            <td>Alamat</td>
			<td colspan="2">Aksi</td>
        </tr>
    </thead>
    <tbody>
    <?php
    $query = mysql_query("select * from guru");
 
    $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr>
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
