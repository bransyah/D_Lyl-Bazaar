<?php

$db_host = "localhost"; //memasukkan nama host 
$db_user = "id11968465_betul";// memasukkan nama user
$db_pass = "betul";// memasukkan password
$db_name = "id11968465_betul";

try {    
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass); //membuat konesi PDO
} catch(PDOException $e) {
    die("Terjadi masalah: " . $e->getMessage()); //menampilkan terjadi masalah 
}
