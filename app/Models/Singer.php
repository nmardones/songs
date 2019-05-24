<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Singer extends Model
{
    protected $guarded = [];

    public function song()
    {
        return $this->hasMany(Song::class);
    }
    public function album()
    {
        return $this->hasMany(Album::class);
    }
}
