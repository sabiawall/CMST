<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'country',
        'state',
        'city',
        'zip_code',
        'street',
    ];          
}
