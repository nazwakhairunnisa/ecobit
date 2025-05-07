<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('/faq', function () {
    $faqs = [
        [
            'question' => 'inter per fermentum eget ?',
            'answer' => 'Integer tempus augue id enim tristique, et dapibus sapien ultricies. Quisque facilisis enim nec dui rhoncus',
        ],
        [
            'question' => 'inter per fermentum eget ?',
            'answer' => 'Integer tempus augue id enim tristique, et dapibus sapien ultricies. Quisque facilisis enim nec dui rhoncus',
        ],
        [
            'question' => 'inter per fermentum eget ?',
            'answer' => 'Integer tempus augue id enim tristique, et dapibus sapien ultricies. Quisque facilisis enim nec dui rhoncus',
        ],
    ];
    return view('faq', compact('faqs'));
});



require __DIR__.'/auth.php';
