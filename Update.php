<?php


    include "koneksi.php";
    
    $name = $_GET['name'];
    $email = $_GET['email'];
    $address = $_GET['address'];
    $no_hp = $_GET['no_hp'];
    $id = $_GET['id'];
    
    

    $query_update = mysqli_query($db, "UPDATE user SET name = '$name',address = '$address',
    no_hp = '$no_hp' where email = '$email' ");
    
    
    $sql_user = mysqli_query($db, "SELECT * FROM user WHERE email = '$email'");
    $user = mysqli_fetch_assoc($sql_user);
    
    session_start();


    if ($query_update){
        $_SESSION["user"] = $user;
        header('Location: updateAkun.php');

    } 
	else{
        header('Location: updateAkun.php');
        
    }
?>
