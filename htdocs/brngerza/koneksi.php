<?php
$koneksi=mysqli_connect("localhost","root","mysql","if0_42321190_PRILink");
echo("");

if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}   
?>