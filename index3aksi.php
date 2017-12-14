<?php
include 'konek.php';
$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$propinsi = $_POST['propinsi'];
$kota = $_POST['kota'];
$kecamatan = $_POST['kecamatan'];
$kodepos = $_POST['kodepos'];
$info_tambahan = $_POST['info_tambahan'];

$link = mysqli_query($host, "INSERT INTO data_pemesanan VALUES('$nama_depan','$nama_belakang','$email','$alamat','$telepon','$propinsi','$kota','$kecamatan','$kodepos','$info_tambahan')");
if(!$link){
    die("Query error : ".mysqli_errno($host)." - ".mysqli_error($host));
}


header("location: index4.php");
?>