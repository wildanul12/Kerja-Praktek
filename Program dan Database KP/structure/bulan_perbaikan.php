<?php 	include 'koneksidatabase.php'; ?>
<?php $bulan = $_POST['bulan']; ?>
<?php $tahun = $_POST['tahun']; ?>
<?php 	$bulan = mysqli_query($conn, "SELECT * FROM perbaikan WHERE YEAR(tanggal)='$tahun' AND MONTH(tanggal)='$bulan'"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>

	<body onload="read()">
	<div class="book">
	    <div class="page" id="page">
	        <div id="sub">
		    	<h2 align="center">Laporan Data Perbaikan</h2>
	<table border="'1" width="100%">
		<tr style="background-color: red">
			<td>No.</td>
			<td>Nama</td>
			<td>Tanggal</td>
			<td>SN Spliter Asal</td>
			<td>SN Spliter Baru</td>
			<td>Jumlah</td>
			<td>Alamat</td>
			
		</tr>
		<?php $no = 1; ?>
		<?php while ($hasil = mysqli_fetch_array($bulan)) { ?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $hasil['nama'];?></td>
				<td><?php echo $hasil['tanggal'];?></td>
				<td><?php echo $hasil['spliter_asal'];?></td>
				<td><?php echo $hasil['spliter_baru'];?></td>
				<td><?php echo $hasil['jumlah'];?></td>
				<td><?php echo $hasil['alamat'];?></td>
			</tr>
		<?php }?>
	</table>
	<script type="text/javascript">window.print();</script>
</body>
</html>