<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
        'postal_code',
        'region_id',
    ];

    public $timestamps = false;

    public function users()
    {
        return $this->morphMany(User::class, 'zones', 'zone_type', 'zone_id');
    }
}
