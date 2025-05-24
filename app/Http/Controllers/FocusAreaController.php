<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FocusArea;
use Illuminate\Support\Facades\Auth;

class FocusAreaController extends Controller
{
    public function show() {
        $focusAreas = FocusArea::all();
        return view('focus-selection', compact('focusAreas'));
    }

    public function store(Request $request) {
        $request->validate([
            'focus_areas' => 'required|array|min:1',
            'focus_areas.*' => 'exists:focus_areas,id',
        ]);

        Auth::user()->focusAreas()->sync($request->focus_areas);

        return redirect()->route('dashboard')->with('success', 'Focus area berhasil dipilih!');
    }
}
