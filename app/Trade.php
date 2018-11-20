<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $fillable = [
        'user_id', 'buy_price', 'sell_price', 'trade_time', 'coin',
    ];
}
