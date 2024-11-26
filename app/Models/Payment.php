<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'applicant_code',
        'description',
        'date',
        'grand_total',
        'discount',
        'paid',
        'payment_method',
        'remaining_payment',
        'status',
        'created_by'
    ];
}
