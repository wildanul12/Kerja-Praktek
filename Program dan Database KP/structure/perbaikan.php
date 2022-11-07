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
<button class="btn btn-danger"><a style="color: black; text-align: right;" href="home1.php">Kembali</a></button>
</div>

<table border="'1" width="100%" class="table">
	<tr style="background-color: red">
			
			<th>No.</th>
			<th>spliter_asal</th>
			<th>Jumlah</th>
			<th>Alamat</th>
			<th>Status</th>
			<th>Aksi</th> </tr>
<?php
		$no=1;
		include"koneksidatabase.php";
		$sql=mysqli_query($conn, "SELECT*FROM pengecekan WHERE status = 'Belum'");
		while($data=mysqli_fetch_array($sql))
		{
	?>
	<tr>
			<td><?php echo $no++;?></td><?php $data['id'];?>
			<td><input type="text" name="sn_spliter" value="<?php echo $data['sn_spliter'];?>"></td>
			<td><input type="text" name="jumlah" value="<?php echo $data['jumlah'];?>"></td>
			<td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>"></td>
			<td><?php echo $data['status'];?></a>
			</td>
			<td><a href="edit_perbaiki.php?id=<?php echo $data['id'];?>">Perbaiki</a>
			</td> </tr>
<?php }?>
</table>
</div>
</body>
</html>