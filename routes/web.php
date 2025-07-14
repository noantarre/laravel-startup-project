<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

// Página do Livewire
Route::get('/vue-list', function () {
    return view('vue-list');
});

// CRUD de funcionários
Route::get('/employees/create', [EmployeeController::class, 'create']);
Route::post('/employees', [EmployeeController::class, 'store']);
Route::get('/employees', [EmployeeController::class, 'index']); // Se você tiver uma função index
