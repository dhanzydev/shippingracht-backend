<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Materi extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'materi', 'views'
    ];

    public function incrementViewsCount($id)
    {
        $materi = Materi::find($id);
        $materi->views = $materi->views + 1;
        $materi->save();
    }

    protected $table = 'materi';
}
