<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;

class VueList extends Component
{
    public $employees;

    public function mount()
    {
        $this->employees = Employee::all();
    }

    public function render()
    {
        return view('livewire.vue-list');
    }
}
