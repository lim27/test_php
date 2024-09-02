<?php
require 'config.php';

function fetchData($url) {
    $response = file_get_contents($url);
    return json_decode($response, true);
}

if (!isset($connect) || !$connect instanceof mysqli) {
    die('Ошибка соединения с базой данных');
}

$page1 = fetchData('https://reqres.in/api/users?page=1');
$page2 = fetchData('https://reqres.in/api/users?page=2');

foreach ([$page1, $page2] as $page) {
    foreach ($page['data'] as $person) {
        $email = $person['email'];
        $first_name = $person['first_name'];
        $last_name = $person['last_name'];
        $avatar = $person['avatar'];

        $query = "INSERT INTO employees (email, first_name, last_name, avatar) 
            VALUES (?, ?, ?, ?) 
            ON DUPLICATE KEY UPDATE 
            email = VALUES(email), 
            first_name = VALUES(first_name), 
            last_name = VALUES(last_name), 
            avatar = VALUES(avatar)";

// Подготовка SQL запроса
        $stmt = $connect->prepare($query);
        if ($stmt === false) {
            die('Ошибка подготовки запроса: ' . $connect->error);
        }

        $stmt->bind_param("ssss", $email, $first_name, $last_name, $avatar);
        if (!$stmt->execute()) {
            die('Ошибка выполнения запроса: ' . $stmt->error);
        }

        $stmt->close();
    }
}
$connect->close();
