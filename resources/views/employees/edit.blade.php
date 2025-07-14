<!-- resources/views/employees/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Editar Funcionário</title>
</head>
<body>
    <h1>Editar Funcionário</h1>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label>
        <input type="text" name="name" value="{{ $employee->name }}" required><br><br>

        <label>Cargo:</label>
        <input type="text" name="role" value="{{ $employee->role }}" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $employee->email }}" required><br><br>

        <button type="submit">Atualizar</button>
    </form>

    <a href="{{ route('employees.index') }}">Voltar</a>
</body>
</html>
