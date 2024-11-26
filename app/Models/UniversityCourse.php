<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityCourse extends Model
{
    use HasFactory;
    protected $fillable = [
        'university_id', 
        'course_name', 
        'course_level', 
        'fee_per_year', 
        'course_period', 
        'semester_fee', 
        'course_link', 
        'course_code', 
        'document', 
        'criteria', 
        'scholarship', 
        'application_fee', 
        'annual_cost_of_living', 
        'description'   
    ];                                              
}
