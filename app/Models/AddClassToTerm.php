<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddClassToTerm extends Model
{
    use HasFactory;
    protected $fillable = ['term_id', 'class_id'];

    public function term()
    {
        return $this->belongsTo(Term::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class); // Changed to Classroom
    }
}