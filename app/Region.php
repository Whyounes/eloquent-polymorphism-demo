<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function users()
    {
        return $this->morphMany(User::class, 'zones', 'zone_type', 'zone_id');
    }
}
