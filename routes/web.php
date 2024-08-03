<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('export.template');
});

Route::resource('dashboard', DashboardController::class);
Route::resource('contact', ContactController::class);
Route::resource('skill', SkillController::class);
Route::resource('project', ProjectController::class);
Route::resource('export', ExportController::class);


Route::get('/generate-pdf', [ExportController::class, 'generatePdf'])->name('export.generatePdf');

Route::get('/user',  [DashboardController::class, 'getUser']);
