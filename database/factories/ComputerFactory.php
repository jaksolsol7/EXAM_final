<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\computer::class, function (Faker $faker) {
    return [
        'code' => Str::random(3),
        'location' =>$faker ->address, 
        'elector_id'=> \App\Models\elector::all()->random()->id,
        'candidate_id'=> \App\Models\candidate::all()->random()->id,
	     ];
});