<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SlugController extends Controller
{
    
    public function create($username){
        $slug = Str::lower($username);
        $slug = Str::replace(' ', '-', $slug);
        $slug = Str::replace('.', '', $slug);
        $slug = Str::replace("'", '', $slug);
        return $slug;
    }

}
