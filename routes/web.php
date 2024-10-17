<?php

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/funcionarios', [FuncionarioController::class,'index'])->name('funcionarios.index');
Route::get('/funcionarios/create', [FuncionarioController::class,'create'])->name('funcionarios.create');
Route::post('/funcionarios/create', [FuncionarioController::class,'store'])->name('funcionarios.store');
Route::get('/funcionarios/{funcionario}', [FuncionarioController::class,'show'])->name('funcionarios.show');
Route::get('/funcionarios/{funcionario}/edit', [FuncionarioController::class,'edit'])->name('funcionarios.edit');
Route::put('/funcionarios/{funcionario}', [FuncionarioController::class,'update'])->name('funcionarios.update');
Route::delete('/funcionarios/{funcionario}', [FuncionarioController::class,'destroy'])->name('funcionarios.destroy');