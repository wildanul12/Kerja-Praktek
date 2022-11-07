<?php
include('koneksidatabase.php');

$nama		=$_POST['nama'];
$tanggal	=$_POST['tanggal'];
$sn_spliter	=$_POST['sn_spliter'];
$jumlah		=$_POST['jumlah'];
$alamat		=$_POST['alamat'];

$sumber = $_FILES['foto']['tmp_name'];
$nama_foto = $_FILES['foto']['name'];

$status		=$_POST['status'];

if (empty($nama)) {
	echo "<script>alert('Data belum terisi lengkap!');
			window.location='pengecekan.php'</script>";
}else if (empty($tanggal)) {
	echo "<script>alert('Data belum terisi lengkap!');
			window.location='pengecekan.php'</script>";
}else if (empty($sn_spliter)) {
	echo "<script>alert('Data belum terisi lengkap!');
			window.location='pengecekan.php'</script>";
}else if (empty($jumlah)) {
	echo "<script>alert('Data belum terisi lengkap!');
			window.location='pengecekan.php'</script>";
}else if (empty($alamat)) {
	echo "<script>alert('Data belum terisi lengkap!');
			window.location='pengecekan.php'</script>";
}else if (empty($nama_foto)) {
	echo "<script>alert('Data belum terisi lengkap!');
			window.location='pengecekan.php'</script>";
}
else{
	$simpan	= mysqli_query($conn, "INSERT INTO pengecekan VALUES(NULL, '$nama','$tanggal','$sn_spliter','$jumlah','$alamat', '$sn_spliter', '$status')") or die(mysqli_error());
	$pindah = move_uploaded_file($sumber, "img/".$sn_spliter.".jpg");

	if($simpan){
			echo "<script>alert('Data Berhasil Disimpan');
			window.location='pengecekan.php'</script>";
			}else{

				?>
					<script type="text/javascript">
					alert("foto gagal di upload");
					</script>
					<?php

			echo "<script>alert('Data Gagal Disimpan');
			window.location='pengecekan.php'</script>";
	}
}
?>