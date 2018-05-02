<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Carbon\Carbon;

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
     * The attributes that should be appended.
     *
     * @var array
     */
    protected $appends = [
        'gravatar'
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

    public function scopeStreak($query)
    {
        return $query->selectRaw('ifnull((select failed_at from fails where user_id = users.id order by failed_at DESC limit 1), created_at) as latest_fail')
            ->orderBy('latest_fail');
    }

    public function getGravatarAttribute()
    {
        $emailString = md5(strtolower(trim($this->email)));

        return "https://www.gravatar.com/avatar/$emailString?s=150";
    }
}
