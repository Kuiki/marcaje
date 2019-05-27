<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable = [
        "id", "name", "path", "verified", "user_id"
    ];
}
