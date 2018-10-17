<?php

namespace AutomatedTimeTable;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $fillable = ['id', 'name'];

    public $incrementing = false;

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

}
