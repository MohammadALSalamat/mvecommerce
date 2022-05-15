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
      return   ($this->value / 100) * $total;
        }else{
            return 0;
        }
    }
}
