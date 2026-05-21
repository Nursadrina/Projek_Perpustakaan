<?php 
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$id'");

if($query){
    echo "<script> alert('Data berhasil dihapus'); </script>";
}else{
    echo "<script> alert('Data gagal dihapus'); </script>";
}


?>
<