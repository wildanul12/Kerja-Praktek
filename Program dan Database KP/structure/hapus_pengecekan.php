<?php
include('koneksidatabase.php');
$id=$_GET['id'];
$hapus="DELETE FROM pengecekan WHERE id='$id'";
mysqli_query($conn,$hapus);
echo"
<script>
alert('Berhasil Dihapus');
window.location='laporan_pengecekan.php';
</script>";
?>