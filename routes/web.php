<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MonthlyPayController;
use App\Http\Controllers\TeacherImageController;
use App\Http\Controllers\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
Route::get('/', function () {
    return view('welcome');
});
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//pages
Route::get('/', [PagesController::class, 'index'])->name('home_page');
Route::get('/all_students', [PagesController::class, 'all_students'])->name('all_students');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/welcome', [PagesController::class, 'welcome'])->name('welcome');


//Dashboard

Route::get('/dashboard', [SuperAdminController::class, 'index'])->name('dashboard');

//Authendicate
Route::get('/index', [Auth\LoginController::class, 'index'])->name('index');
Route::post('/user_login', [Auth\LoginController::class, 'user_login'])->name('user_login');
Route::get('/admin_login', [AdminController::class, 'admin_login'])->name('admin_login');
Route::get('/logout', [SuperAdminController::class, 'logout'])->name('logout');
Route::post('/admin-login-check', [AdminController::class, 'adminLoginCheck']);





//students
Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/student_create', [StudentController::class, 'student_create'])->name('student_create');
Route::post('/student_store', [StudentController::class, 'student_store'])->name('student_store');
Route::get('/student_edit/{id}', [StudentController::class, 'student_edit'])->name('student_edit');
Route::post('/student_update/{id}', [StudentController::class, 'student_update'])->name('student_update');
Route::post('/student_delete/{id}', [StudentController::class, 'student_delete'])->name('student_delete');

//Monthly Payment
Route::get('/monthlyPay', [MonthlyPayController::class, 'index'])->name('monthlyPay');
Route::get('/monthlyPay_create', [MonthlyPayController::class, 'monthlyPay_create'])->name('monthlyPay_create');
Route::post('/monthlyPay_store', [MonthlyPayController::class, 'monthlyPay_store'])->name('monthlyPay_store');
Route::get('/monthlyPay_edit/{id}', [MonthlyPayController::class, 'monthlyPay_edit'])->name('monthlyPay_edit');
Route::post('/monthlyPay_update/{id}', [MonthlyPayController::class, 'monthlyPay_update'])->name('monthlyPay_update');
Route::post('/monthlyPay_delete/{id}', [MonthlyPayController::class, 'monthlyPay_delete'])->name('monthlyPay_delete');

//users
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/user_create', [UserController::class, 'user_create'])->name('user_create');
Route::post('/user_store', [UserController::class, 'user_store'])->name('user_store');
Route::get('/user_edit/{id}', [UserController::class, 'user_edit'])->name('user_edit');
Route::post('/user_update/{id}', [UserController::class, 'user_update'])->name('user_update');
Route::post('/user_delete/{id}', [UserController::class, 'user_delete'])->name('user_delete');

//Teacher
Route::get('/teachers',[TeacherController::class,'index'])->name('teachers');
Route::get('/teacher_create',[TeacherController::class,'teacher_create'])->name('teacher_create');
Route::post('/teacher_store',[TeacherController::class,'teacher_store'])->name('teacher_store');
Route::get('/teacher_edit{id}',[TeacherController::class,'teacher_edit'])->name('teacher_edit');
Route::post('/teacher_update{id}',[TeacherController::class,'teacher_update'])->name('teacher_update');
Route::post('/teacher_delete{id}',[TeacherController::class,'teacher_delete'])->name('teacher_delete');


Route::get('/employee_teacher', [TeacherController::class, 'employee_teacher'])->name('employee_teacher');

//Images
Route::get('images',[TeacherImageController::class,'index'])->name('images');
Route::get('/image_create',[TeacherImageController::class,'image_create'])->name('image_create');
Route::post('/image_store',[TeacherImageController::class,'image_store'])->name('image_store');
Route::get('/image_edit{id}',[TeacherImageController::class,'image_edit'])->name('image_edit');
Route::post('/image_update{id}',[TeacherImageController::class,'image_update'])->name('image_update');
Route::post('/image_delete{id}',[TeacherImageController::class,'image_delete'])->name('image_delete');