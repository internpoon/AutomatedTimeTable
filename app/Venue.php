<?php

namespace AutomatedTimeTable;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
