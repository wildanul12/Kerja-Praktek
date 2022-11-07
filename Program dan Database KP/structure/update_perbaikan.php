<?php
	include('koneksidatabase.php');

	$id 			=$_POST['id'];
	$nama			=$_POST['nama'];
	$tanggal		=$_POST['tanggal'];
	$spliter_asal 	=$_POST['spliter_asal'];
	$spliter_baru 	=$_POST['spliter_baru'];
	$jumlah			=$_POST['jumlah'];
	$alamat			=$_POST['alamat'];

	$update	= mysqli_query($conn, "UPDATE `perbaikan` SET `nama` = '$nama', `tanggal` = '$tanggal', `spliter_asal` = '$spliter_asal', `spliter_baru` = '$spliter_baru', `jumlah` = '$jumlah', `alamat` = '$alamat' WHERE `id` = '$id'");

	if($update){
		echo "<script>alert('Yess Data Berhasil Diubah');
		window.location='laporan_perbaikan.php'</script>";
	}else{
		echo "<script>alert('Aduhh Data Gagal Diubah');
		window.location='laporan_perbaikan.php'</script>";
	}
?>