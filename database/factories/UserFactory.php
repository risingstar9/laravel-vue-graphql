<?php

use Faker\Generator as Faker;


$factory->define(App\User::class, function (Faker $faker) {
    $g=['women','men'];
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'profile_image'=>'https://randomuser.me/api/portraits/'.$g[array_rand($g)].'/'.rand(0,99).'.jpg',
    ];
});
