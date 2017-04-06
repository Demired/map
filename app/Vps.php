<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vps extends Model
{
    //
    protected $table = 'vps';
    protected $fillable = ['nickname', 'ip', 'website', 'continent', 'province', 'accounts', 'country', 'city', 'lat', 'lng', 'startTime', 'billing', 'status', 'nickname', 'updated_at', 'created_at'];

}
