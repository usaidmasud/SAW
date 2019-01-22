<?php

use Faker\Generator as Faker;

$factory->define(App\Pegawai::class, function (Faker $faker) {
    return [
        'nama_pegawai' => $faker->name,
        'pendidikan' => $faker->numberBetween(1,10),
        'usia' => $faker->numberBetween(1,10),
        'pengalaman' => $faker->numberBetween(1,10),
    ];
});
