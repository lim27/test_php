<?php
    session_start();
    require 'config.php';
    require_once 'GetEmployees.php';

    if (!isset($connect) || !$connect instanceof mysqli) {
        die('Ошибка соединения с базой данных');
    }
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
            <?php
                $sql = "SELECT * FROM employees";
                $result = $connect->query($sql);

                $employees = [];
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $employees[] = $row;
                        $person = new GetEmployees($row['email'], $row['first_name'], $row['last_name'], $row['avatar']);
                        $person->getInfo();
                    }
                }
            ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="/employees/main.js" type="text/javascript" charset="utf-8"> </script>
    </body>
</html>