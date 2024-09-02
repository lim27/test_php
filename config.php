<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testsite";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Ошибка подключения");
}