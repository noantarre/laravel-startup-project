<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Funcionários</title>
</head>
<body>

    <h1>Lista de Funcionários</h1>

    <ul>
        @foreach ($employees as $employee)
            <li>{{ $employee->name }} - {{ $employee->email }} - {{ $employee->role }}</li>
        @endforeach
    </ul>

    <a href="/employees/create">Criar novo funcionário</a>

</body>
</html>
