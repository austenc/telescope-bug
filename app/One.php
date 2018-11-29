<?php

namespace App;

use App\Two;
use Illuminate\Database\Eloquent\Model;

class One extends Model
{
    public function twos()
    {
        return $this->belongsToMany(Two::class);
    }
}
