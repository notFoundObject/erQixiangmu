<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    //
    protected $table = 'configuration';
    
    //去除时间戳问题
    public $timestamps = false;
}
