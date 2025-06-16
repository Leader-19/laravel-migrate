<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'profile', 'first_name', 'last_name', 'gender', 'email', 'password', 'province_id', 'generation_id'];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function generation()
    {
        return $this->belongsTo(Generation::class);
    }

    public function studentClasses()
    {
        return $this->hasMany(StudentClass::class, 'student_id');
    }
}