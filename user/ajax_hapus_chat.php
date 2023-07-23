<?php 
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');
$id_saya = $_SESSION['user_id'];
$id = $_POST['id'];

mysqli_query($koneksi,"DELETE FROM chat WHERE chat_id='$id'")or die(mysqli_error($koneksi));
?>
