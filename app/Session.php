<?php

namespace AutomatedTimeTable;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    //
    public $incrementing = false;

    public function subjects() {
        return $this->belongsTo(Subject::class);
    }
}
