<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['title', 'slug', 'order'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
