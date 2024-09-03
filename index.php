<?php
    session_start();
    require_once 'vendor/autoload.php';

use Controllers\Employees;
use Models\Connect;
    $connect = new Connect();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Сайт</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    </head>

    <body>
    <div class="container">
        <h1>Данные сотрудников</h1>
        <div class="row">
            <div class="col-6">
                <button id="loadEmployees" class="btn btn-primary">Загрузить сотрудников</button>
                <button id="getEmployees" class="btn btn-info">Получить список сотрудников</button>
            </div>
        </div>

        <div class="row" id="infoEmployees" style="display: none">
            <table class="table table-striped table-hover">
                <tbody>
                <?php
                $employees = Employees::showEmployee();

                foreach ($employees as $employee) {
                    echo '
                    <tr>
                        <td style="width: 130px"> ' . ($employee->avatar ? '<img src="' . $employee->avatar . '" alt="' . $employee->first_name . '" style="float:left" />' : '') . '
                        </td>
                    <td>
                        <b>Имя:</b> ' . $employee->first_name . '<br>
                        <b>Фамилия:</b> ' . $employee->last_name . '<br>
                        <b>Email:</b> ' . $employee->email . '<br>
                    </td>
                </tr>
                    ';
                }
                ?>
                </tbody>
            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="/employees/main.js" type="text/javascript" charset="utf-8"> </script>
    </body>
</html>