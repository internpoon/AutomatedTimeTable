<?php

namespace AutomatedTimeTable;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    //
    public $incrementing = false;

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }
}
