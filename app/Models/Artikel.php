<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_artikel',
        'slug',
        'konten',
        'foto_sampul',
        'status',
        'kategori_id',
        'user_id',
    ];



    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriArtikel::class,'kategori_id');
    }

    public function tag()
    {
        return $this->belongsToMany(TagArtikel::class, 'artikel_tag');
    }

}
