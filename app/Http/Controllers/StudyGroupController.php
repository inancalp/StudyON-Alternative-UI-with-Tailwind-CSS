<?php

namespace App\Http\Controllers;

use App\Models\StudyGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Slug;
use Illuminate\Validation\Rules\Password;

class StudyGroupController extends Controller
{   
    public function create(){
        return view('studygroup.create');
    }

    public function index(){
        // list of all studygroups comes here.
    }
    
    public function show(StudyGroup $studygroup){
        return view('studygroup.show', [
            'studygroup' => $studygroup
        ]);
    }

    public function store(){

        request()->validate([
            'admin_id' => 'required',
            'name' => ['unique:study_groups,name', 'max:255'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $slug = new Slug();
        $slug = $slug->create(request()->name);

        $studygroup = new StudyGroup();
        $studygroup->admin_id = request()->admin_id;
        $studygroup->name = request()->name;
        $studygroup->slug = $slug;
        $studygroup->description = request()->description;
        $studygroup->rules = request()->rules;
        $studygroup->password = Hash::make(request()->password);
        $studygroup->save();

        auth()->user()->studygroups()->toggle($studygroup);

        return redirect()->route('studygroup.show', [$studygroup]);
    }
}
