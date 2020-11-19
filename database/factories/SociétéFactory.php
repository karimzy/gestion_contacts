<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Faker\Provider\Address;

$factory->define(App\Société::class, function (Faker $faker) {
    return [
        'nom' => $faker->word,
        'adresse' => $faker->address,
        'code_postal'=>Address::postcode(),
        'ville'=>$faker->word,
        'tel' => $faker->phoneNumber,
        'site_web' => 'https://' . $faker->word . '.com'
        
    ];
});
