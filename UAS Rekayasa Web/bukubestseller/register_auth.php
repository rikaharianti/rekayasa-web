<?php
    session_start();

    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $apikey = md5($_POST['email'].$_POST['nama_depan'].$_POST['nama_belakang']);

    $conn = new mysqli("localhost", "root", "", "bukubestseller");
    $status = $conn->query('insert into user (nama_depan, nama_belakang, email, password, api_key) values ("'.$nama_depan.'", "'.$nama_belakang.'", "'.$email.'", "'.$password.'", "'.$apikey.'")');

    if ($status){
        $_SESSION['registersuccess'] = true;
        header('Location: login.php'); 
    } else {
        $_SESSION['registerfailed'] = true;
        header('Location: register.php'); 
    }

    session_write_close();
?>