<?php

$database_connection = mysqli_connect('localhost', 'root', '');

var_dump($database_connection);

if ($database_connection->connect_error){
    echo "Error" . $database_connection->connect_error;
}