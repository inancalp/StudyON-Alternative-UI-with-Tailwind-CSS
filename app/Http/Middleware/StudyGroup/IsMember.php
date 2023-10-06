<?php

namespace App\Http\Middleware\StudyGroup;

use App\Models\StudyGroup;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class IsMember
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
        $slug = Arr::last(request()->segments());
        $is_member = auth()->user()->studygroups->where('slug', $slug)->first();
        $studygroup = StudyGroup::where('slug', $slug)->first();
        
        if(!$is_member){
            return redirect('/studygroups/'.$slug.'/join');
        }

        return $next($request);
    }
}
