<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

use App\Models\Numeration;
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

$factory->define(Numeration::class, function (Faker $faker) {
    return [
        'sequence' => $faker->numberBetween(1, 1000),
        'ref' => $faker->numberBetween(1, 1000),
        'year' => date('Y'),
        'ip' => $faker->ipv4,
        'description' => $faker->text(20),
        'option_id' => Option::all()->random()->id,
    ];
});
