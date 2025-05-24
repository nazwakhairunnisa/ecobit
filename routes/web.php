<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FocusAreaController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\RecPlanController;
use App\Http\Controllers\UserPlanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('landingpage');
    })->name('landing');
});

Route::middleware([ 'auth', 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/select-focus', [FocusAreaController::class, 'show'])->name('select.focus');
    Route::post('/select-focus', [FocusAreaController::class, 'store'])->name('focus.submit');
    
    Route::get('/plan', [PlanController::class, 'index'])->name('plans');

    Route::get('/dashboard', [RecPlanController::class, 'index'])->name('dashboard');
    
    Route::get('/getplan/{plan}', [PlanController::class, 'show'])->name('getplan');
    Route::post('/getplan/{plan}', [UserPlanController::class, 'addPlan'])->name('plan.add');

    Route::get('/myplan', [UserPlanController::class, 'index'])->name('myplan');
    Route::post('/myplan/step/{stepId}/complete', [UserPlanController::class, 'completeStep'])->name('step.complete');
    Route::post('/myplan/step/{planId}/complete', [UserPlanController::class, 'completePlan'])->name('plan.complete');
    Route::post('/myplan/step/{planId}/cancel', [UserPlanController::class, 'cancelPlan'])->name('plan.cancel');
});


require __DIR__.'/auth.php';
