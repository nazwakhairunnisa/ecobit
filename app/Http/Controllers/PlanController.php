<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\FocusArea;
use App\Models\PlanStep;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil semua focus area
        $allFocusAreas = FocusArea::all();
        $focusAreaId = $request->query('focus_area');

        if($focusAreaId) {
            $plans = Plan::where('focus_area_id', $focusAreaId)->get();
        } else {
            $plans = Plan::all();
        }

        return view('components.plan', [
            'plans' => $plans,
            'allFocusAreas' => $allFocusAreas,
            'selectedFocusArea' => $focusAreaId
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $plan = Plan::with('steps')->findOrFail($id);
        $isTaken = Auth::check() && Auth::user()->plans()->where('plan_id', $id)->exists();
        $steps = $plan->steps;

        return view('components.getplan', [
            'plan' => $plan,
            'steps' => $steps,
            'isTaken'=> $isTaken,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
