<?php
$conn = new mysqli('127.0.0.1','root','','nilai');

if($conn->connect_errno) {
    echo "Error : " . $conn->connect_errno;
}