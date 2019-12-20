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

$factory->define(App\Models\report::class, function (Faker $faker) {
    return [ 
        'computer_id'=> \App\Models\computer::all()->random()->id,
        'candidate_id'=> \App\Models\candidate::all()->random()->id,
	     ];
});