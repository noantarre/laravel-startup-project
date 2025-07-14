<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;

class EmployeeForm extends Component
{
    public $name, $role, $email;

    public function submit()
    {
        Employee::create([
            'name' => $this->name,
            'role' => $this->role,
            'email' => $this->email,
        ]);

        session()->flash('message', 'Funcionário cadastrado com sucesso!');
        $this->reset(); // limpa os campos após salvar
    }

    public function render()
    {
        return view('livewire.employee-form');
    }
}
