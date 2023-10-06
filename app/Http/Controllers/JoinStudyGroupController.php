<?php

namespace App\Http\Controllers;

use App\Models\StudyGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class JoinStudyGroupController extends Controller
{
    public function join(StudyGroup $studygroup){
        return view('studygroup.join', [
            'studygroup' => $studygroup
        ]);
    }

    public function store(StudyGroup $studygroup){

        $is_correct = Hash::check(request()->password, $studygroup->password);

        request()->validate(['password' => 'required']);
        
        if(!$is_correct){
            request()->validate([
                'password' => ['required', 'current_password']
            ]);
        }

        auth()->user()->studygroups()->toggle($studygroup);
        
        return redirect('/studygroups/'.$studygroup->slug);

    }
}
