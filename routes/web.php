<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\TestController;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckRole;

Route::get('/', function () {return view('welcome');});

Route::get('/404', function () {return view('404');});
Route::get('/about', function () {return view('about');});
Route::get('/contact', function () {return view('contact');});
Route::get('/documents', function () {return view('documents');});
Route::get('/manual-001', function () {return view('DPM-USTP-FIC-001');});
Route::get('/manual-002', function () {return view('DPM-USTP-FIC-002');});
Route::get('/manual-003', function () {return view('DPM-USTP-FIC-003');});
Route::get('/manual-004', function () {return view('DPM-USTP-FIC-004');});
Route::get('/form-001', function () {return view('FM-USTP-FIC-001');});
Route::get('/form-002', function () {return view('FM-USTP-FIC-002');});
Route::get('/form-003', function () {return view('FM-USTP-FIC-003');});
Route::get('/form-page', function () {return view('form-page');});
Route::get('/form', function () {return view('form');});
Route::get('/amf', function () {return view('amf');});
Route::get('/gallery', function () {return view('gallery');});
Route::get('/landing', function () {return view('landing');});
Route::get('/news', function () {return view('news');});
Route::get('/services', function () {return view('services');});
Route::get('/single-service', function () {return view('single-service');});
Route::get('/administration', function () {return view('administration');});

Route::get('/dashboard', function (): Factory|View {return view(view: 'dashboard');});
Route::get('/create-news', function (): Factory|View {return view(view: 'create-news');});

Route::post('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');
Route::post('/generate-word', [WordController::class, 'generateWord'])->name('generate-word');

Route::post('/test', [TestController::class, 'generateTest'])->name('test');


// Show sign-in/up form
Route::get('/sign-in-up', function (): Factory|View {
    return view('sign-in-up'); // Corrected the view call
})->name('sign-in-up');

// Register a new user
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Handle user login
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Redirect to the dashboard after successful login
Route::middleware('auth')->get('/dashboard', function (): View {
    return view('dashboard');
})->name('dashboard');

// Redirect non-admin users to form page
Route::middleware('auth')->get('/form-page', function (): View {
    return view('form-page'); // Form page view
})->name('form.page');

// Show the user profile (requires authentication)
Route::middleware('auth')->get('/profile', [AuthController::class, 'showUser'])->name('profile');

// Update user account (requires authentication)
Route::middleware('auth')->put('/update-account', [AuthController::class, 'updateAccount'])->name('update-account');

// Log out the user (requires authentication)
Route::middleware('auth')->post('/logout', [AuthController::class, 'logoutAccount'])->name('logout');

// Handle GET request to show the login form
Route::get('/login', function (): Factory|View {
    return view('sign-in-up'); // Reuse the 'sign-in-up' view for login
})->name('login.form');