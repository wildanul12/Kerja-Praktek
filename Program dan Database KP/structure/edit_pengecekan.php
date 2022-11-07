<!DOCTYPE html>
<html>
<head>
	<title>Edit Pengecekan</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div style="background-color: red; padding: 12px; text-align: left;">	
<h2 align="center">Edit Input Pengecekan</h2>
<a href="laporan_pengecekan.php">Kembali</a>
</div>
<table border="'1" width="100%" class="table">
	<tr style="background-color: red">

<?php
include"koneksidatabase.php";
$sn_spliter=$_GET['sn_spliter'];
$edit="SELECT*FROM pengecekan where sn_spliter='$sn_spliter'";
$query=mysqli_query($conn,$edit);
$data=mysqli_fetch_array($query);
?>

<form action="update_pengecekan.php" method="post" enctype="multipart/form-data">
<table border="'1" width="100%" class="table">
	<tr style="background-color: red">

				<th>Nama</th>
				<th>Tanggal</th>
				<th>SN Spliter</th>
				<th>Jumlah</th>
				<th>Alamat</th>
				<th>Aksi</th></tr>
		
				<td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
				<td><input type="text" name="tanggal" value="<?php echo $data['tanggal'];?>"></td>
				<td><input type="text" name="sn_spliter" value="<?php echo $data['sn_spliter'];?>"></td>
				<td><input type="text" name="jumlah" value="<?php echo $data['jumlah'];?>"></td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>"></td>
		<!-- <tr>
				<td>foto</td>
				<td>:</td>
				<td><input type="file" name="foto" value="<?php echo $data['foto'];?>"></td>
		</tr> -->
			<input type="hidden" name="id" value="<?= $data['id'];?>">
			<td><button type="submit" value="submit">Update</button>
		</tr>

	</table>
</form>
</body>
</html>

</body>
</html>