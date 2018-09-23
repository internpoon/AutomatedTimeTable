<?php

namespace AutomatedTimeTable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    //
    public $incrementing = false;

    public function sessions() {
        return $this->hasMany(Session::class);
    }
}
