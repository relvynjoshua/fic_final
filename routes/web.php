<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\TestController;

Route::get('/', function () {return view('welcome');});

Route::get('/404', function () {return view('404');});
Route::get('/about', function () {return view('about');});
Route::get('/contact', function () {return view('documents');});
Route::get('/documents', function () {return view('form');});
Route::get('/manual-001', function () {return view('DPM-USTP-FIC-001');});
Route::get('/manual-002', function () {return view('DPM-USTP-FIC-002');});
Route::get('/manual-003', function () {return view('DPM-USTP-FIC-003');});
Route::get('/manual-004', function () {return view('DPM-USTP-FIC-004');});
Route::get('/form-001', function () {return view('FM-USTP-FIC-001');});
Route::get('/form-002', function () {return view('FM-USTP-FIC-002');});
Route::get('/form-003', function () {return view('FM-USTP-FIC-003');});
Route::get('/form-page', function () {return view('form-page');});
Route::get('/form', function () {return view('form');});
Route::get('/gallery', function () {return view('gallery');});
Route::get('/landing', function () {return view('landing');});
Route::get('/news', function () {return view('news');});
Route::get('/services', function () {return view('services');});
Route::get('/sign-in-up', function () {return view('sign-in-up');});
Route::get('/single-service', function () {return view('single-service');});
Route::get('/administration', function () {return view('administration');});

Route::get('/dashboard', function () {return view('dashboard');});
Route::get('/create-news', function () {return view('create-news');});

Route::post('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');
Route::post('/generate-word', [WordController::class, 'generateWord'])->name('generate-word');

Route::post('/test', [TestController::class, 'generateTest'])->name('test');