<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use GuzzleHttp\Client;

class EmployeesController extends Controller
{
    public function index()
    {
        try {
            $employees = Employee::all();
        } catch (\Exception $e) {
            \Log::error('Ошибка данных Сотрудников: ' . $e->getMessage());
            $employees = collect(); // Создание пустой коллекции
        }

        return view('index', compact('employees'));
    }
    public function loadEmployees()
    {
        $urls = [
            'https://reqres.in/api/users?page=1',
            'https://reqres.in/api/users?page=2'
        ];

        $client = new Client();

        foreach ($urls as $url) {
            $response = $client->get($url);
            $data = json_decode($response->getBody(), true);

            foreach ($data['data'] as $user) {
                Employee::updateOrCreate(
                    [   'email' => $user['email'],
                        'first_name' => $user['first_name'],
                        'last_name' => $user['last_name'],
                        'avatar' => $user['avatar']
                    ]
                );
            }
        }

    }

}
