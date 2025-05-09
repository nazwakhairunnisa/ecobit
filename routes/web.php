<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill(); // Menandai email sebagai verified
    return redirect('/home'); // atau redirect ke dashboard
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Illuminate\Http\Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Link verifikasi telah dikirim!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

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




Route::middleware([ 'auth', 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth', 'verified'])->get('/select-focus', function () {
    $fokusList = [
        'Hemat Energi',
        'Transportasi Ramah Lingkungan',
        'Mengurangi Sampah Plastik',
        'Pohon dan Alam',
        'Manajemen Air'
    ];

    return view('focus-selection', compact('fokusList'));
})->name('select.focus');

Route::middleware(['auth', 'verified'])->post('/select-focus', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'focus' => 'required|string',
    ]);

    // $user = auth()->user();
    // $user->focus_selected = true;
    // $user->save();

    return redirect()->route('dashboard');
})->name('focus.submit');



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
