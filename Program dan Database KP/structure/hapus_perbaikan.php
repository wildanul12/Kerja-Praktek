<?php
include('koneksidatabase.php');
$id=$_GET['id'];
$hapus="DELETE FROM perbaikan WHERE id='$id'";
mysqli_query($conn,$hapus);
echo"
<script>
alert('Berhasil Dihapus');
window.location='laporan_perbaikan.php';
</script>";
?>