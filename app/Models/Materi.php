<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Materi extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'materi'
    ];

    protected $table = 'materi';
}
