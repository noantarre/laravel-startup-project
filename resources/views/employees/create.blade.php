<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criar Funcionário</title>
</head>
<body>

<h1>Criar Funcionário</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="/employees" method="POST">
    @csrf

    <label>Nome:</label><br>
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name')
        <p style="color:red;">{{ $message }}</p>
    @enderror
    <br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="{{ old('email') }}">
    @error('email')
        <p style="color:red;">{{ $message }}</p>
    @enderror
    <br><br>

    <label>Função (Role):</label><br>
    <input type="text" name="role" value="{{ old('role') }}">
    @error('role')
        <p style="color:red;">{{ $message }}</p>
    @enderror
    <br><br>

    <button type="submit">Criar Funcionário</button>
</form>

</body>
</html>
