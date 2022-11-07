<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sistem Informasi Spliter | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<body class="hero-wrap">
	<div style="background-color: red; padding: 12px; text-align: center;">
		<h1 align="left" style="color: white; margin-left: 30px;margin-top: 30px; text-align: center;">
			SISTEM PENYIMPANAN PENGECEKAN
		</h1>
	</div>
	<hr>
	<div>
		<form action="simpan_pengecekan.php" method="post" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<th>Nama</th>
					<th>Tanggal</th>
					<th>Serial Number Spliter</th>
					<th>Jumlah</th>
					<th>Alamat</th>
					<th>foto</th>
				</tr>
				<tr>
					<td><input type="text" name="nama" placeholder="Nama lengkap"></td>
					<td><input type="date" name="tanggal" placeholder="Tanggal"></td>
					<td><input type="text" name="sn_spliter" placeholder="Serial number"></td>
					<td><input type="number" name="jumlah" placeholder="Jumlah"></td>
					<td><input type="text" name="alamat" placeholder="Alamat"></td>
					<td><input type="file" name="foto"></td>
					<input type="hidden" name="status" value="Belum" placeholder="Status">
				</tr>
			</table>
			<center>
				<img src="images/bg_1.png" style="width: 220px;opacity: 20%;">
			</center>
			<div style="text-align: right; margin-right: 32px;">
				<button class="btn btn-warning"><a style="color: black;" href="home1.php">Kembali</a></button>
				<input type="reset" value="Batal" class="btn btn-danger">
				<input  type="submit" value="Simpan" class="btn btn-success" style="color: white;">
			</div>
		</form>
	</div>
</body>
</html>