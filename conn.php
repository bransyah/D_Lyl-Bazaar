<?php

$servername = "localhost";
$username = "id11968465_betul";
$password = "id11968465_betul";
$dbname = "id11968465_betul";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


