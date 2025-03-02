<?php

use App\Models\Student;
use App\Models\Supervisor;
use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\StudentData;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\StudentDataController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\StudentGroupController;
use PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\StudentT;





Route::get('/', function () {
    return view('welcome');
});

//admin routes
Route::get('/signup', [AdminController::class, 'signup'])->name('admin.auth');
Route::post('/signup/auth', [RegisterController::class, 'store'])->name('register.data');
Route::post('/signup/check', [RegisterController::class, 'check'])->name('register.check');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/group-students', [StudentGroupController::class, 'groupStudents']);//for grouping students
Route::get('/file-upload', [AdminController::class, 'fileUpload'])->name('students.update');
Route::get('/student-list', [AdminController::class, 'studentList'])->name('studentList');
Route::get('/group-list', [AdminController::class, 'groupList'])->name('groupList');
Route::get('/export-excel', [AdminController::class, 'exportExcel'])->name('export.excel');
//Supervisor
// Route::get('/supervisor', [Supervisor::class, 'index'])->name('supervisor.index');

Route::get('/supervisor', function () {
    return view('supervisor.index');
});
Route::post('/supervisor/auth', [SupervisorController::class, 'store'])->name('supervisor.data');
Route::post('/supervisor/check', [SupervisorController::class, 'check'])->name('supervisor.check');
Route::get('supervisor/form', [SupervisorController::class, 'form'])->name('supervisor.form');
Route::post('supervisor/form/save', [SupervisorController::class, 'save'])->name('supervisor.save');
Route::get('supervisor/welcome', [SupervisorController::class, 'welcome'])->name('supervisor.welcome');
Route::get('supervisor/feedback/{student_id}', [SupervisorController::class, 'feedback'])->name('supervisor.feedback');
Route::get('supervisor/welcome/fix', [SupervisorController::class, 'supervisorFix'])->name('supervisor.fix');
Route::post('supervisor/update/status', [ChapterController::class, 'update'])->name('chapterUpdate.update');
Route::post('supervisor/feeback/save/{chapter}', [FeedBackController::class, 'feedbackSave'])->name('supervisor.feedback.save');
Route::get('supervisor/search', [SupervisorController::class, 'search'])->name('supervisor.search');
Route::get('supervisor/find', [SupervisorController::class, 'find'])->name('supervisor.find');
Route::get('supervisor/studentList', [SupervisorController::class, 'studentList'])->name('supervisor.studentList');
Route::post('supervisor/deadline', [SupervisorController::class, 'deadline'])->name('supervisor.deadline');
Route::post('supervisor/deadline_two', [SupervisorController::class, 'deadline_two'])->name('supervisor.deadline_two');
Route::get('supervisor/profile', [SupervisorController::class, 'profile'])->name('supervisor.profile');
Route::post('supervisor/deadline_three', [SupervisorController::class, 'deadline_three'])->name('supervisor.deadline_three');


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
Route::get('/evaluation', [EvaluationController::class, 'index'])->name('evaluation');
Route::get('/studentDataForm', [StudentController::class, 'studentDataForm'])->name('studentData');
Route::post('/studentDataForm/save', [StudentController::class, 'studentSave'])->name('studentFormData.save');// the registeration form data capture
Route::get('student/certificate', [StudentController::class, 'certificate'])->name('student.certificate');




//route to handle toast messages
Route::get('/status/message', function () {
   return view('status.toast');
});


Route::get('/signup/status', function () { return view('status.status'); })->name('status.status');

Route::get('/', function () {
    return view('welcome');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/conversations', [ConversationController::class, 'store'])->middleware('auth');
    // Route::get('/login', [TestController::class, 'login'])->name('login');
});


//status message routes


//testing
Route::get('/testing', [StudentDataController::class, 'index'])->name('testing');
Route::get('/testing-notify',function () {
       notify()->success(message:'Laravel Notify is awesome!');
        // connectify('success', 'Connection Found', 'Success Message Here');
});
Route::get('users/export', [StudentDataController::class, 'export'])->name('users.export');
Route::post('users/import', [StudentDataController::class, 'import'])->name('users.import');


