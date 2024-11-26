<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceClass extends Model
{
    use HasFactory; 

    protected $fillable = [
        'service_id',
        'teacher_id',
        'start_time',
        'end_time',
        'start_date',
        'end_date',
        'weekdays',
        'no_of_seats',
        'email_to_notify',
        'number_to_notify',
    ];                                  
}
