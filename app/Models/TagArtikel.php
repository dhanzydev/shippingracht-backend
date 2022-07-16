<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagArtikel extends Model
{
    use HasFactory;

    protected $fillable = ['tags', 'slug'];

    protected $table = 'tags';

    public function artikel()
    {
        return $this->belongsToMany(Artikel::class);
    }
}
