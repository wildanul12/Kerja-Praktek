<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="css/paper.css">
	<title>Halaman Print A4</title>
</head>
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
		<?php
			include"koneksidatabase.php";
			if (isset($_POST['submit'])) {
				$cari=$_POST['cari'];
				$tampil=mysqli_query($conn, "SELECT*FROM perbaikan WHERE spliter_baru LIKE 'cari'%");
			}

			$no=1;
			$tampil=mysqli_query($conn, "SELECT*FROM perbaikan");
			while($data=mysqli_fetch_array($tampil)){
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
			</tr>
		<?php }?>
	</table>
	<script type="text/javascript">window.print();</script>
</body>
</html>