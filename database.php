<?php

$database_name = 'testing';
$username = 'root';
$password = '' ;
$host = '127.0.0.1';

$dsn = "mysql:host=$host;dbname=$database_name;charset=UTF8";

$pdo = new PDO($dsn, $username, $password);


