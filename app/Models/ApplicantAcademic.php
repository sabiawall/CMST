<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantAcademic extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'institution',
        'degree_title',
        'degree_level',
        'passed_year',
        'course_start',
        'course_end',
        'subject',
        'result_type',
        'result_store'
    ];
}
