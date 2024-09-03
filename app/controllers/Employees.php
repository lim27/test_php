<?php

namespace Controllers;

use Models\Employee;

class Employees {
    public static function createEmployee(string $email, string $first_name, string $last_name, string $avatar) {
        $datas = [
            "email" => $email,
            "first_name" => $first_name,
            "last_name" => $last_name,
            "avatar" => $avatar
        ];
        $employee = Employee::create($datas);
        return $employee;
    }

    public static function showEmployee() {
        $employees = Employee::all();

        return $employees;
    }

}