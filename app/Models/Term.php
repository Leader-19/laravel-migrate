<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'generation_id'];

    public function generation()
    {
        return $this->belongsTo(Generation::class);
    }

    public function addClassToTerms()
    {
        return $this->hasMany(AddClassToTerm::class, 'term_id');
    }
}