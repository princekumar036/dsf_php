<?php
    
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'dsf';

    $conn = mysqli_connect($hostname, $username, $password, $db_name);

    if (!$conn) {
        die('Failed to connect with database');
    }
?>