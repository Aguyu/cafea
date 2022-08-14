<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserva extends Model
{
    protected $fillable = [
        'table_id',
        'employee_id',
        'name',
        'date',
        'time'
    ];
}
