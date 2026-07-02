<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['title', 'year', 'artist_id'];

    // Um álbum PERTENCE a um artista
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
