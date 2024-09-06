<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Сайт</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
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
        @if($employees)
            <table class="table table-striped table-hover">
                <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td style="width: 130px">
                            @if ($employee->avatar)
                                <img src="{{ $employee->avatar }}" alt="{{ $employee->first_name }}" style="float:left">
                            @endif
                        </td>
                        <td>
                            <b>Имя:</b> {{ $employee->first_name }}<br>
                            <b>Фамилия:</b> {{ $employee->last_name }}<br>
                            <b>Email:</b> {{ $employee->email }}<br>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/main.js') }}" type="text/javascript" charset="utf-8"></script>
</body>
</html>
