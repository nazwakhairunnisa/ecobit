<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\PlanStep;
use App\Models\UserPlanStep;
use Illuminate\Support\Facades\Auth;

class UserPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        // ambil plan user sama steps nya sekalian
        $plans = $user->plans()->with(['steps', 'steps.userPlanSteps' 
            => function ($query) use ($user) {
            $query->where('user_id', $user->id);
        }])->get();

        // hitung plan ongoing dan completed
        $ongoingPlans = $plans->where('pivot.is_completed', false)->count();
        $completedPlans = $plans->where('pivot.is_completed', true)->count();

        return view('components.myplan', [
            'plans' => $plans,
            'ongoingPlans' => $ongoingPlans,
            'completedPlans' => $completedPlans
        ]);

        
    }

    public function addPlan(Request $request, string $id)
    {
        $plan = Plan::findOrFail($id);
        $user = Auth::user();

        // validasi plan udah diambil atau ngga
        if ($user->plans()->where('plan_id', $id)->exists()) {
            return redirect()->route('myplan')->with('error', 'plan sudah diambil!');
        }

        // simpan ke user_plans
        $user->plans()->attach($id, [
            'is_completed' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $steps = $plan->steps;
        foreach ($steps as $step) {
            UserPlanStep::create([
                'user_id' => $user->id,
                'plan_step_id' => $step->id,
                'is_completed' => false,
            ]);
        }

        return redirect()->route('myplan')->with('success', 'plan berhasil ditambahkan!');
    }

    public function cancelPlan(Request $request, string $planId)
    {
        $user = Auth::user();
        $plan = $user->plans()->where('plan_id', $planId)->firstOrFail();

        // validasi biar plan nya gabisa di cancel kalo udah completed (yaiyalah)
        if ($plan->pivot->is_completed) {
            return redirect()->route('myplan')->with('error', 'plan yang sudah selesai tidak bisa di-cancel!');
        }

        // hapus steps
        UserPlanStep::where('user_id', $user->id)
            ->whereIn('plan_step_id', $plan->steps->pluck('id'))
            ->delete();

        // hapus plan
        $user->plans()->detach($planId);

        return redirect()->route('myplan')->with('success', 'plan berhasil di-cancel');
    }

    public function completeStep(Request $request, string $stepId)
    {
        $user = Auth::user();
        $userPlanStep = UserPlanStep::where('user_id', $user->id)
            ->where('plan_step_id', $stepId)
            ->firstOrFail();

        $userPlanStep->update([
            'is_completed' => true,
            'completed_at' => now(),
        ]);

        $planStep = $userPlanStep->planStep;
        $planId = $planStep->plan_id;
        $allStepsCompleted = UserPlanStep::where('user_id', $user->id)
            ->whereIn('plan_step_id', PlanStep::where('plan_id', $planId)->pluck('id'))
            ->where('is_completed', false)
            ->doesntExist();

            if ($allStepsCompleted) {
                $user->plans()->updateExistingPivot($planId, [
                    'is_completed' => true,
                    'completed_at' => now(),
                ]);
            }
    
            return redirect()->route('myplan')->with('success', 'Step berhasil diselesaikan!');if ($allStepsCompleted) {
                $user->plans()->updateExistingPivot($planId, [
                    'is_completed' => true,
                    'completed_at' => now(),
                ]);
            }
    
            return redirect()->route('myplan')->with('success', 'Step berhasil diselesaikan!');
    }

    public function completePlan(Request $request, string $planId)
    {
        $user = Auth::user();
        $plan = $user->plans()->where('plan_id', $planId)->firstOrFail();

        UserPlanStep::where('user_id', $user->id)
            ->whereIn('plan_step_id', PlanStep::where('plan_id', $planId)->pluck('id'))
            ->update([
                'is_completed' => true,
                'completed_at' => now(),
            ]);

        $user->plans()->updateExistingPivot($planId, [
            'is_completed' => true,
            'completed_at' => now(),
        ]);

        return redirect()->route('myplan')->with('success', 'Plan berhasil diselesaikan!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
