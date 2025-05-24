<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;

class RecPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userFocusAreaIds = Auth::user()->focusAreas()->pluck('focus_areas.id');
        $recPlans = Plan::whereIn('focus_area_id', $userFocusAreaIds)->get();

        return view('dashboard', [
            'recPlans' => $recPlans,
        ]);
    }
}
