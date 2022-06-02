<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagArtikel extends Model
{
    use HasFactory;

    protected $fillable = ['tag'];

    protected $table = 'tag_artikel';
}
