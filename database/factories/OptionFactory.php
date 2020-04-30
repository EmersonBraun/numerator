<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

use App\Models\Option;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
| Consult database/factories/Faker.md to see the available fakers 
|
*/

$factory->define(Option::class, function (Faker $faker) {
    return [
        'name' => $faker->name, 
        'abbreviation' => $faker->name
    ];
});