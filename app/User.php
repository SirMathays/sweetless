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

    /**
     * Return Fail relationship
     *
     * @return App\Fail
     */
    public function fail()
    {
        return $this->hasOne(Fail::class)->orderBy('failed_at', 'desc');
    }

    /**
     * Return Fails relationship
     *
     * @return App\Fail
     */
    public function fails()
    {
        return $this->hasMany(Fail::class)->orderBy('failed_at', 'desc');
    }
}
