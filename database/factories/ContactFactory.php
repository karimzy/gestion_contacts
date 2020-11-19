<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(App\Contact::class, function (Faker $faker) {
    $array_civilités=['Madame','Monsieur'];
    $array_fonctions=['Ingénieur','Medecin','Professeur','Inférmier','Minuisie'];
    return [
    	'civilité'=>Arr::random($array_civilités),
        'prénom' => $faker->firstName(),
        'nom' => $faker->lastName,
        'fonction' => Arr::random($array_fonctions),
        'téléphone' => $faker->phoneNumber,
        'date_naissance'=>$faker->date($format='Y-m-d',$max='now'),
        'e-mail' => $faker->safeEmail,
        'société_id' => factory('App\Société')->create()->id,
        'ville' => $faker->word 
        ];  
});
