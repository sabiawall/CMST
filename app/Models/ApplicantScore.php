<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'test_title',
        'overall_score',
        'listening',
        'reading',
        'writing',
        'speaking',
        'attended_date',
    ];              
}
