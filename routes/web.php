<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Middleware\Student;
use App\Http\Middleware\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'loginAction'])->name('login');

Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'registerAction'])->name('register');

Route::middleware([Student::class])->group(function () {
    Route::get('siswa', [StudentController::class, 'index']);
    Route::prefix('/siswa')->group(function () {
        Route::get('semua-tugas', [StudentController::class, 'all_task']);
        Route::get('lihat-kelas/{id_class}', [StudentController::class, 'view_class'])->name('lihat-kelas');
        Route::get('lihat-tugas', [StudentController::class, 'view_task']);
    });
});

Route::middleware([Teacher::class])->group(function () {
    Route::get('guru', [TeacherController::class, 'index']);
    Route::prefix('guru')->group(function () {
    });
});
Route::get('logout', [AuthController::class, 'logout']);
