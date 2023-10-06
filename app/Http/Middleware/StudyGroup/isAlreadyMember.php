<?php

namespace App\Http\Middleware\StudyGroup;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class isAlreadyMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        $slug = collect(request()->segments())->reverse()->skip(1)->first();
        $is_member = auth()->user()->studygroups->where('slug', $slug)->first();
        
        if($is_member){
            abort(403);
        }

        return $next($request);
        
    }
}
