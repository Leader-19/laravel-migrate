<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherClassSubject extends Model
{
    use HasFactory;
    protected $fillable = ['subject_id', 'class_id', 'teacher_id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class); // Changed to Classroom
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}