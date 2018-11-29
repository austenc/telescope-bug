<?php

namespace App;

use App\One;
use App\Three;
use Illuminate\Database\Eloquent\Model;

class Two extends Model
{
    public function ones()
    {
        return $this->belongsToMany(One::class);
    }

    public function threes()
    {
        return $this->belongsToMany(Three::class);
    }
}
