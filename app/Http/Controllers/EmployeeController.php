<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // Mostrar o formulário para criar funcionário
    public function create()
    {
        return view('employees.create');
    }

    // Salvar o funcionário no banco
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email',
            'role' => 'nullable|string',
        ]);

        Employee::create($request->all());

        return redirect('/employees/create')->with('success', 'Funcionário criado com sucesso!');
    }

    // Mostrar a lista de funcionários
   public function index()
{
    $employees = \App\Models\Employee::all(); // busca todos os funcionários

    return view('employees.index', compact('employees')); // cria essa view
}

}
