<?php

namespace AutomatedTimeTable;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = ['id', 'start_time', 'end_time', 'day', 'type', 'venue', 'lecturer', 'subject_id'];
    //
    public $incrementing = false;

    public function subjects() {
        return $this->belongsTo(Subject::class);
    }
}
