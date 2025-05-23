<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('landingpage');
    })->name('landing');

    Route::get('/about', function () {
        return view('components.about');
    })->name('about');

    Route::get('/features', function () {
        return view('components.features');
    })->name('features');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
    //     $user = auth()->user();

    // // Cek apakah user belum memilih fokus
    // if (!$user->focus_selected) {
    //     return redirect()->route('select.focus');
    // }

    return view('dashboard');
})->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/select-focus', function () {
        $fokusList = [
            'Hemat Energi',
            'Transportasi Ramah Lingkungan',
            'Mengurangi Sampah Plastik',
            'Pohon dan Alam',
            'Manajemen Air'
        ];
        return view('focus-selection', compact('fokusList'));
    })->name('select.focus');

    Route::post('/select-focus', function (\Illuminate\Http\Request $request) {
        $request->validate([
            'focus' => 'required|string',
        ]);

    //     $user = auth()->user();
    //     $user->focus = $request->focus;
    //     $user->focus_selected = true;
    //     $user->save();

        return redirect()->route('dashboard');
    })->name('focus.submit');

    Route::get('/plan', function () {
        return view('components.plan');
    })->name('plans');
    
    Route::get('/myplan', function () {
        return view('components.myplan');
    })->name('myplan');

    Route::get('/artikel', function () {
    return view('artikel');
    })->name('artikel');
});


require __DIR__.'/auth.php';
