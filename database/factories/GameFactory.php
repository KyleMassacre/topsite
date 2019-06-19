<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Game::class, function (Faker $faker) {
    return [
        'uuid'  =>  Str::uuid(),
        'name'  =>  $faker->company,
        'url'   =>  $faker->url,
        'description'   =>  $faker->realText($faker->numberBetween(30,60)),
        'is_premium'    =>  mt_rand(1,5) == 1 ? true : false,
        'category_id'   =>  1,
        'is_pending'    =>  0,
        'category_id'  =>  \App\Category::orderByRaw("RAND()")->limit(1)->first()->id,
    ];
});