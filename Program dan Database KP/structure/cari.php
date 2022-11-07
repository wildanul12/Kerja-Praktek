<?php include 'koneksidatabase.php'; ?>
<?php $kywrd = $_POST['keyword'] ?>
<?php $sql = mysqli_query($conn, "SELECT * FROM perbaikan WHERE spliter_baru = '$kywrd'"); ?>
<html>
<head>
	<title>Laporan Data Perbaikan</title>
</head>
<body>
<h2 align="center">Laporan Data Perbaikan</h2>
	<a href="laporan_perbaikan.php" style="margin: 10px; text-decoration: none;">Kembali</a>
<hr>
<table border="'1" width="100%">
	<tr style="background-color: red">
			<td>No.</td>
			<td>Nama</td>
			<td>Tanggal</td>
			<td>SN Spliter Asal</td>
			<td>SN Spliter Baru</td>
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
		<td><?php echo $output['spliter_asal'];?></td>
		<td><?php echo $output['spliter_baru'];?></td>
		<td><?php echo $output['jumlah'];?></td>
		<td><?php echo $output['alamat'];?></td>
		<td><img style="width: 32px; height: 32px" src="perbaikan/<?=$output['foto'].'.jpg';?>"></td>
		<td><a href="edit_perbaikan.php?spliter_baru=<?php echo $output['spliter_baru'];?>">Edit</a>
		<a href="hapus_perbaikan.php?id=<?php echo $output['id'];?>">Hapus</a>
		<form action="print_perbaikan.php" method="post">
			<button onclick="return confirm('Cetak laporan');">Cetak</button>
			</form>
		</td>
	</tr>
<?php } ?>
</table>