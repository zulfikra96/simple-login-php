<?php
session_start();
require "connection.php";

// check is null array of post
if(is_null($_POST['username']) || is_null($_POST['password'])){
    header("location: index.php");
}

// get data from form
$data = [
    'username' => $_POST['username'],
    'password' => $_POST['password']
];

// try and exception
try{
    $select = $db->prepare("SELECT username, password, fullname FROM users WHERE username='{$data['username']}'");
    $select->execute();
    $row    = $select->fetch();

    if($row['username'] == "" || $row['username'] == null){
        die("data tidak ada");
    }

    if($row['password'] != $data['password']){
        die("maaf password anda salah");
    }else{
        $_SESSION['username'] = $row['username'];
        header("location: pages/home.php");
    }

    
}catch(PDOException $e){
    die($e);
}






