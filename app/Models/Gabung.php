<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gabung extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'email', 'alasan'
    ];

    protected $table = 'gabung';
}
