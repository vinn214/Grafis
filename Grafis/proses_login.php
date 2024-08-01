<?php 
//start the session

session_start();
$u = $_POST['username'];
$p = $_POST['password'];

include("koneksi.php");

	$query = "SELECT * FROM akun WHERE username = '$u' AND password = '$p'";
	$result = mysqli_query($koneksi, $query);
	$data = mysqli_fetch_array($result);

if(mysqli_num_rows($result) == 1) {
	$_SESSION['username'] = $data['username'];
	$_SESSION['password'] = $data['password'];
	$_SESSION['id_akun'] = $data['id_akun'];
	echo "<script>alert ('Berhasil Login !'); window.location='index-color.html';</script>";
}else{
    echo "<script>alert ('Username dan Password Salah !'); window.location='login.php';</script>";
}
 ?>