<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});
Route::get('/projects', [\App\Http\Controllers\ProjectsController::class,'index'])->name('projects.index');
Route::get('/projects/{project:slug}', [\App\Http\Controllers\ProjectsController::class, 'show'])->name('project.show');


Route::get('/contact', function () {
    return view('contact');
});