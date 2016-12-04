<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = [
        "user_id",
        "zoneable_id",
        "zoneable_type"
    ];

    public $timestamps = false;
}
