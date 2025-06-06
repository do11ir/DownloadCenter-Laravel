<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasterController;
use App\Http\Middleware\RoleMiddleware;

Route::get('/', [HomeController::class,'user'])->name('user');

Route::get('/logout', [HomeController::class,'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::middleware(['auth', RoleMiddleware::class . ':admin'])
    ->group(function () {
        Route::get('/AdminProfile', [AdminController::class, 'AdminProfile'])->name('AdminProfile');

        Route::get('/AdminProfile/AddStudyField', [AdminController::class, 'AddStudyField'])->name('AddStudyField');
        Route::post('/AdminProfile/AddStudyField/insertStudyField', [AdminController::class, 'insertStudyField'])->name('insertStudyField');
        Route::get('/AdminProfile/AddStudyField/deleteStudyField/{id}', [AdminController::class,'deleteStudyField'])->name('deleteStudyField');

        Route::get('/AdminProfile/AddSubject', [AdminController::class, 'AddSubject'])->name('AddSubject');
        Route::post('/AdminProfile/AddSubject/insertSubject', [AdminController::class, 'insertSubject'])->name('insertSubject');

        Route::post('/AdminProfile/masterApprove/{id}', [AdminController::class, 'masterApprove'])->name('masterApprove');

        Route::get('/AdminProfile/AddNotice', [AdminController::class, 'AddNotice'])->name('AddNotice');
        Route::post('/AdminProfile/AddNotice/insertNotice', [AdminController::class, 'insertNotice'])->name('insertNotice');

        Route::get('/AdminProfile/AddNewFile', [AdminController::class, 'AddNewFile'])->name('AddNewFile');
            
        
    });




    Route::middleware(['auth', RoleMiddleware::class . ':master'])
    ->group(function () {
        Route::get('/MasterProfile', [MasterController::class, 'MasterProfile'])->name('MasterProfile');
       
    });




    Route::middleware(['auth', RoleMiddleware::class . ':student'])
    ->group(function () {
        Route::get('/StudentProfile', [HomeController::class, 'StudentProfile'])->name('StudentProfile');
    });













    /*--------------------------------CKeditor Routes-------------------------------*/
route::post('/upload',[AdminController::class, 'upload'])->name('ckeditor.upload');