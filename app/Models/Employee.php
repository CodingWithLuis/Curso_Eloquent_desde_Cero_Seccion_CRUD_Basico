<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'salary',
        'is_active',
        'hire_date',
        'age',
    ];

    protected $casts = [
        'hire_date' => 'date',
        'is_active' => 'boolean'
    ];
}
