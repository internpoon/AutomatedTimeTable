<?php

namespace AutomatedTimeTable;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = ['id', 'start_time', 'end_time', 'day', 'type', 'capacity', 'venue_id', 'lecturer_id', 'subject_id'];
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
