<!DOCTYPE html>
<html>
<head>
	<title>Edit Perbaikan</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div style="background-color: red; padding: 12px; text-align: left;">	
<h2 align="center">Edit Input Perbaikan</h2>
<a href="laporan_perbaikan.php">Kembali</a>
</div>
<table border="'1" width="100%" class="table">
	<tr style="background-color: red">

<?php
include"koneksidatabase.php";
$spliter_baru=$_GET['spliter_baru'];
$edit="SELECT*FROM perbaikan where spliter_baru='$spliter_baru'";
$query=mysqli_query($conn,$edit);
$data=mysqli_fetch_array($query);
?>

<form action="update_perbaikan.php" method="post" enctype="multipart/form-data">
<table border="'1" width="100%" class="table">
	<tr style="background-color: red">

			<th>Nama</th>
			<th>Tanggal</th>
			<th>Splitter Asal</th>
			<th>Splitter Baru</th>
			<th>Jumlah</th>
			<th>Alamat</th>
			<th>Aksi</th></tr>

		
				<td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
				<td><input type="text" name="tanggal" value="<?php echo $data['tanggal'];?>"></td>
				<td><input type="text" name="spliter_asal" value="<?php echo $data['spliter_asal'];?>"></td>
				<td><input type="text" name="spliter_baru" value="<?php echo $data['spliter_baru'];?>"></td>
				<td><input type="text" name="jumlah" value="<?php echo $data['jumlah'];?>"></td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>"></td>
		<!-- <tr>
				<td>foto</td>
				<td>:</td>
				<td><input type="file" name="foto" value="<?php echo $data['foto'];?>"></td>
		</tr> -->
			<input type="hidden" name="id" value="<?= $data['id'];?>">
			<td><input type="submit" value="Update"></td>

	</table>
</form>
</body>
</html>

</body>
</html>