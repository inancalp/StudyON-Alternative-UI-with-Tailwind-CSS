<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudyGroupController;
use App\Http\Controllers\JoinStudyGroupController;
use App\Models\StudyGroup;

require __DIR__.'/auth.php';
require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('dashboard', [
            'studygroups' => StudyGroup::all()
        ]);
    });

    //Profile
    Route::get('/profile/{user:slug}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/{user:slug}/edit', [ProfileController::class, 'edit'])->name('profile.edit'); //WIP


    //StudyGroup
    // Route::get('studygroup', [StudyGroupController::class, 'index'])->name('studygroup.index');

    Route::get('/studygroups/create', [StudyGroupController::class, 'create'])->name('studygroup.create');
    Route::post('/studygroups/store', [StudyGroupController::class, 'store'])->name('studygroup.store');
    
    Route::get('/studygroups/{studygroup:slug}', [StudyGroupController::class, 'show'])
        ->middleware('isMember')
        ->name('studygroup.show');

    Route::get('/studygroups/{studygroup:slug}/join', [JoinStudyGroupController::class, 'join'])->middleware('isAlreadyMember');
    Route::post('/studygroups/{studygroup:slug}/join', [JoinStudyGroupController::class, 'store'])->middleware('isAlreadyMember')->name('studygroup.join');

    // middleware('isAdmin') needed !
    Route::post('/studygroups/{studygroup:slug}/store-course', [CourseController::class, 'store'])->name('studygroup.course.store');
    
    // middleware('authIsUser') needed !
    Route::post('profile/{user:slug}/store-profile', [ProfileController::class, 'store'])->name('profile.store');
});
