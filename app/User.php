<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'nama', 'email', 'password', 'username', 'action_id'
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function absensis()
    {
        return $this->hasMany(Absensi::class);
    }

    public function rayon()
    {
        return $this->hasMany(Rayon::class);
    }

    public function user_detail()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function action()
    {
        return $this->belongsTo(Action::class);
    }

    public function orangtua()
    {
        return $this->hasOne(Orangtua::class);
    }
}
