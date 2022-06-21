<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class likeDislike extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->belongsTo(helpUs::class,'id');
    }
}
