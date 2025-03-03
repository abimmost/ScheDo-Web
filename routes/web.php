<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::post('/register', [AuthController::class, 'register_logic'])->name('register_logic');

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'login_logic'])->name('login_logic');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

Route::post('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');

Route::resource('tasks', TaskController::class);

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

// Route::post('/task.index', [TaskController::class, 'index'])->name('task.index');

// Route::get('/services', [HomeController::class, 'services'])->name('services');

// Route::get('/why', [HomeController::class, 'why'])->name('why');

// Route::get('/team', [HomeController::class, 'team'])->name('team');
