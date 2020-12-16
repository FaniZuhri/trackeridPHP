<?php
include 'koneksi.php';
$name = $_POST['nama'];
$username = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['pass'];


    //$koneksi = new mysqli('localhost','fani','fanizuhri','tracker_acc');

    if($koneksi->connect_error){
        die('Koneksi database gagal : ' . $koneksi->connect_error);

    }
    $sql="INSERT into account (nama,user,pass,email,tipe) VALUES ('$name','$username',md5('$password'),'$email','user')";
    
    if($koneksi->query($sql)===TRUE){
        header("location:../index.php?pesan=berhasil");
        }
    else{
      echo"Error".$sql."<br>".$koneksi->error;  
    }
    $koneksi->close();
?>