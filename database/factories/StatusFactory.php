<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Status;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Status::class, function (Faker $faker) {
    return [
        'title' => $title = $faker->words(3, true),
        'slug' => Str::slug($title),
        'user_id' => factory(App\User::class)
    ];
});
