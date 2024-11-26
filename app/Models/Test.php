<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'test_name',
        'test_date',
        'test_time',
        'result_date',
        'description',
    ];
}
