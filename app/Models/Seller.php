<?php

namespace App\Models;

use App\Models\product;
use App\Models\productOrder;
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
        return $this->hasMany(product::class,'vendor_id');
    }

}
