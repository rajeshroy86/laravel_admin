<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class product extends Model
{
    use Notifiable;
    protected $fillable = [
        'catid', 'name', 'qty','price','model','sku','image','status'
    ];
}
