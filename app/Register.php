<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    //
    protected $fillable = [
        'id', 'device', 'entryDate', 'entryNote', 'incidence_entry_id', 'departureDate', 'departureNote','incidence_departure_id', 'ip', 'user_id'
    ];

    public function user()
    {
      return $this->belongsTo(User::class,'user_id');
    }

    public function incidence_entry()
    {
      return $this->belongsTo(Incidence::class,'incidence_entry_id');
    }

    public function incidence_departure()
    {
      return $this->belongsTo(Incidence::class,'incidence_departure_id');
    }

}
