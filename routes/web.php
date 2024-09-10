<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\TestController;
use App\Models\Student;
use App\Models\Supervisor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//admin routes
Route::get('/signup', [AdminController::class, 'signup'])->name('admin.auth');
Route::post('/signup/auth', [RegisterController::class, 'store'])->name('register.data');
Route::post('/signup/check', [RegisterController::class, 'check'])->name('register.check');

//Supervisor
// Route::get('/supervisor', [Supervisor::class, 'index'])->name('supervisor.index');

Route::get('/supervisor', function () {
    return view('supervisor.index');
});
Route::post('/supervisor/auth', [SupervisorController::class, 'store'])->name('supervisor.data');
Route::post('/supervisor/check', [SupervisorController::class, 'check'])->name('supervisor.check');
Route::get('supervisor/form', [SupervisorController::class, 'form'])->name('supervisor.form');
Route::post('supervisor/form/save/{chapter}', [SupervisorController::class, 'save'])->name('supervisor.save');
Route::get('supervisor/welcome', [SupervisorController::class, 'welcome'])->name('supervisor.welcome');
Route::get('supervisor/feedback/{student_id}', [SupervisorController::class, 'feedback'])->name('supervisor.feedback');
Route::get('supervisor/welcome/fix', [SupervisorController::class, 'supervisorFix'])->name('supervisor.fix');
Route::post('supervisor/update/status', [ChapterController::class, 'update'])->name('chapterUpdate.update');
Route::post('supervisor/feeback/save/{chapter}', [FeedBackController::class, 'feedbackSave'])->name('supervisor.feedback.save');

//feeback
Route::post('/feedback/store', [FeedBackController::class, 'store'])->name('feedback.store');

//student routes
Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::post('/student/auth', [StudentController::class, 'store'])->name('student.data');
Route::post('/student/check', [StudentController::class, 'check'])->name('student.check');
Route::get('/page-test', [StudentController::class, 'welcome'])->name('student.welcome');
Route::get('/student/submition/{student}', [StudentController::class, 'submition'])->name('student.welcome');
Route::get('/student/studentForms', [StudentController::class, 'studentForms'])->name('student.forms');
Route::post('/student/store/', [StudentController::class, 'save'])->name('students.save');
Route::get('student/profile', [StudentController::class,'profile'])->name('student.profile');
Route::get('student/project_chapter', [ProjectController::class, 'index'])->name('student.chapter');
Route::post('student/project/store', [ProjectController::class, 'store'])->name('student.project.store');
Route::get('student/projects', [ProjectController::class, 'projectList'])->name('student.projectList');
Route::delete('student/projectList/delete/{chapter}', [ProjectController::class, 'delete'])->name('student.delete');


//route to handle toast messages
Route::get('/status/message', function () {
   return view('status.toast');
});


//status message routes
Route::get('/signup/status', function () { return view('status.status'); })->name('status.status');

