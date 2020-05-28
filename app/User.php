<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected static function booted()
    {
        static::created(function ($user) {
            // Create default statuses
            $user->statuses()->createMany([
                [
                    'title' => 'Backlog',
                    'slug' => 'backlog',
                    'order' => 1
                ],
                [
                    'title' => 'Up Next',
                    'slug' => 'up-next',
                    'order' => 2
                ],
                [
                    'title' => 'In Progress',
                    'slug' => 'in-progress',
                    'order' => 3
                ],
                [
                    'title' => 'Done',
                    'slug' => 'done',
                    'order' => 4
                ]
            ]);
        });
    }

    public function tasks()
    {
        return $this->hasMany(Task::class)->orderBy('order');
    }

    public function statuses()
    {
        return $this->hasMany(Status::class)->orderBy('order');
    }
}
