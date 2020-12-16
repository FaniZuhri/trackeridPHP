<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$usern = $_POST['usern'];
$passw = $_POST['passw'];



// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * from account WHERE user='$usern' and pass=md5('$passw')");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek>0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['tipe']=="admin"){

		// buat session login dan username
		$_SESSION['user'] = $usern;
		$_SESSION['id'] = $data['id'];
		$_SESSION['tipe'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../index.php");

	}
	// cek jika user login sebagai operator
	// else if($data['tipe']=="operator"){
	// 	// buat session login dan username
	// 	$_SESSION['user'] = $usern;
	// 	$_SESSION['id'] = $data['id'];
	// 	$_SESSION['tipe'] = "operator";
	// 	// alihkan ke halaman dashboard operator
	// 	header("location:../index-operator.php");
	// }
	// cek jika user login sebagai user
	else if($data['tipe']=="user" ){
		// buat session login dan username
		$_SESSION['user'] = $usern;
		$_SESSION['id'] = $data['id'];
		$_SESSION['tipe'] = "user";
		// alihkan ke halaman dashboard user
		header("location:../index.php");
	
	}else{
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}
}
else{
	header("location:login.php?pesan=gagal");
}

?>
