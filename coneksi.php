<?php 

$koneksi = mysqli_connect("localhost", "root", "", "perpus_pwpb");

// check conection
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>