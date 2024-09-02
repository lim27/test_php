<?php
require_once 'GetEmployees.php';
class EmployeeService {
    private $apiUrls = [
        'https://reqres.in/api/users?page=1',
        'https://reqres.in/api/users?page=2'
    ];
    public function fetchEmployees() {
        $employees = [];

        foreach ($this->apiUrls as $url) {
            $response = file_get_contents($url);
            $data = json_decode($response, true);
            $employees = array_merge($employees, $data['data']);
        }
        return $employees;
    }
}