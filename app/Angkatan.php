<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    protected $guarded = [];

    public function rombels()
    {
        return $this->hasMany(Rombel::class);
    }
}
