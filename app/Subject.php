<?php

namespace AutomatedTimeTable;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['id', 'name', 'total_session', 'semester', 'semester'];
    //
    public $incrementing = false;

    public function sessions() {
        return $this->hasMany(Session::class);
    }
}
