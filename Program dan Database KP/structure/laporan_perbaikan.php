<?php 
  session_start();
  if (!isset($_SESSION['username'])) {
    header('Location: login.php');
  }else{
    $username = $_SESSION['username'];
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Perbaikan</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div style="background-color: red; padding: 12px; text-align: left;">	
<h2 align="center">Laporan Data Perbaikan Admin</h2>
<a href="home1.php">Kembali</a>
</div>
<form action="cari.php" method="post">
	<input type="text" name="keyword" size="25" autofocus placeholder="Cari Serial Number Splitter" autocomplete="off">
	<button type="submit" name="cari">CARI</button>
</form>
<table border="'1" width="100%" class="table">
	<tr style="background-color: red">
			<td>No.</td>
			<td>Nama</td>
			<td>Tanggal</td>
			<td>SN Spliter Asal</td>
			<td>SN Spliter Baru</td>
			<td>Jumlah</td>
			<td>Alamat</td>
			<td>Aksi</td>
	</tr>
<?php
		include"koneksidatabase.php";
		if (isset($_POST['submit'])) {
			$cari=$_POST['cari'];
			$tampil=mysqli_query($conn, "SELECT*FROM perbaikan WHERE spliter_baru LIKE 'cari'%");
		}

		$no=1;
		$tampil=mysqli_query($conn, "SELECT*FROM perbaikan");
		while($data=mysqli_fetch_array($tampil))
		{
?>
		<tr>
			<td><?php echo $no++;?></td>
			<?php $data['id'];?>
			<td><?php echo $data['nama'];?></td>
			<td><?php echo $data['tanggal'];?></td>
			<td><?php echo $data['spliter_asal'];?></td>
			<td><?php echo $data['spliter_baru'];?></td>
			<td><?php echo $data['jumlah'];?></td>
			<td><?php echo $data['alamat'];?></td>
			<td>
				<a href="edit_perbaikan.php?spliter_baru=<?php echo $data['spliter_baru'];?>">Edit</a>
				<a href="hapus_perbaikan.php?id=<?php echo $data['id'];?>">Hapus</a>
				<form action="print_perbaikan.php" method="post">
					<button onclick="return confirm('Cetak laporan');">Cetak</button>
				</form>
			</td>
		</tr>
<?php }?>
</table>
<div style="margin: 30px">
	<form action="bulan_perbaikan.php" method="POST">
	<table>	
		<tr>
			<th>Bulan</th>
			<th>Tahun</th>
		</tr>
		<tr>
			<td>
				<select name="bulan">
					<?php for ($i=1; $i <= 12; $i++) { 
						echo "<option>".$i."</option>";
					} ?>
				</select>
			</td>
			<td><input type="year" name="tahun"></td>
		</tr>
		<br>
		<tr>
			<td>
				<button class="btn btn-success" type="submit">Submit</button>
			</td>
		</tr>
	</table>
	</form>
</div>
</body>
</html>