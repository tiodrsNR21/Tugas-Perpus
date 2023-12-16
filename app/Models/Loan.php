<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'loan_at',
        'return_at',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'loan_at' => 'date',
        'return_at' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
