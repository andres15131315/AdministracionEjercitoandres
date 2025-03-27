<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArmyCorpsController;

Route::get('/army-corps/create', [ArmyCorpsController::class, 'create'])->name('armyCorps.create');
Route::post('/army-corps', [ArmyCorpsController::class, 'store'])->name('armyCorps.store');





use App\Http\Controllers\BarrackController;

Route::get('/barracks/create', [BarrackController::class, 'create'])->name('barracks.create');
Route::post('/barracks', [BarrackController::class, 'store'])->name('barracks.store');







use App\Http\Controllers\CompanyController;

Route::get('/company/create', [CompanyController::class, 'create'])->name('company.create');
Route::post('/company', [CompanyController::class, 'store'])->name('company.store');
