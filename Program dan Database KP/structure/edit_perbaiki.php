<?php 
  session_start();
  if (!isset($_SESSION['username'])) {
    header('Location: login.php');
  }else{
    $username = $_SESSION['username'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Perbaikan</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
<body>
<div style="background-color: red; padding: 12px; text-align: left;">	
<h2 align="center">DATA YANG BELUM DI PERBAIKI USER</h2>
<button class="btn btn-danger"><a style="color: black; text-align: right;" href="perbaikan.php">Kembali</a></button>
</div>
<?php
include"koneksidatabase.php";
$id=$_GET['id'];
$edit="SELECT*FROM pengecekan where id='$id'";
$query=mysqli_query($conn,$edit);
$data=mysqli_fetch_array($query);
?>

<form action="simpan_perbaikan.php" method="post" enctype="multipart/form-data">
<table border="'1" width="100%" class="table">
	<tr style="background-color: red">
			
			
			<th>Nama</th>
			<th>Tanggal</th>
			<th>spliter_asal</th>
			<th>spliter_baru</th>
			<th>Jumlah</th>
			<th>Alamat</th>
			<th>Status</th>
			<th>Aksi</th> </tr>

	<tr>
			<input type="hidden" name="id" value="<?php echo $data['id'];?>">
			<input type="hidden" name="foto" value="<?php echo $data['foto'];?>">
			<td><input type="text" name="nama" placeholder="Nama lengkap"></td>
			<td><input type="date" name="tanggal" placeholder="Tanggal"></td>

			<input type="hidden" name="spliter_asal" value="<?php echo $data['sn_spliter'];?>">
			<td><?php echo $data['sn_spliter'];?></td>
			
			<td><input type="text" name="spliter_baru" placeholder="Spliter baru"></td>

			<input type="hidden" name="jumlah" value="<?php echo $data['jumlah'];?>">
			<td><?php echo $data['jumlah'];?></td>
			
			<input type="hidden" name="alamat" value="<?php echo $data['alamat'];?>">
			<td><?php echo $data['alamat'];?></td>

			<td><input type="radio" name="status" value="Sudah"> Sudah</td>
			<td>
			<input type="hidden" name="id" value="<?= $data['id'];?>">
			<input type="submit" value="simpan" class="btn btn-success"></td> </tr>
</table>
</form>
</div>
</body>
</html>