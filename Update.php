<?php


    include "koneksi.php"; // menyambungkan dengan database 
    
    $name = $_GET['name']; //mengambil data name pada form update akun yang sudah di isi 
    $email = $_GET['email']; //mengambil data email pada form update yang sudah di isi
    $address = $_GET['address']; //mengambil data address pada form update yang sudah di isi
    $no_hp = $_GET['no_hp']; //mengambil data no_hp pada form update yang sudah di isi
    $id = $_GET['id']; //mengambil data id pada user 
    
    

    // melakukan fungsi update yang dimana name akan di set dengan $name yang merupakan data $name yang sudah di ambil pada form
    // $address juga demikian dan juga $no_hp juga sama, dan untuk email yang menjadi acuan data yang harus diganti
    $query_update = mysqli_query($db, "UPDATE user SET name = '$name',address = '$address',
    no_hp = '$no_hp' where email = '$email' ");

    
  // mencari user dengan email untuk melakukan proses -perbaruan cookies nantinya  
    $sql_user = mysqli_query($db, "SELECT * FROM user WHERE email = '$email'");
    $user = mysqli_fetch_assoc($sql_user);
    
    session_start();


    // melakukan perbaruan cookies terhadapa data yang baru saja di update pada fungsi update
    if ($query_update){
        $_SESSION["user"] = $user; // melakukan perbaruan cookies pada user yang sudah terupdate
        header('Location: updateAkun.php'); // lalu mengarahkan user pada updateAkun.php
    } 
	else{
        header('Location: updateAkun.php'); // bila gagal maka user akan di arahkan ke halaman updateAkun.php
        
    }
?>
