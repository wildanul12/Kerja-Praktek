<?php include 'koneksidatabase.php'; ?>
<?php $kywrd = $_POST['keyword'] ?>
<?php $sql = mysqli_query($conn, "SELECT * FROM pengecekan WHERE sn_spliter = '$kywrd'"); ?>
<html>
<head>
	<title>Laporan Data Pengecekan</title>
</head>
<body>
<h2 align="center">Laporan Data Pengecekan</h2>
	<a href="laporan_pengecekan.php" style="margin: 10px; text-decoration: none;">Kembali</a>
<hr>
<table border="'1" width="100%">
	<tr style="background-color: red">
			<td>No.</td>
			<td>Nama</td>
			<td>Tanggal</td>
			<td>Serial Number Splitter</td>
			<td>Jumlah</td>
			<td>Alamat</td>
			<td>foto</td>
			<td>Aksi</td>
	</tr>
<?php $no = 1; ?>
<?php while($output = mysqli_fetch_array($sql)){ ?>
	<tr>
		<td><?php echo $no++;?></td>
		<?php $output['id'];?>
		<td><?php echo $output['nama'];?></td>
		<td><?php echo $output['tanggal'];?></td>
		<td><?php echo $output['sn_spliter'];?></td>
		<td><?php echo $output['jumlah'];?></td>
		<td><?php echo $output['alamat'];?></td>
		<td><img style="width: 32px; height: 32px" src="img/<?=$output['foto'].'.jpg';?>"></td>
		<td><a href="edit_pengecekan.php?sn_spliter=<?php echo $output['sn_spliter'];?>">Edit</a>
		<a href="hapus_pengecekan.php?id=<?php echo $output['id'];?>">Hapus</a>
		<form action="print_pengecekan.php" method="post">
			<button onclick="return confirm('Cetak laporan');">Cetak</button>
			</form>
		</td>
	</tr>
<?php } ?>
</table>