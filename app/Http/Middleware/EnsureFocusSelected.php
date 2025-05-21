<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureFocusSelected
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && !Auth::user()->focus_selected && !$request->is('select-focus*')) {
            return redirect()->route('select.focus');
        }

        return $next($request);
    }
}
