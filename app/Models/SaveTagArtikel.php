<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveTagArtikel extends Model
{
    use HasFactory;

    protected $fillable = ['tags'];

    protected $table = 'artikel_tag';
}
