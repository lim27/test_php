<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Controllers\Employees;
use Models\Connect;

$db = new Connect();

$urls = [
    'https://reqres.in/api/users?page=1',
    'https://reqres.in/api/users?page=2'
];

foreach ($urls as $url) {
    $data = fetch_data_from_api($url);
    process_employee_data($data);
}

function fetch_data_from_api($url) {
    $client = new Client();
    $response = $client->request('GET', $url);
    $data = json_decode($response->getBody()->getContents(), true);
    return $data;
}

function process_employee_data($data) {
    foreach ($data['data'] as $user) {
        $email = $user['email'];
        $first_name = $user['first_name'];
        $last_name = $user['last_name'];
        $avatar = $user['avatar'];

        echo "Email: $email\n";
        echo "First Name: $first_name\n";
        echo "Last Name: $last_name\n";
        echo "Avatar: $avatar\n";

        Employees::createEmployee($email, $first_name, $last_name, $avatar);
    }
}
http_redirect('employees_composer/');