<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $guarded = [];

    public function singer()
    {
        return $this->belongsTo(Singer::class);
    }
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
