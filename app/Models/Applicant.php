<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_type',
        'name',
        'email',
        'secondary_email',
        'phone_number',
        'secondary_phone_no',
        'date_of_birth',
        'gender',
        'reference',
        'interested_course',
        'tags',
        'counsellor',
        'summary',
    ];
}
