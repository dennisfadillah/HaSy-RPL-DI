<?php 

// Tujuan kode ini adalah melakukan proses login user dengan memeriksa username dan passwordnya
// kemudian membandingkannya dengan yang ada di database


// Menyambungkan ke database
include 'koneksi.php';
 

// Mengambil data username pada form login akun yang sudah di isi oleh user melalui method POST
$username = $_POST['username'];
// Mengambil data password pada form login akun yang sudah di isi oleh user melalui method POST serta melakukan hash password
$password = md5($_POST['password']);
 

// Mencari data user pada table customer dengan menggunakan username dan password untuk melakukan validasi login
$login = mysql_query("select * from customer where username='$username' and password='$password'");
$cek = mysql_num_rows($login); // $cek berguna untuk menghitung apakah user sudah berhasil login ke dalam sistem
 
if($cek > 0){ // Jika $cek bernilai lebih dari 0 maka
	session_start(); // Untuk memulai session dengan menyimpan data user yang sedang login
	$_SESSION['username'] = $username; // Melakukan perbaruan cookies pada username yang berhasil login
	$_SESSION['status'] = "login"; // Melakukan perbaruan cookies pada status yang berhasil login
	header("location:admin/index.php"); //Lalu mengarahkan user pada halaman index.php
}else{
	header("location:index.php");	// Apabila $cek tidak lebih dari 0 maka user akan diarahkan ke halaman index.php
}

?>