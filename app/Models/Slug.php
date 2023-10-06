<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Slug extends Model
{
    use HasFactory;

    public function create($data){
        $slug = Str::lower($data);
        $slug = Str::replace(' ', '-', $slug);
        $slug = Str::replace('.', '', $slug);
        return $slug;
    }
    
}
