<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'profile', 'password'];

    public function teacherClassSubjects()
    {
        return $this->hasMany(TeacherClassSubject::class, 'teacher_id');
    }
}