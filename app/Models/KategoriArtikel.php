<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kategori', 'slug'];

    protected $table = 'kategori_artikel';

    public function artikel()
    {
        return $this->hasMany(Artikel::class);
    }
}
