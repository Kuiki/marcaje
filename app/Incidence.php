<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidence extends Model
{
    protected $table = "incidents";
    protected $fillable = [
        'id', 'name', 'active'
    ];

    public function register()
    {
        return $this->hasMany(Register::class, 'incidence_departure_id');
    }
}
