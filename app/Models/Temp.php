<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temp extends Model
{
    use HasFactory;

    protected $table = 'temp';
    protected $fillable = [
        'temp_in',
        'temp_out',
        'timestamp',
    ];

    
}
