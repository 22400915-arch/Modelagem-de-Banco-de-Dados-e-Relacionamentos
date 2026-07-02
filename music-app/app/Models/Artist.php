<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['name', 'genre'];

    // Um artista possui MUITOS álbuns (1:N)
    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
