<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfessorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'gerarGrafico'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('alunos', AlunoController::class);
    Route::get('alunos/{id}/delete', [AlunoController::class, 'delete'])->name('alunos.delete');
    Route::resource('professors', ProfessorController::class);
});

require __DIR__.'/auth.php';
