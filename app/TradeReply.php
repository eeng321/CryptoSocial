<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TradeReply extends Model
{
    protected $fillable = [
        'trade_id','user_id', 'content',
    ];
}
