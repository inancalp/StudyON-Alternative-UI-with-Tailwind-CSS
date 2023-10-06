<?php

namespace App\Http\Controllers;

use App\Models\StudyGroup;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Course;
use App\Models\Slug;

class CourseController extends Controller
{
    public function store(StudyGroup $studygroup){
        
        $data = request()->validate([
            'name' => ['required', Rule::unique('courses', 'name')->where('studygroup_id', $studygroup->id)]
        ]);
        
        $slug = new Slug();
        $slug = $slug->create($data['name']);

        $course = new Course();
        $course->studygroup_id = $studygroup->id;
        $course->name = $data['name'];
        $course->slug = $slug;
        $course->save();

        return redirect()->back();

    }
}
