<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function absensis()
    {
        return $this->hasMany(Absensi::class);
    }

    public function rombel()
    {
        return $this->belongsTo(Rombel::class);
    }

    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }

    public function orangtua()
    {
        return $this->belongsTo(Orangtua::class);
    }
}
