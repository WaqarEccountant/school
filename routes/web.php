<?php

use App\Http\Controllers\Admin\ExamController as AdminExamController;
use App\Http\Controllers\Admin\ExamTypeController as AdminExamTypeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\QuestionController as AdminQuestionController;
use App\Http\Controllers\Admin\SubjectController as AdminSubjectController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Student\HomeController as StudentHomeController;
use App\Http\Controllers\Teacher\ExamController;
use App\Http\Controllers\Teacher\ExamTypeController;
use App\Http\Controllers\Teacher\HomeController;
use App\Http\Controllers\Teacher\QuestionController;
use App\Http\Controllers\Teacher\SubjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('login');
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/courses', function () {
    return view('courses');
})->name('courses');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::group(['middleware' => 'verified'], function () {
    Route::get('redirect-to-dashboard', function () {

        switch (Auth::user()->role) {
            case 'admin':
                return redirect()->route('admin.dashboard');
            case 'teacher':
                return redirect()->route('teacher.dashboard');
            default:
                return redirect()->route('dashboard');
        }

    });
    Route::get('/dashboard', [StudentHomeController::class, 'index'])->name('dashboard');
    Route::get('/exams/{type}', [StudentHomeController::class, 'exams'])->name('exams');
});

Route::redirect('teacher', '/teacher/dashboard');
Route::group(['prefix' => 'teacher', 'middleware' => ['verified', 'teacher'], 'as' => 'teacher.'], function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('setting', [HomeController::class, 'setting'])->name('setting');
    Route::post('setting', [HomeController::class, 'changePassword']);

    Route::resource('subjects', SubjectController::class)->except(['create', 'edit', 'show']);
    Route::resource('exams', ExamController::class);
    Route::resource('exam-types', ExamTypeController::class)->except(['create', 'edit', 'show']);
    Route::resource('questions', QuestionController::class);
});


Route::redirect('admin', '/admin/dashboard');
Route::group(['prefix' => 'admin', 'middleware' => ['verified', 'admin'], 'as' => 'admin.'], function () {
    Route::get('dashboard', [AdminHomeController::class, 'index'])->name('dashboard');
    Route::get('setting', [AdminHomeController::class, 'setting'])->name('setting');
    Route::post('setting', [AdminHomeController::class, 'changePassword']);

    Route::resource('subjects', AdminSubjectController::class)->except(['create', 'edit', 'show']);
    Route::resource('exams', AdminExamController::class);
    Route::resource('exam-types', AdminExamTypeController::class)->except(['create', 'edit', 'show']);
    Route::resource('questions', AdminQuestionController::class);
    Route::resource('users', AdminUserController::class)->except(['create', 'edit', 'show']);
});
