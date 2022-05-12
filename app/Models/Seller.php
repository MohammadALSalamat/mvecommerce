<?php

namespace App\Models;

use Laravel\Cashier\Billable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seller extends Authenticatable
{
    use HasFactory,Notifiable,Billable;
    protected $guard = 'sellers';

    public function products()
    {
        return $this->belongsTo(product::class,'vendor_id');
    }
}
