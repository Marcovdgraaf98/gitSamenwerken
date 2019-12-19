<?php

//database logingegevens
$db_hostname = 'localhost:3306';
$db_username = '84999';
$db_password = 'marco010';
$db_database = '84999_back2';

// maak de database-verbinding
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

if (!$mysqli) {
    echo "FOUT: geen connectie naar database. <br>";
    echo "Error " . mysqli_connect_error() . "<br/>";
    echo "Errno: " . mysqli_connect_errno() . "<br/>";
}