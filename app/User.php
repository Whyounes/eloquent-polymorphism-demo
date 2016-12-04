<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cities()
    {
        return $this->morphedByMany(City::class, 'zone', 'zones', 'user_id', 'zone_id');
    }

    public function regions()
    {
        return $this->morphedByMany(Region::class, 'zone', 'zones', 'user_id', 'zone_id');
    }

    public function zones()
    {
        return $this->regions->pluck("cities")->flatten()->merge($this->cities);
    }
}
