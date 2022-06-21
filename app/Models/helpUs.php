<?php

namespace App\Models;

use App\Models\likeDislike;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class helpUs extends Model
{
    use HasFactory;

    public function likes()
    {
        return $this->hasMany(likeDislike::class,'help_us_id');
    }
}
