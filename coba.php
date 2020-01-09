<?php 

include("config.php");


    // filter data yang diinputkan
$username = "saya";
$phone = "09";
$company = "saya";
$address = "saya";
$password = "saya";
    // menyiapkan query
$sql = "INSERT INTO userss (username, phone, company, address, password) 
        VALUES (:username, :phone, :company, :address, :password)";
$stmt = $db->prepare($sql);

    // bind parameter ke query
  

$params = array(
    ":username" => $username,
    ":phone" => $phone,
    ":company" => $company,
    ":address" => $address, 
    ":password" => $password

    );
  
    // eksekusi query untuk menyimpan ke database
$saved = $stmt->execute($params);
var_dump($params);
var_dump($saved);
    
    
    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
if($saved) header("Location: index.php");
?>