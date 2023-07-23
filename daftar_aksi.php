<?php
include("koneksi.php");

$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$nrp = mysqli_real_escape_string($koneksi, $_POST['nrp']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$password = md5($_POST['password']);

$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE user_nrp='$nrp'");
if (mysqli_num_rows($cek) > 0) {
	header("Location:daftar.php?alert=duplikat");
} else {
	// daftar user
	$sql = mysqli_query($koneksi, "INSERT INTO user (user_email,user_nrp,user_nama,user_password,user_foto,user_status) VALUES ('$email','$nrp','$nama','$password','','online')");
	header("Location:index.php?alert=registered");
}
