<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::middleware(['auth'])->group(function () {    Route::get('/my-contracts', [MyContractController::class, 'index'])->name('my.contracts');    Route::get('/my-refunds', [MyRefundsController::class, 'index'])->name('my.refunds');    Route::get('/report-sinistre', [ReportSinistreController::class, 'index'])->name('report.sinistre');});

route::middleware(['role:admin'])->group(function () {    Route::get('/admin/add-user', [AdminController::class, 'addUser'])->name('admin.add.user');    Route::get('/admin/add-pet', [AdminController::class, 'addPet'])->name('admin.add.pet');});
