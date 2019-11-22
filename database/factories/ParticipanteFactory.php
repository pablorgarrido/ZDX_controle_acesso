<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Participante;
use Faker\Generator as Faker;

$factory->define(Participante::class, function (Faker $faker) {
    return [
        'identificador' => uniqid(),
        'nome'          => $faker->name,
        'foto'          => $faker->file("storage\\tmp", "storage\app\public", false),
        'entrada'       => false,
    ];
});
