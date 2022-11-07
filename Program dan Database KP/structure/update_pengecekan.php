<?php
	include('koneksidatabase.php');

	$id 			=$_POST['id'];
	$nama			=$_POST['nama'];
	$tanggal		=$_POST['tanggal'];
	$sn_spliter 	=$_POST['sn_spliter'];
	$jumlah			=$_POST['jumlah'];
	$alamat			=$_POST['alamat'];

	$update	= mysqli_query($conn, "UPDATE `pengecekan` SET `nama` = '$nama', `tanggal` = '$tanggal', `sn_spliter` = '$sn_spliter', `jumlah` = '$jumlah', `alamat` = '$alamat' WHERE `id` = '$id'");

	if($update){
		echo "<script>alert('Yess Data Berhasil Diubah');
		window.location='laporan_pengecekan.php'</script>";
	}else{
		echo "<script>alert('Aduhh Data Gagal Diubah');
		window.location='laporan_pengecekan.php'</script>";
	}
?>