<?php
include('koneksidatabase.php');

$id 		=$_POST['id'];
$nama		=$_POST['nama'];
$tanggal	=$_POST['tanggal'];
$spliter_asal	=$_POST['spliter_asal'];
$spliter_baru	=$_POST['spliter_baru'];
$jumlah		=$_POST['jumlah'];
$alamat		=$_POST['alamat'];
$status	=$_POST['status'];


if (empty($nama)) {
	echo "<script>alert('Data belum terisi lengkap!');
			window.location='perbaikan.php'</script>";
}else if (empty($tanggal)) {
	echo "<script>alert('Data belum terisi lengkap!');
			window.location='perbaikan.php'</script>";
}else if (empty($spliter_baru)) {
	echo "<script>alert('Data belum terisi lengkap!');
			window.location='perbaikan.php'</script>";
}else if (empty($jumlah)) {
	echo "<script>alert('Data belum terisi lengkap!');
			window.location='perbaikan.php'</script>";
}else if (empty($alamat)) {
	echo "<script>alert('Data belum terisi lengkap!');
			window.location='perbaikan.php'</script>";
}else if (empty($status)) {
	echo "<script>alert('Data belum terisi lengkap!');
			window.location='perbaikan.php'</script>";
}
else{
	$simpan	= mysqli_query($conn, "INSERT INTO perbaikan VALUES(NULL, '$nama','$tanggal','$spliter_asal', '$spliter_baru', '$jumlah', '$alamat', '$status')") or die(mysqli_error());

	$update	= mysqli_query($conn, "UPDATE pengecekan SET status = '$status' WHERE id = '$id'");

	if($simpan){
			echo "<script>alert('Data Berhasil Disimpan');
			window.location='perbaikan.php'</script>";
			}else{
			echo "<script>alert('Data Gagal Disimpan');
			window.location='perbaikan.php'</script>";
	}
}
?>