<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'name',
        'description',
        'password'
    ];

    protected $hidden = [
        'password'
    ];

    public function moderators(){
        return $this->belongsToMany(User::class, 'pivot_moderator_studygroup', 'studygroup_id', 'user_id');
    }

    public function students(){
        return $this->belongsToMany(User::class, 'pivot_student_studygroup', 'studygroup_id', 'user_id');
    }

    public function courses(){
        return $this->hasMany(Course::class, 'studygroup_id');
    }
}
