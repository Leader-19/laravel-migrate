<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $fillable = ['name', 'description'];

    public function teacherClassSubjects()
    {
        return $this->hasMany(TeacherClassSubject::class, 'class_id');
    }

    public function studentClasses()
    {
        return $this->hasMany(StudentClass::class, 'class_id');
    }

    public function addClassToTerms()
    {
        return $this->hasMany(AddClassToTerm::class, 'class_id');
    }
}