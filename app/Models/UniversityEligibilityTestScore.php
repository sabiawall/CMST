<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityEligibilityTestScore extends Model
{
    use HasFactory;
    protected $fillable = [
        'university_id', 
        'test', 
        'overall_type', 
        'overall_score', 
        'listening', 
        'reading', 
        'writing', 
        'speaking'
    ];
}
