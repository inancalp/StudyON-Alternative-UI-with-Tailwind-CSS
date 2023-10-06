<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function show(User $user){
        return view('profile', [
            'user' => $user
        ]);
    }

    public function create($user){
        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->save();
    }

    public function store(User $user){
        // dd($user, request()->file(), request()->all());
        $data = request()->validate([
            'image' => ['required', 'image']
        ]);

        $data['image'] = request()->file('image')->store('profile_images');

        // return "CHECK!".$path;
        return back();

    }
}
