<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityEligibilityAcademicScore extends Model
{
    use HasFactory;
    protected $fillable = [
        'level', 
        'overall_type', 
        'overall_score', 
        'academic_score_type'
    ];
}
