<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'code',
        'type',
        'status',
        'vlaue'   

    ];

    public function discount($total)
    {
        if($this->type =='fixed'){
            return $this->value;
        }elseif($this->type == 'precentage'){
            dd(($this->value / 100) * filter_var($total, FILTER_SANITIZE_NUMBER_INT) );
        }else{
            return 0;
        }
    }
}
