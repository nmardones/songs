<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $guarded = [];

    public function singer()
    {
        return $this->belongsTo(Singer::class);
    }
    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
